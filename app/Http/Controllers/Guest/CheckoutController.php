<?php

namespace App\Http\Controllers\Guest;

use Cart;
use Validator;
use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Events\CheckOutEvent;
use App\Helpers\MakeOrderNumber;
use App\Http\Controllers\Controller;
use App\Models\Products\ProductOrder;
use App\Models\Products\ProductVariant;

class CheckoutController extends Controller
{
    public function checkOut(){
        $carts = Cart::content();
        return view('guest.checkout.checkout')->with([
            'carts' => $carts,
        ]);
    }


    public function postCheckOut(Request $request)
    {


        $check = [
            'customer_email' => 'required|email',
            'customer_name' => 'required',
            'customer_phone' => 'required|max:10',
            'customer_address' => 'required|max:50',
        ];
        $mess = [
            'customer_email.required' => 'Vui lòng nhập Email',
            'customer_email.email' => 'Vui lòng nhập đúng định dạng email',
            'customer_name.required' => 'Vui Lòng Nhập Tên',
            'customer_phone.required' => 'Vui lòng nhập số điện thoại',
            'customer_phone.max' => 'Số điện thoại tối đa 10 số ',
            'customer_address.required' => 'Vui Lòng Nhập Địa Chỉ Giao Hàng',
        ];
        $validator = Validator::make($request->all(), $check, $mess);
        if ($validator->fails()) {
            return redirect()->route('check_out')->withErrors($validator)->withInput();
        } else {
            $order = Order::create([
                'order_number' => MakeOrderNumber::makeOrderNumber(),
                'total' => str_replace(',', '', Cart::subtotal()),
                // 'user_id'           => 1,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'customer_name' => $request->customer_name,
                'customer_address' => $request->customer_address,
                'note' => $request->note,
                'order_status' => config('custom.order_statuses.new')
            ]);
            $cartInfor = Cart::content();
            if (count($cartInfor) > 0) {
                $arr_id = [];
                foreach ($cartInfor as $key => $item) {
                    $qty = $this->checkAmount($item->id, $item->qty);
                    $array[$key] = [
                        'order_id' => $order->id,
                        'product_variant_id' => $item->id,
                        'amount' => $qty
                    ];
                    // HistoryImportProduct::updateOrCreateExportInDate($item->id, $qty);
                    // $this->updateAmount($item->id,$item->qty);
                    $order->product_variants()->sync($array);
                }
            }
            Cart::destroy();
            event(new CheckOutEvent($order, $request->customer_email, $request->customer_name));
            return redirect()->route('home');
        }
    }

    public function checkAmount($id, $qty)
    {
        $variant = ProductVariant::find($id);
        $order = $variant->countAmountOrderWaiting();
        $stock = $variant->amount - $order;
        if ($qty <= $stock)
            return $qty;
        return $stock;
    }
}

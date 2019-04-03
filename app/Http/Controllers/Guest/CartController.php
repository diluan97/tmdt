<?php

namespace App\Http\Controllers\Guest;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\ProductVariant;

class CartController extends Controller
{
    public function addToCartAjax(Request $request)
    {
        uniqid() . uniqid() . rand(1, 1000000);

        $cart = Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'options' => [
                'image' => $request->image,
                'size' => $request->size
            ],
        ]);
        $data = [
            $cart,
            'total' => Cart::subtotal(0, '.', ''),
            'amount' => count(Cart::content()),
        ];
        // $carts = Cart::content();

        return response()->json($data, 200);
        // return $amount;
    }

    public function getListCart(){
        $cartItem = Cart::content();

        return view('guest.cart.index')->with([
            'carts' => $cartItem,
        ]);
    }

    public function postCart(Request $request){
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'options' => [
                'image' => $request->image,
                'size' => $request->size
            ],
        ]);
        return redirect()->route('gio_hang')->with([
            'success' => 'Sản Phẩm Vừa Được Thêm Vào Giỏ Hàng'
        ]);
    }

    public function getDeleteCart()
    {
        Cart::destroy();
        $data = [
            'total' => 0
        ];
        return response()->json($data,200);
    }


    public function postMinusCart(Request $request,$id){
        $cart = Cart::get($id);;
        $qty = $cart->qty;
        $minusCart = Cart::update($id, array(
            'qty' => $qty-1,
        ) );
        $carts = Cart::get($id);
        $total = Cart::subtotal(0, '.', '');
        $data =[
            $carts,
            'total' => $total,

        ];
        return response()->json($data,200);

    }

    public function postPlusCart(Request $request, $id)
    {
        $cart = Cart::get($id);
        $qty = $cart->qty;
        $plusCart = Cart::update($id, array(
            'qty' => $qty + 1,
        ));
        $carts = Cart::get($id);
        $total = Cart::subtotal(0, '.', '');
        $data = [
            $carts,
            'total' => $total,

        ];
        return response()->json($data, 200);
    }

    public function getDeleteSingleProduct($id)
    {
        Cart::remove($id);
        $data=[
            'total' => Cart::subtotal(0, '.', ''),
        ];
        return response()->json($data, 200);
    }
}

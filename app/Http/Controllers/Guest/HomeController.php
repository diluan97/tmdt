<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products\Product;
use App\Models\Products\ProductVariant;
use App\Models\Contact;
use Auth;
use Validator;

class HomeController extends Controller
{
    public function getHome(){
        $categorySelling = Category::where('id',1)->first();
        $productSelling = Product::with('product_variants')->whereStatus(1)->where('category_id', $categorySelling->id)->orderBy('id', 'asc')->take(3)->get();
        $categorySpecial = Category::where('id',2)->first();
        $productSpecial = Product::with('product_variants')->whereStatus(1)->where('category_id', $categorySpecial->id)->inRandomOrder(3)->get();
        $categorySlide = Category::where('id', 3)->first();
        $productSlide = Product::with('product_variants')->whereStatus(1)->where('category_id', $categorySlide->id)->get();
        return view('guest.home.index')->with([
            'categorySelling' => $categorySelling,
            'productSelling' => $productSelling,
            'categorySpecial' => $categorySpecial,
            'productSpecial' => $productSpecial,
            'categorySlide'  => $categorySlide,
            'productSlide'  => $productSlide,
        ]);
    }

    public function getDetailProduct($slug){
        $productMore = Product::with('product_variants')->whereStatus(1)->get();
        $product = Product::with('product_variants')->whereStatus(1)->where('slug',$slug)->first();
        $variant = $product->product_variants->first();
        $image = $variant->image;
        // dd($image);
        return view('guest.product.detail')->with([
            'productMore' => $productMore,
            'product' => $product,
            'variant' => $variant,
            'image' => $image,
        ]);

    }

    public function getAllProduct(){
        $categories = Category::whereStatus(1)->get();
        $products = array();
        foreach($categories as $cate){
            $products[$cate->id] = Product::with('product_variants')->whereStatus(1)->where('category_id', $cate->id)->inRandomOrder(4)->get();
        }
        return view('guest.product.all_product_with_cate')->with([
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function getProductByCate($slug){
        $category = Category::where('slug', $slug)->first();
        $products = Product::with('product_variants')->whereStatus(1)->where('category_id', $category->id)->get();
        return view('guest.product.cate_product')->with([
            'category' => $category,
            'products' => $products
        ]);
    }


    public function getContact(){
        return view('guest.contact.contact');
    }

    public function postContact(Request $request)
    {
        $check = [
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required|max:200',
            'message' => 'required|max:500',
        ];
        $mess = [
            'email.required' => 'Vui lòng nhập Email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'name.required' => 'Vui Lòng Nhập Tên',
            'subject.required' => 'Vui Lòng Nhập Chủ Đề',
            'subject.max'      => 'Tên Tiêu Đề Quá Dài',
            'message.required' => 'Bạn muốn liên hệ hoặc góp ý gì với chúng tôi',
            'message.max'      => 'Nội Dung Qúa Dài',
        ];
        $validator = Validator::make($request->all(), $check, $mess);
        if ($validator->fails()) {
            return redirect()->route('check_out')->withErrors($validator)->withInput();
        } else {
            $order = Contact::create([
                'name' => $request->name,
                // 'user_id'           => 1,
                'email' => $request->email,
                'phone' => 0000000000,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            return redirect()->route('contact')->with(['success' => 'Yêu cầu của bạn đã được gửi đi']);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\ProductVariant;
use App\Models\Category;

class ApiAndroid extends Controller
{
    public function getProduct(){
        $arr = array();
        $products = Product::with('product_variants')->whereStatus(1)->get();
        foreach($products as $p){
            foreach($p->product_variants as $variant){
                $item = array(
                    'id' => $variant->id,
                    'name' => $p->name,
                    'price' => $variant->price,
                    'short_description' => strip_tags($p->short_description),
                    'image' => $variant->image,
                    'amount' => $variant->amount,
                );
            }
            array_push($arr, $item);
        }
        echo json_encode($arr);

    }


    public function getCategory(){
        $arr = array();
        $category = Category::whereStatus(1)->get();
        foreach ($category as $cate) {
            $item = array(
                'id' => $cate->id,
                'name' => $cate->name,
                'description' => strip_tags($cate->description),
                'image' => $cate->image,
            );
            array_push($arr, $item);
        }
        echo json_encode($arr);
    }
}

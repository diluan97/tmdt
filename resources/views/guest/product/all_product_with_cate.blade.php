@extends('layouts.guest.master')
@section('title','Hải Sản Tên Lửa')
@section('content')
@include('component.cart_modal')
<div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Tất Cả Sản Phẩm
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <!-- product left -->

            <!-- //product left -->
            <!-- product right -->
            <div class="agileinfo-ads-display col-md-12">
                <div class="wrapper">

                    <!-- first section (nuts) -->
                    @foreach($categories as $cate)
                    <div class="product-sec1">
                        <h3 class="heading-tittle">{{ $cate->name }}</h3>
                        @foreach($products[$cate->id] as $item)
                        @foreach($item->product_variants as $product)
                        @if($product->status == 1 &&  $product->image)
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img style="width:250px;height:200px" src="{{ asset('image/product/'.$product->image) }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ route('detail_product',$item->slug) }}" class="link-product-add-cart">Chi Tiết</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">{{ $item->getHot() }}</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">{{ $item->name }}</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">{{ $product->getPrice() }}</span>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">

                                       @if($product->getPrice() != "Liên Hệ")
                                         <button type="button" name="addToCart" data-url="{{ route('cartAjax') }}" class="btn btn-info btn-lg addToCart"
                                         data-toggle="modal"
                                         data-id="{{ $product->id }}"
                                         data-name="{{ $item->name }}"
                                         data-image="{{ $product->image }}"
                                         data-price="{{ $product->getPriceCart() }}"
                                         data-size="{{ $product->size }}"
                                         >Thêm Vào Giỏ Hàng</button>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
@endsection

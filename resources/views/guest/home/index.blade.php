@extends('layouts.guest.master')
@section('title','Hải Sản Tên Lửa')

@section('content')
@include('share.slide')
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
                     @if($categorySelling->status == 1)
                    <div class="product-sec1">

                        <h3 class="heading-tittle">{{ $categorySelling->name }}</h3>
                        @foreach($productSelling as $product)
                        @foreach($product->product_variants as $variant)
                        @if($variant->status == 1 && $variant->image)
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item" id="{{ $variant->id }}">
                                    <img  class="image_cart" style="width:250px;height:200px" src="{{ asset('image/product/'.$variant->image) }}"  id="{{ $variant->image }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ route('detail_product',$product->slug) }}" class="link-product-add-cart">Chi Tiết</a>
                                        </div>
                                    </div>
                                   {{ $product->getHot() }}
                                </div>
                                <div class="item-info-product ">
                                    <h4 class="name_cart" id="{{ $product->name }}">
                                        <a href="single.html">{{ $product->name }}</a>
                                    </h4>
                                    <div class="info-product-price size_cart" id="{{ $variant->size }}">
                                        <span class="item_price" id="{{ $variant->getPriceCart() }}">Giá :  {{ $variant->getPrice() }}</span>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        @if($variant->getPrice() != "Liên Hệ")
                                         <button type="button" name="addToCart" data-url="{{ route('cartAjax') }}" class="btn btn-info btn-lg addToCart"
                                         data-toggle="modal"
                                         data-id="{{ $variant->id }}"
                                         data-name="{{ $product->name }}"
                                         data-image="{{ $variant->image }}"
                                         data-price="{{ $variant->getPriceCart() }}"
                                         data-size="{{ $variant->size }}"
                                         data-rowId="{{ uniqid('12a34a5c67f89f12ef9') }}"
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
                        @endif

                    </div>
                    <!-- //first section (nuts) -->
                    <!-- second section (nuts special) -->
                    <!-- //second section (nuts special) -->
                    <!-- third section (oils) -->
                    @if($categorySpecial->status == 1)
                    <div class="product-sec1">
                        <h3 class="heading-tittle">{{ $categorySpecial->name }}</h3>
                        @foreach($productSpecial as $product)
                        @foreach($product->product_variants as $variant)
                        @if($variant->status == 1 && $variant->image)
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item" id="{{ $variant->id }}">
                                    <img style="width:250px;height:200px" src="{{ asset('image/product/'.$variant->image) }}"   id="{{ $variant->image }}" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ route('detail_product',$product->slug) }}" class="link-product-add-cart">Chi Tiết</a>
                                        </div>
                                    </div>
                                    {{ $product->getHot() }}
                                </div>
                                <div class="item-info-product ">
                                    <h4 class="name_cart" id="{{ $product->name }}">
                                        <a href="single.html">{{ $product->name }}</a>
                                    </h4>
                                    <div class="info-product-price size_cart" id="{{ $variant->size }}">
                                        <span class="item_price" id="{{ $variant->getPriceCart() }}">Giá : {{ $variant->getPrice() }}</span>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        @if($variant->getPrice() != "Liên Hệ")
                                         <button type="button" name="addToCart" data-url="{{ route('cartAjax') }}" class="btn btn-info btn-lg addToCart"
                                         data-toggle="modal"
                                         data-id="{{ $variant->id }}"
                                         data-name="{{ $product->name }}"
                                         data-image="{{ $variant->image }}"
                                         data-price="{{ $variant->getPriceCart() }}"
                                         data-size="{{ $variant->size }}"
                                         data-rowId="<?php uniqid() ?>"
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
                    @endif
                    <!-- //third section (oils) -->
                    <!-- fourth section (noodles) -->

                    <!-- //fourth section (noodles) -->
                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
    <!-- //top products -->
    <!-- special offers -->
    <div class="featured-section" id="projects">
        <div class="container">
            <!-- tittle heading -->

            <h3 class="tittle-w3l">{{ $categorySlide->name }}
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    @foreach($productSlide as $product)
                    @foreach($product->product_variants as $variant)
                    @if($variant->status == 1 && $variant->image)
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="{{ route('detail_product',$product->slug) }}">
                                    <img style="width:280px;height:150px" src="{{ asset('image/product/'.$variant->image) }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">{{ $product->name }}</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Giá : {{ $variant->getPrice() }}</h6>
                                </div>
                                @if($variant->getPrice() != "Liên Hệ")
                                         <button type="button" name="addToCart" data-url="{{ route('cartAjax') }}" class="btn btn-info btn-lg addToCart"
                                         data-toggle="modal"
                                         data-id="{{ $variant->id }}"
                                         data-name="{{ $product->name }}"
                                         data-image="{{ $variant->image }}"
                                         data-price="{{ $variant->getPriceCart() }}"
                                         data-size="{{ $variant->size }}"
                                         data-rowId="<?php uniqid() ?>"
                                         >Thêm Vào Giỏ Hàng</button>
                                        @endif
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

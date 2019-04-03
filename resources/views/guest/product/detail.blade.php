@extends('layouts.guest.master')
@section('title','Sản Phẩm | Hải Sản Tên Lửa')
@section('content')
@include('component.cart_modal')
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{ route('home') }}">Trang Chủ</a>
						<i>|</i>
					</li>
					<li>Sản Phẩm {{ $product->name}}</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Chi Tiết Sản Phẩm
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
								<div class="thumb-image">
									<img  style="width:435px;heigt:435px" src="{{ asset('image/product/'.$variant->image) }}" data-imagezoom="true" class="img-responsive image" alt=""> </div>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>{{ $product->name}}</h3>
				<p>
					<span class="item_price">Giá : {{ $variant->getPrice() }}</span>
				</p>
				<div class="single-infoagile">
					<ul>
                        <li  style="font-size:20px;">
                            {{ $variant->getInStock() }}
                        </li>
						<li>
							{!! $product->short_description !!}
						</li>
					</ul>
				</div>

				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        @if($variant->getPrice() != "Liên Hệ")
                            <button type="button" name="addToCart" data-url="{{ route('cartAjax') }}" class="btn btn-info btn-lg addToCart"
                            data-toggle="modal"
                            data-id="{{ $variant->id }}"
                            data-name="{{ $product->name }}"
                            data-image="{{ $variant->image }}"
                            data-price="{{ $variant->getPriceCart() }}"
                            data-size="{{ $variant->size }}"
                            >Thêm Vào Giỏ Hàng</button>
                        @endif
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Xem Thêm
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
                    @foreach($productMore as $item)
                    @foreach($item->product_variants as $variant)
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.html">
									<img style="width:250px;height:200px" src="{{ asset('image/product/'.$variant->image) }}" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.html">{{ $item->name }}</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>Giá : {{ $variant->getPrice() }}</h6>
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
                                         >Thêm Vào Giỏ Hàng</button>
                                        @endif
								</div>
							</div>
						</div>
                    </li>
                    @endforeach
                    @endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection

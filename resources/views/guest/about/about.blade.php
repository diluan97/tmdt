@extends('layouts.guest.master')
@section('title','Hải Sản Tên Lửa')
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
					<li>Về Chúng Tôi</li>
				</ul>
			</div>
		</div>
	</div>
<div class="welcome">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Nhà Hàng Hải Sản Tên Lửa Chúng Tôi
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
        <div class="w3l-welcome-info">

				<div class="col-sm-12 col-xs-12 welcome-grids">
                    <div class="welcome-img">
                    @foreach($about as $item)
                        <div class="row">
                            <div class="col-sm-6"><img  src="{{ asset('image/slide/'.$item->image) }}" class="img-responsive zoom-img" alt=""></div>
                            <div class="col-sm-6"><p>{{ $item->info }}</p></div>
                        </div>
                        <div class="clearfix"> </div>
                    @endforeach
                    </div>
                </div>


			</div>

		</div>
	</div>
@endsection

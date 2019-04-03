@extends('layouts.guest.master')
@section('title','Hải Sản Tên Lủa | Thanh Toán')
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
					<li>Thanh Toán</li>
				</ul>
			</div>
		</div>
	</div>
<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Thanh Toán
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4>Bạn Có :
					<span class="title_check">{{ count($carts) }} phẩm cần thanh toán .</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
                                <th>Sản Phẩm</th>
                                <th>Sản Phẩm</th>
								<th>SL</th>
								<th>Giá </th>
								<th>Xoá Sản Phẩm</th>
							</tr>
						</thead>
						<tbody class="remove_body">
                            @foreach($carts as $item)
							<tr class="rem1 remove_cart{{ $item->id }} " id="">
                                <div class="remove_body">
								<td class="invert-image">
									<a href="single2.html">
										<img style="width:50px;height:50px" src="{{ asset('image/product/'.$item->options->image) }}" alt=" " class="img-responsive">
									</a>
                                </td>
                                <td class="invert">{{ $item->name }}</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value">
												<span>{{ $item->qty }}</span>
											</div>
										</div>
									</div>
								</td>
								<td class="invert">{{ number_format($item->price) }} VNĐ</td>
								<td class="invert">
									<div class="rem">
										<div class="close1" id="{{ $item->id }}" data-url="{{ route('xoa_san_pham',$item->rowId) }}"> </div>
									</div>
                                </td>
                                </div>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="invert-image"></td>
                                <td class="invert"></td>
                                <td class="invert">Tổng Tiền</td>
                                <td class="total_check invert">{{  number_format(Cart::subtotal(0, '.', '')) }} VNĐ</td>
                                <td class="invert"><a name="" id="" data-url="{{ route('xoa_gio_hang') }}" class="btn_delete_check btn btn-primary delete_cart" href="#" role="button">Xoá Giỏ Hàng</a></td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Thông Tin Khách Hàng</h4>
					<form action="{{ route('thanh_toan') }}" method="post" class="creditly-card-form agileinfo_form">
                        @csrf
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
                                    <div class="controls">
										<input class="billing-address-name" type="email" name="customer_email" placeholder="Email" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="customer_name" placeholder="Họ Tên" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Số Điện Thoại" name="customer_phone" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Địa Chỉ" name="customer_address" required="">
											</div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Ghi Chú" name="total" >
											</div>
										</div>
										<div class="clear"> </div>
									</div>
                                </div>
                                @if(count($carts) > 0)
                                <button class="submit check_out">Thanh Toán</button>
                                @endif
							</div>
						</div>
					</form>
					{{--  <div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>  --}}
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection

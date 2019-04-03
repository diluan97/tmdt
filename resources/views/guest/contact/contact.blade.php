@extends('layouts.guest.master')
@section('title','Hải Sản Tên Lửa | Liên Hệ');
@section('content')
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{ route('home') }}">Home</a>
						<i>|</i>
					</li>
					<li>Liên Hệ</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Liên Hệ Với Chúng Tôi
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
            <!-- contact -->
            @if(Session::has('success'))
                <div class="alert alert-info" role="alert">
                    <span class="invalid-feedback" style="display:block;">
                                        <strong>{{ Session::get('success') }}</strong></span>
                </div>
                    @endif()
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="{{ route('lien_he') }}" method="post">
                            @csrf
							<div class="">
                                <input type="text" name="name" placeholder="Tên" required="">
                                @if ($errors->has('name'))
                                <div class="alert alert-success" role="alert">
                                    <span class="invalid-feedback" style="display:block;">
                                    <strong>{{ $errors->first('name') }}</strong></span>
                                </div>
                                @endif
							</div>
							<div class="">
                                <input class="text" type="text" name="subject" placeholder="Chủ Đề" required="">
                                @if ($errors->has('subject'))
                                <div class="alert alert-success" role="alert">
                                    <span class="invalid-feedback" style="display:block;">
                                    <strong>{{ $errors->first('subject') }}</strong></span>
                                </div>
                                @endif
							</div>
							<div class="">
                                <input class="email" type="email" name="email" placeholder="Email" required="">
                                @if ($errors->has('email'))
                                <div class="alert alert-success" role="alert">
                                    <span class="invalid-feedback" style="display:block;">
                                    <strong>{{ $errors->first('email') }}</strong></span>
                                </div>
                                @endif
							</div>
							<div class="">
                                <textarea placeholder="Nội Dung" name="message" required=""></textarea>
                                @if ($errors->has('message'))
                                <div class="alert alert-success" role="alert">
                                    <span class="invalid-feedback" style="display:block;">
                                    <strong>{{ $errors->first('message') }}</strong></span>
                                </div>
                                @endif
							</div>
							<input type="submit" value="Submit">
						</form>
					</div>
					<div class="contact-right wthree">
						<div class="col-xs-7 contact-text w3-agileits">
							<h4>Liên Lạc :</h4>
							<p>
								<i class="fa fa-map-marker"></i>273 Tên Lửa , P.Bình Trị Đông B , Quận Bình Tân , TPHCM</p>
							<p>
								<i class="fa fa-phone"></i> Điện Thoại : 333 222 3333</p>

							<p>
								<i class="fa fa-envelope-o"></i> Email :
								<a href="mailto:example@mail.com">mail@example.com</a>
							</p>
						</div>
						<div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
@endsection

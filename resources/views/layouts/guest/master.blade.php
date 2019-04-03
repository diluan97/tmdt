<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hải Sản Tên Lửa" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link rel="icon" href="{{ asset('image/logo/logo.jpg') }}" type="image/gif" sizes="16x16">
    <link href="{{asset('haisantenlua/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('haisantenlua/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('haisantenlua/css/font-awesome.css')}}" rel="stylesheet">
    <!--pop-up-box-->
    <link rel="stylesheet" href="{{ asset('haisantenlua/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('haisantenlua/css/respo-cart.css') }}" rel="stylesheet" type="text/css" media="all">
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="{{asset('haisantenlua/css/jquery-ui1.css')}}">
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
</head>

<body>
    <!-- top-header -->

    <!-- //top-header -->
    <!-- header-bot-->
    <div class="header-bot">
        <div class="header-bot_inner_wthreeinfo_header_mid">
            <!-- header-bot-->
            <div class="col-md-4 logo_agile">
                <h1>
                    <a href="index.html">
                        <span>H</span>ải
                        <span>S</span>ản
                        <span>T</span>ên
                        <span>L</span>ửa
                        <img  style="width:20%" src="{{ asset('image/logo/logo.jpg') }}" alt=" ">
                    </a>
                </h1>
            </div>
            <!-- header-bot -->
            <div class="col-md-8 header">
                <!-- header lists -->
                <ul>
                    <li>
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog1" style="width:300px">
                            <span class="fa fa-map-marker" aria-hidden="true"></span> Địa Chỉ</a>
                    </li>
                    {{--  <li>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
                    </li>  --}}
                    <li>
                        <span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span>Cho Nhân Viên </a>
                    </li>

                </ul>
                <!-- //header lists -->
                <!-- search -->
                <div class="agileits_search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="Bạn Muốn Tìm Món Ăn Gì?" required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
                    </form>
                </div>
                <!-- //search -->
                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            <button class="w3view-cart" data-toggle="modal" data-target="#myModal">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
                    </div>
                </div>
                <!-- //cart details -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- shop locator (popup) -->
    <!-- Button trigger modal(shop-locator) -->
    <div id="small-dialog1" class="mfp-hide">
        <div class="select-city">
            <h3>Địa Chỉ</h3>
            <h4>273 Tên Lửa , P.Bình Trị Đông B , Quận Bình Tân , TPHCM</h4>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //shop locator (popup) -->
    <!-- signin Model -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Dành Cho Nhân Viên </h3>
                        {{--  <p>
                            Sign In now, Let's start your Grocery Shopping. Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
                        </p>  --}}
                        @if(Auth::check())
                        <div>
                            <div class="styled-input agile-styled-input-top">
                                <span>Xin Chào {{ Auth::user()->name }}</span>
                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
                            </div>

                        </div>
                        @else
                        <form action="{{ route('login_guest') }}" method="post">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                <input type="email" placeholder="Tài Khoản" name="email" required="">
                                @if ($errors->has('email'))
                                <div class="alert alert-success" role="alert">
                                    <span class="invalid-feedback" style="display:block;">
                                    <strong>{{ $errors->first('email') }}</strong></span>
                                </div>
                                @endif
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Mật Khẩu" name="password" required="">
                                @if ($errors->has('password'))
                                <div class="alert alert-success" role="alert">
                                    <span class="invalid-feedback" style="display:block;">
                                    <strong>{{ $errors->first('password') }}</strong></span>
                                </div>
                                @endif
                            </div>
                            <input type="submit" value="Đăng Nhập">
                        </form>
                        @endif

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- //signin Model -->
    <!-- signup Model -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up</h3>
                        <p>
                            Come join the Grocery Shoppy! Lets set up your Account.
                        </p>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" placeholder="Name" name="Name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="email" placeholder="E-mail" name="Email" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Password" name="password" id="password1" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
                            </div>
                            <input type="submit" value="Sign Up">
                        </form>
                        <p>
                            <a href="#">By clicking register, I agree to your terms</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal2 -->
    <!-- //signup Model -->
    <!-- //header-bot -->
    <!-- navigation -->
    @include('share.header')
    <!-- //navigation -->
    <!-- banner -->

    <!-- //banner -->
    @yield('content')

    <!-- //special offers -->
    <!-- newsletter -->

    <!-- //newsletter -->
    <!-- footer -->
    <footer>
        <div class="container">
            <!-- footer first section -->
            <p class="footer-main">
                <span>"Hải Sản Tên Lửa"</span> Chúng tôi luôn muốn mang đến cho thực khách các món ăn ngon nhất , được chế biến tinh tế để thực khách được
                thưởng thức những món ăn ngon , sạch , tốt cho sức khoẻ.</p>
            <!-- //footer first section -->
            <!-- footer second section -->
            {{--  <div class="w3l-grids-footer">
                <div class="col-xs-4 offer-footer">
                    <div class="col-xs-4 icon-fot">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-8 text-form-footer">
                        <h3>Track Your Order</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-4 offer-footer">
                    <div class="col-xs-4 icon-fot">
                        <span class="fa fa-refresh" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-8 text-form-footer">
                        <h3>Free & Easy Returns</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-4 offer-footer">
                    <div class="col-xs-4 icon-fot">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-8 text-form-footer">
                        <h3>Online cancellation </h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>  --}}
            <!-- //footer second section -->
            <!-- footer third section -->
            <div class="footer-info w3-agileits-info">
                <!-- footer categories -->
                <div class="col-sm-5 address-right">

                    <div class="col-xs-6 footer-grids">
                        <h3>Loại Món Ăn</h3>
                        @foreach($categories1   as  $item)
                        @if($item->id <= $binary)
                        <ul>
                            <li>
                                <a href="product.html">{{ $item->name }}</a>
                            </li>
                        </ul>
                        @endif
                        @endforeach
                    </div>

                    <div class="col-xs-6 footer-grids agile-secomk">
                        @foreach($categories2   as  $item)
                        @if($item->id > $binary)
                        <ul>
                            <li>
                                <a href="product.html">{{ $item->name }}</a>
                            </li>
                        </ul>
                        @endif
                    @endforeach
                    </div>

                    <div class="clearfix"></div>
                </div>
                <!-- //footer categories -->
                <!-- quick links -->
                <div class="col-sm-6 address-right">
                    <div class="col-xs-6 footer-grids">
                        <h3>Liên Kết Nhanh</h3>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Trang Chủ</a>
                            </li>
                            <li>
                                <a href="{{ route('all_product') }}">Tất Cả Món Ăn</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">Về Chúng Tôi</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Liên Hệ</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 footer-grids">
                        <h3>Về Chúng Tôi</h3>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>273 Tên Lửa,P.Bình Trị Đông B, Bình Tân,TPHCM</li>
                            <li>
                                <i class="fa fa-mobile"></i> 333 222 3333 </li>
                            <li>
                                <i class="fa fa-phone"></i> +222 11 4444 </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:example@mail.com"> mail@example.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- //quick links -->
                <!-- social icons -->
                <!-- //social icons -->
                <div class="clearfix"></div>
            </div>
            <!-- //footer third section -->
            <!-- footer fourth section (text) -->
            <div class="agile-sometext">
                <div class="sub-some">
                    <h5>Đặt Hàng Online</h5>
                    <p>Gọi trực tiếp cho chúng tôi qua số điện thoại ... , hoặc đặt hàng trên website chúng tôi sẽ liên hệ và tư vấn cho bạn.</p>
                </div>
                <div class="sub-some">
                    <h5>Cửa hàng online với các sản phẩm với giá tốt nhất.</h5>
                    <p>Bạn hãy đón chờ các sản phẩm tốt với các mức giá tốt nhất dành cho bạn.</p>
                </div>
                <!-- brands -->
                {{--  <div class="sub-some">
                    <h5>Popular Brands</h5>
                    <ul>
                        <li>
                            <a href="product.html">Aashirvaad</a>
                        </li>
                        <li>
                            <a href="product.html">Amul</a>
                        </li>
                        <li>
                            <a href="product.html">Bingo</a>
                        </li>
                        <li>
                            <a href="product.html">Boost</a>
                        </li>
                        <li>
                            <a href="product.html">Durex</a>
                        </li>
                        <li>
                            <a href="product.html"> Maggi</a>
                        </li>
                        <li>
                            <a href="product.html">Glucon-D</a>
                        </li>
                        <li>
                            <a href="product.html">Horlicks</a>
                        </li>
                        <li>
                            <a href="product2.html">Head & Shoulders</a>
                        </li>
                        <li>
                            <a href="product2.html">Dove</a>
                        </li>
                        <li>
                            <a href="product2.html">Dettol</a>
                        </li>
                        <li>
                            <a href="product2.html">Dabur</a>
                        </li>
                        <li>
                            <a href="product2.html">Colgate</a>
                        </li>
                        <li>
                            <a href="product.html">Coca-Cola</a>
                        </li>
                        <li>
                            <a href="product2.html">Closeup</a>
                        </li>
                        <li>
                            <a href="product2.html"> Cinthol</a>
                        </li>
                        <li>
                            <a href="product.html">Cadbury</a>
                        </li>
                        <li>
                            <a href="product.html">Bru</a>
                        </li>
                        <li>
                            <a href="product.html">Bournvita</a>
                        </li>
                        <li>
                            <a href="product.html">Tang</a>
                        </li>
                        <li>
                            <a href="product.html">Pears</a>
                        </li>
                        <li>
                            <a href="product.html">Oreo</a>
                        </li>
                        <li>
                            <a href="product.html"> Taj Mahal</a>
                        </li>
                        <li>
                            <a href="product.html">Sprite</a>
                        </li>
                        <li>
                            <a href="product.html">Thums Up</a>
                        </li>
                        <li>
                            <a href="product2.html">Fair & Lovely</a>
                        </li>
                        <li>
                            <a href="product2.html">Lakme</a>
                        </li>
                        <li>
                            <a href="product.html">Tata</a>
                        </li>
                        <li>
                            <a href="product2.html">Sunfeast</a>
                        </li>
                        <li>
                            <a href="product2.html">Sunsilk</a>
                        </li>
                        <li>
                            <a href="product.html">Patanjali</a>
                        </li>
                        <li>
                            <a href="product.html">MTR</a>
                        </li>
                        <li>
                            <a href="product.html">Kissan</a>
                        </li>
                        <li>
                            <a href="product2.html"> Lipton</a>
                        </li>
                    </ul>
                </div>  --}}
                <!-- //brands -->
                <!-- payment -->
                {{--  <div class="sub-some child-momu">
                    <h5>Payment Method</h5>
                    <ul>
                        <li>
                            <img src="images/pay2.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay5.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay1.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay4.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay6.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay3.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay7.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay8.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay9.png" alt="">
                        </li>
                    </ul>
                </div>  --}}
                <!-- //payment -->
            </div>
            <!-- //footer fourth section (text) -->
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy-right">
        <div class="container">
            <p>© 2019 Hải Sản Tên Lửa. All rights reserved
            </p>
        </div>
    </div>
    <!-- //copyright -->

    <!-- js-files -->

    <!-- jquery -->
    <script src="{{ asset('haisantenlua/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('haisantenlua/js/ajax.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 0 : count;
                $input.val(count);
                $input.change();
                return false;
            });

        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });




		});
    </script>
   <script>

       $(window).load(function(){
           function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}



       });
   </script>
    <!-- //jquery -->

    <!-- popup modal (for signin & signup)-->
    <script src="{{ asset('haisantenlua/js/jquery.magnific-popup.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });


        });
    </script>
    <!-- Large modal -->
    <!-- <script>

	</script> -->
    <!-- //popup modal (for signin & signup)-->

    <!-- cart-js -->
    {{--  <script src="{{ asset('haisantenlua/js/minicart.js')}}"></script>  --}}

    <!-- //cart-js -->

    <!-- price range (top products) -->
    <script src="{{ asset('haisantenlua/js/jquery-ui.js')}}"></script>
    <script>
        //<![CDATA[
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>
    </script>
    <!-- //price range (top products) -->

    <!-- flexisel (for special offers) -->
    <script src="{{ asset('haisantenlua/js/jquery.flexisel.js')}}"></script>
    <script>
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            });

        });
    </script>
    <!-- //flexisel (for special offers) -->

    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- smoothscroll -->
    {{--  <script src="{{ asset('haisantenlua/js/SmoothScroll.min.js')}}"></script>  --}}
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{ asset('haisantenlua/js/move-top.js')}}"></script>
    <script src="{{ asset('haisantenlua/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script src="{{ asset('haisantenlua/js/bootstrap.js')}}"></script>
    <!-- //for bootstrap working -->
    <!-- //js-files -->


</body>

</html>

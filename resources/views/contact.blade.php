<!DOCTYPE html>
<!-- 


-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>Handicraft  - Responsive HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">

    <!-- main css -->
    <link href="{{URL::asset('/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/fonts.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/custom_animation.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/default.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/js/plugin/owl/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/css/colors/default.css') }}" rel="stylesheet">
    
    <!-- favicon links-->
    <link href="{{URL::asset('/images/favicon.png') }}" rel="stylesheet">
</head>

<body>
    <!--style switcher-->
    <div id="style-switcher">
        <h2>Style Switcher <a href="#"></a></h2>
        <div>
            <h3>Predefined Colors</h3>
            <ul class="colors">
                <li><a href="#" class="default" title="Default"></a></li>
                <li><a href="#" class="olive" title="Olive"></a></li>
                <li><a href="#" class="purple" title="Purple"></a></li>
                <li><a href="#" class="blue" title="Blue"></a></li>
                <li><a href="#" class="green" title="green"></a></li>
                <li><a href="#" class="orange" title="Orange"></a></li>
            </ul>
            <h3>Layout Style</h3>
            <select id="layout-style">
      <option value="1">Wide Layout</option>
      <option value="2">Boxed Layout</option>
    </select>
            <br>
            <div class="bgr hide">
                <h3>Background Pattern</h3>
                <ul class="colors bg" id="bg">
                    <li><a href="#" class="bg1"></a></li>
                    <li><a href="#" class="bg2"></a></li>
                    <li><a href="#" class="bg3"></a></li>
                    <li><a href="#" class="bg4"></a></li>
                    <li><a href="#" class="bg5"></a></li>
                    <li><a href="#" class="bg6"></a></li>
                </ul>
            </div>
        </div>
        <div id="reset">
            <button class="button color" value="Reload Page" onClick="window.location.reload();return false;">Reset</button>
        </div>
    </div>
    <!--main wrapper start-->
    <div id="wrapper">
        <!--top_header start-->
        <div class="hm_top_info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="hm_top_login">
                            <ul>
                                <li><a href="javascript:;" class="popup-with-form"><i class="fa fa-user" aria-hidden="true"></i> login</a></li>
                                <li><a href="javascript:;" class="popup-signup-form"><i class="fa fa-pencil" aria-hidden="true"></i> register</a></li>
                                <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> checkout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 pull-right">
                        <div class="top_usd">
                            <div class="hm_top_wishlist">
                                <p><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Wishlist</a></p>
                            </div>
                            <div class="hm_top_usd">
                                <p><a href="javascript:;"><i class="fa fa-angle-down" aria-hidden="true"></i> usd</a></p>
                                <ul class="usd_dropmenu">
                                    <li><a href="#">EUR - Euro</a></li>
                                    <li><a href="#">USD - US Dollar</a></li>
                                    <li><a href="#">GBP - British Pound</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header start-->
        <div class="hm_header_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6">
                        <div class="hm_logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="hm_top_Search_main">
                            <div class="hm_top_search">
                            <input type="search" name="search">
                            <span class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </div>
                            <div class="menu_btn"><span></span><span></span><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hm_header_overlay"></div>
        </div>
        <!--menu start-->
        <div class="hm_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="hm_menu_wrap">
							<nav>
								<!-- <div class="menu_btn"><span></span><span></span><span></span></div> -->
								<div class="hm_menu">
									<ul>
                                    <li class="active dropdown"><a href="/">home</a></li>
										<li><a href="/about">about</a></li>
										<li><a href="/services">services</a></li>
										<li><a href="/gallery">gallery</a> </li>
										<li><a href="blog.html">blog</a>
											<ul class="sub-menu">
												<li><a href="blog-two-column.html">blog two column</a></li>
												<li><a href="blog-three-column.html">blog three column</a></li>
												<li><a href="blog-single.html">blog single</a></li>
											</ul>
										</li>
										<li><a href="javascript:;">shop</a>
											<ul class="sub-menu">
												<li><a href="shop.html">shop</a></li>
												<li><a href="shop-single.html">shop single</a></li>
											</ul>
										</li>
										<li class="active dropdown"><a href="contact.html">contact</a></li>
									</ul>
								</div>
							</nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner start-->
        <div class="hm_bread_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>contact</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--About section start-->
        <div class="contact_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="contact_box">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h2>email</h2>
                            <p><a href="#">support@handmade.net</a></p>
                            <p><a href="#">support@handmade.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="contact_box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h2>phone</h2>
                            <p>+21036985247</p>
                            <p>+214567893218</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="contact_box">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h2>address</h2>
                            <p>665 Clinton Lane <br> Wilkes Barre, PA 18702</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact form wrapper-->
        <div class="contact_form_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 padding_left padding_right">
                        <div class="contact_map">
                            <div id="contact_map"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 padding_right padding_left">
                        <div class="hm_form">
                            <div class="col-lg-10 col-md-12">
                                <h1>send a message</h1>
                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group textarea">
                                        <textarea class="form-control" rows="3" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="con_btn">
                                        <a href="javascript:;" class="hm_btn submit_frm"> submit</a>
                                    </div>
                                    <p id="err_msg"></p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer start-->
        <div class="hm_footer_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="hm_footer_box">
                            <img src="assets/images/logo.png" alt="" class="img-responsive">
                            <p class="footer_about_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="hm_footer_box">
                            <h3 class="footer_heading">Help</h3>
                            <ul>
                                <li><a href="#">Find Your Beer</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Recent Orders</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="hm_footer_box">
                            <h3 class="footer_heading">links</h3>
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li><a href="shop.html">shop</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="javascript:;">login</a></li>
                            </ul>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="hm_footer_box hm_footer_contact">
                            <h3 class="footer_heading">Our Information</h3>
                            <ul>
                                <li>
                                    <div class="hm_footer_information">
                                        <span class="footer_icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </span>
                                    <p class="foo_con_para">787 Lakeview St. Marion, NC 28752</p>
                                    </div>

                                </li>
                                <li>
                                    <div class="hm_footer_information"><span class="footer_icon"><i class="fa fa-phone" aria-hidden="true"></i> </span>
                                    <p class="foo_con_para">+1800123654789 +1800123456788</p></div>
                                    
                                </li>
                                <li>
                                    <div class="hm_footer_information">
                                        <a href="mailto:jhini.mehta@gmail.com"><span class="footer_icon"><i class="fa fa-envelope" aria-hidden="true"></i> </span><p class="foo_con_para">support@handmade.net</p></a>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--bottom footer start-->
        <div class="hm_bottom_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2021 All Rights Reserved by Himanshusofttech</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="footer_so_icons">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--popup login form-->
        <div class="hm_login_form_overlay">
            <div class="hm_login_form">
                <div class="hm_login_header">
                    <h1>login form</h1>
                    <span class="login_close"><i class="fa fa-times" aria-hidden="true"></i></span>
                </div>
                <div class="login_fields">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="u-name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pass" placeholder="Password">
                        </div>
                        <div class="form_btn">
                            <a href="#" class="hm_btn"> login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--popup signup form-->
        <div class="hm_signup_form_overlay">
            <div class="hm_signup_form">
                <div class="hm_login_header">
                    <h1>signup form</h1>
                    <span class="login_close"><i class="fa fa-times" aria-hidden="true"></i></span>
                </div>
                <div class="login_fields">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="uname" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="u-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="re-password" placeholder="Re-type Password">
                        </div>
                        <div class="form_btn">
                            <a href="#" class="hm_btn"> register now</a>
                            <div class="register_info">already have an account? <a href="javascript:;">login</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--main wrapper-->
    </div>

    <!--script-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/plugin/owl/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/jquery.magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/switcher.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.googlemap.js') }}"></script>

    <!--map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNdePPJKYq0ptBV_AFi_4RnmUtMa1ZLFg&amp;libraries=places">
    <script>
        $(document).ready(function() {
            var myCenter = new google.maps.LatLng(51.508530, -0.076132);

            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 8,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("contact_map"), mapProp);
                var icon = {
                    url: 'images/icon/map_pin.png'
                };
                var marker = new google.maps.Marker({
                    position: myCenter,
                    map: map,
                    title: 'Template Bundle',
                    icon: icon
                });
                marker.setMap(map);
                var infowindow = new google.maps.InfoWindow({
                    content: "<span> Template Bundle </span>"
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        });
    </script>

</body>
</html>
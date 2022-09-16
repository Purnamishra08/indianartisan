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
    <link href="{{URL::asset('/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('/js/plugin/owl/owl.carousel.css') }}" rel="stylesheet">
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
                            <a href="index.html"><img src="/images/logo.png" alt="" class="img-responsive"></a>
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
                                    <li><a href="/home">home</a></li>
										<li><a href="/about">about</a></li>
										<li><a href="/services">services</a></li>
										<li><a href="/gallery">gallery</a></li>
										<li><a href="/blog">blog</a></li>	
                                        <li><a href="/shop">shop</a></li>									
										<li><a href="/contact">contact</a></li>
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
                        <h1>shop</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">shop</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--New Arrivals section start-->
        <div class="hm_arrivals_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="hm_heading hm_heading_01"><span class="hm_color">Our</span> New Arrivals</h1>
                    </div>
                </div>
              <div class="row">
                     
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="new_pro_box">
                                    <div class="new_pro_img">
                                        <img src="/images/new_pro1.jpg" alt="handmade-craft-arrivals1" class="img-fluid">
                                    </div>
                                    <div class="new_pro_data">
                                        <h3><a href="shop-single.html">Jellied eels.</a></h3>
                                        <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="new_pro_data_dollar">
                                            <span class="pro_price">$12 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--2-->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="new_pro_box">
                                    <div class="new_pro_data">
                                        <h3><a href="shop-single.html">Deep fried pomfret.</a></h3>
                                        <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="new_pro_data_dollar">
                                             <span class="pro_price">$16 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></span>
                                        </div>
                                       
                                    </div>
                                    <div class="new_pro_img">
                                        <img src="/images/new_pro2.jpg" alt="handmade-craft-arrivals2" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!--3-->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="new_pro_box">
                                    <div class="new_pro_img">
                                        <img src="/images/new_pro3.jpg" alt="handmade-craft-arrivals3" class="img-fluid">
                                    </div>
                                    <div class="new_pro_data">
                                        <h3><a href="shop-single.html">Marinated swordfish</a></h3>
                                        <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                          <div class="new_pro_data_dollar">
                                            <span class="pro_price">$12 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></span>
                                          </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--4-->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="new_pro_box">
                                    <div class="new_pro_img">
                                        <img src="/images/new_pro4.jpg" alt="handmade-craft-arrivals4" class="img-fluid">
                                    </div>
                                    <div class="new_pro_data">
                                        <h3><a href="shop-single.html">Jellied</a></h3>
                                        <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                         <div class="new_pro_data_dollar">
                                            <span class="pro_price">$18 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></span>
                                         </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--5-->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="new_pro_box">
                                    <div class="new_pro_data">
                                        <h3><a href="shop-single.html">Salmon</a></h3>
                                        <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        <div class="new_pro_data_dollar">
                                             <span class="pro_price">$16 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></span>
                                        </div>
                                       
                                    </div>
                                    <div class="new_pro_img">
                                        <img src="/images/new_pro5.jpg" alt="handmade-craft-arrivals5" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!--6-->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="new_pro_box">
                                    <div class="new_pro_img">
                                        <img src="/images/new_pro6.jpg" alt="handmade-craft-arrivals6" class="img-fluid">
                                    </div>
                                    <div class="new_pro_data">
                                        <h3><a href="shop-single.html">Salmon roe.</a></h3>
                                        <p>orem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                         <div class="new_pro_data_dollar">
                                              <span class="pro_price">$20 Only</span>
                                        <span class="cart_icon"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></span>
                                         </div>
                                      
                                    </div>
                                </div>
                            </div>
                        
                    </div>
            </div>
        </div>
        <!--About section start-->
        <div class="hm_product_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="hm_heading hm_heading_01"><span class="hm_color">Our</span> Featured Products</h1>
                    </div>
                </div>
                <div class="row">
                   
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="hm_pro_box">
                                <div class="hm_pro_img">
                                    <img src="/images/pro1.jpg" alt="" class="img-responsive">
                                    <div class="pro_price_wrap">
                                        <span class="pro_price">$89.99/-</span>
                                        <a href="#" class="pro_buy"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_pro_data">
                                    <h3><a href="#">Showcase Elephant</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <!--2-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="hm_pro_box">
                                <div class="hm_pro_img">
                                    <img src="/images/pro2.jpg" alt="" class="img-responsive">
                                    <div class="pro_price_wrap">
                                        <span class="pro_price">$85.99/-</span>
                                        <a href="#" class="pro_buy"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_pro_data">
                                    <h3><a href="#">Showcase</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <!--3-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="hm_pro_box">
                                <div class="hm_pro_img">
                                    <img src="/images/pro3.jpg" alt="" class="img-responsive">
                                    <div class="pro_price_wrap">
                                        <span class="pro_price">$90.99/-</span>
                                        <a href="#" class="pro_buy"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_pro_data">
                                    <h3><a href="#">Ladies Purse</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <!--4-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="hm_pro_box">
                                <div class="hm_pro_img">
                                    <img src="/images/pro4.jpg" alt="" class="img-responsive">
                                    <div class="pro_price_wrap">
                                        <span class="pro_price">$75.99/-</span>
                                        <a href="#" class="pro_buy"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_pro_data">
                                    <h3><a href="#">Wooden Showcase</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <!--5-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="hm_pro_box">
                                <div class="hm_pro_img">
                                    <img src="/images/pro5.jpg" alt="" class="img-responsive">
                                    <div class="pro_price_wrap">
                                        <span class="pro_price">$70.99/-</span>
                                        <a href="#" class="pro_buy"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_pro_data">
                                    <h3><a href="#">Paper Dolls</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                        </div>
                        <!--6-->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="hm_pro_box">
                                <div class="hm_pro_img">
                                    <img src="/images/pro6.jpg" alt="" class="img-responsive">
                                    <div class="pro_price_wrap">
                                        <span class="pro_price">$50.99/-</span>
                                        <a href="#" class="pro_buy"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="hm_pro_data">
                                    <h3><a href="#">Chair</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
                            <img src="/images/logo.png" alt="" class="img-responsive">
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
                            <input type="text" class="form-control" id="name" placeholder="Name">
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
                            <input type="text" class="form-control" id="email" placeholder="Email">
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

</body>

</html>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mission Ganesha - Ecommerce</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/vendor/line-awesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/vendor/themify.css">
    <!-- othres CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/plugins/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/plugins/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>layout/css/ecommerce-style.css">

</head>

<body>
    <div class="main-wrapper">
    <header class="header-area transparent-bar sticky-bar pt-10">
            <div class="main-header-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3">
                            <div class="logo">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="main-menu menu-common-style menu-lh-1 menu-margin-4 menu-font-3 ml-20 menu-others-page">
                                <nav>
                                    <ul>
                                        <li><a href="#">Home</a>
                                        </li>
                                        <li><a href="#">About </a>
                                        </li>
                                        <li><a href="<?= base_url('Ganesha-Shop') ?>">Shop </a>
                                        </li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-right-wrap mt-10">
                                <div class="header-wishlist">
                                    <a href="wishlist.html"><i class="la la-heart-o"></i></a>
                                </div>
                                <div class="header-login ml-40">
                                    <a href="<?= base_url('Ganesha-Login') ?>"><i class="la la-user"></i></a>
                                </div>
                                <div class="cart-wrap common-style ml-35">
                                    <button class="cart-active cart-3">
                                        <i class="la la-shopping-cart"></i>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <h4>Your Cart</h4>
                                            <a class="cart-close" href="<?= base_url('Ganesha-Cart') ?>"><i class="la la-close"></i></a>
                                        </div>
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="<?= base_url() ?>layout/images/ganesha/pic13.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Lord Ganesh Idol</a></h4>
                                                    <span>₹ 101.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="<?= base_url() ?>layout/images/ganesha/pic15.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Lord Ganesh Idol</a></h4>
                                                    <span>₹ 211.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="<?= base_url() ?>layout/images/ganesha/pic17.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Lord Ganesh Idol</a></h4>
                                                    <span>₹ 1001.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total">
                                                <h4>Subtotal <span class="shop-total">₹ 1313.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover default-btn text-center">
                                                <a class="black-color" href="<?= base_url('Ganesha-Cart') ?>">Continue to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main-search start -->
                <div class="main-search-active">
                    <div class="sidebar-search-icon">
                        <button class="search-close"><span class="la la-close"></span></button>
                    </div>
                    <div class="sidebar-search-input">
                        <form>
                            <div class="form-search">
                                <input id="search" class="input-text" value="" placeholder="Search Now" type="search">
                                <button>
                                    <i class="la la-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-small-mobile">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="<?= base_url() ?>layout/images/logo/logo-1.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">
                                <div class="cart-wrap common-style">
                                    <button class="cart-active">
                                        <i class="la la-shopping-cart"></i>
                                        <span class="count-style">3 Items</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <h4>Your Cart</h4>
                                            <a class="cart-close" href="#"><i class="la la-close"></i></a>
                                        </div>
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="<?= base_url() ?>layout/images/ganesha/pic13.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Lord Ganesh Idol</a></h4>
                                                    <span>₹ 101.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="<?= base_url() ?>layout/images/ganesha/pic15.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Lord Ganesh Idol</a></h4>
                                                    <span>₹ 211.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="<?= base_url() ?>layout/images/ganesha/pic17.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Lord Ganesh Idol</a></h4>
                                                    <span>₹ 1001.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total">
                                                <h4>Subtotal <span class="shop-total">₹ 1313.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover default-btn text-center">
                                                <a class="black-color" href="<?= base_url('Ganesha-Cart') ?>">Continue to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="la la-navicon la-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="la la-close"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="la la-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li><a href="#">Home</a>
                                </li>
                                <li><a href="#">About </a>
                                </li>
                                <li><a href="<?= base_url('Ganesha-Shop') ?>">Shop </a>
                                </li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="<?= base_url('Ganesha-Login') ?>">Login</a></li>
                                <li><a href="<?= base_url('Ganesha-Login') ?>">Creat Account</a></li>
                                <li><a href="<?= base_url('Ganesha-Account') ?>">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                    <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                    <a class="pinterest" href="#"><i class="ti-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="ti-instagram"></i></a>
                    <a class="google" href="#"><i class="ti-google"></i></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area bg-img" style="background-image:url(<?= base_url() ?>layout/images/ganesha/sonika-agarwal-RnjL5CicDVc-unsplash.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>login register page</h2>
                    <ul>
                        <li>
                            <a href="<?= base_url('Ganesha-Shop') ?>">Home</a>
                        </li>
                        <li class="active">login register </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-register-area pt-85 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="<?= base_url('Ganesha-Account') ?>" method="post">
                                                <input type="text" name="user-name" placeholder="Username">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input type="text" name="user-name" placeholder="Username">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <input name="user-email" placeholder="Email" type="email">
                                                <div class="button-box">
                                                    <button type="submit">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area section-padding-2 pt-80">
            <div class="container-fluid">
                <div class="footer-bottom pt-40">
                    <div class="copyright-3 text-center pt-20 pb-20 border-top-1">
                        <p>Copyright © <a href="#"></a>All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="<?= base_url() ?>layout/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Modernizer JS -->
    <script src="<?= base_url() ?>layout/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="<?= base_url() ?>layout/js/vendor/popper.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url() ?>layout/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="<?= base_url() ?>layout/js/plugins/countdown.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/counterup.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/images-loaded.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/isotope.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/instafeed.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/jquery-ui.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/magnific-popup.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/owl-carousel.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/scrollup.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/waypoints.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/slick.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/wow.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/textillate.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/elevatezoom.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/sticky-sidebar.js"></script>
    <script src="<?= base_url() ?>layout/js/plugins/smoothscroll.js"></script>
    <!-- Main JS -->
    <script src="<?= base_url() ?>layout/js/ecommerce-main.js"></script>
</body>

</html>
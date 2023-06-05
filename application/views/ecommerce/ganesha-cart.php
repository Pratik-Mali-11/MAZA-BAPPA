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
        <div class="breadcrumb-area bg-img" style="background-image:url(<?= base_url() ?>layout/images/ganesha/60f4413a43ab4.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>cart page</h2>
                    <ul>
                        <li>
                            <a href="<?= base_url('Ganesha-Shop') ?>">Home</a>
                        </li>
                        <li class="active">cart </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-main-area pt-85 pb-90">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img style="height: 100px; width: 100px;" src="<?= base_url() ?>layout/images/ganesha/pic13.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Lord Ganesh Idol</a></td>
                                            <td class="product-price-cart"><span class="amount">₹ 101.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">₹ 101.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="la la-pencil"></i></a>
                                                <a href="#"><i class="la la-close"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img style="height: 100px; width: 100px;" src="<?= base_url() ?>layout/images/ganesha/pic15.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Lord Ganesh Idol</a></td>
                                            <td class="product-price-cart"><span class="amount">₹ 211.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">₹ 211.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="la la-pencil"></i></a>
                                                <a href="#"><i class="la la-close"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img style="height: 100px; width: 100px;" src="<?= base_url() ?>layout/images/ganesha/pic17.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Lord Ganesh Idol </a></td>
                                            <td class="product-price-cart"><span class="amount">₹ 1001.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">₹ 1001.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="la la-pencil"></i></a>
                                                <a href="#"><i class="la la-close"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <a href="#">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Total products <span>₹ 1313.00</span></h5>
                                    <div class="total-shipping">
                                        <h5>Total shipping Charges</h5>
                                        <ul>
                                            <!-- <li><input type="checkbox"> Standard <span>$20.00</span></li> -->
                                            <li><input type="checkbox" checked> Standard <span>₹ 80.00</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Grand Total <span>₹ 1393.00</span></h4>
                                    <a href="#">Proceed to Checkout</a>
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
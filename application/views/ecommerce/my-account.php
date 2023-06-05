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
        <div class="breadcrumb-area bg-img" style="background-image:url(<?= base_url() ?>layout/images/ganesha/kedo-12YIJH5F6-w-unsplash.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>My account page</h2>
                    <ul>
                        <li>
                            <a href="<?= base_url('Ganesha-Shop') ?>">Home</a>
                        </li>
                        <li class="active">My account </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- my account wrapper start -->
        <div class="my-account-wrapper pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#orders" class="active" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                        <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                            Method</a>
                                        <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                                        <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                        <a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2021</td>
                                                                <td>Pending</td>
                                                                <td>₹ 101.00</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>July 22, 2021</td>
                                                                <td>Approved</td>
                                                                <td>₹ 211.00</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>June 12, 2021</td>
                                                                <td>On Hold</td>
                                                                <td>₹ 1001.00</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Payment Method</h3>
                                                <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Billing Address</h3>
                                                <address>
                                                    <p><strong>Alex Tuntuni</strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                        <p>Mobile: (123) 456-7890</p>
                                                </address>
                                                <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="first-name" class="required">First Name</label>
                                                                    <input type="text" id="first-name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Last Name</label>
                                                                    <input type="text" id="last-name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Display Name</label>
                                                            <input type="text" id="display-name" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email Addres</label>
                                                            <input type="email" id="email" />
                                                        </div>
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Current Password</label>
                                                                <input type="password" id="current-pwd" />
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new-pwd" class="required">New Password</label>
                                                                        <input type="password" id="new-pwd" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                        <input type="password" id="confirm-pwd" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button class="check-btn sqr-btn ">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->
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
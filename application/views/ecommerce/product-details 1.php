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
        <div class="breadcrumb-area bg-img" style="background-image:url(<?= base_url() ?>layout/images/ganesha/alin-andersen-8Mj83xR2S1I-unsplash.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Product details page</h2>
                    <ul>
                        <li>
                            <a href="<?= base_url('Ganesha-Shop') ?>">Home</a>
                        </li>
                        <li class="active">Product details </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-img-left">
                            <img src="<?= base_url() ?>layout/images/ganesha/51jAAuFwX1L.jpg" alt="product-details-img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content pro-details-content-modify">
                            <h2>Lord Ganesh Idol</h2>
                            <div class="product-ratting-review">
                                <div class="product-ratting">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-half-o"></i>
                                </div>
                                <div class="product-review">
                                    <span>40+ Reviews</span>
                                </div>
                            </div>
                            <div class="pro-details-price-wrap">
                                <div class="product-price">
                                    <span>₹ 521.00</span>
                                    <span class="old">₹ 701.00</span>
                                </div>
                                <div class="dec-rang"><span>- 30%</span></div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="01">
                                </div>
                            </div>
                            <div class="pro-details-compare-wishlist">
                                <div class="pro-details-wishlist">
                                    <a title="Add To Wishlist" href="#"><i class="la la-heart-o"></i> Add to wish list</a>
                                </div>
                            </div>
                            <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                <a href="#">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pb-90">
            <div class="container">
                <div class="row">
                    <div class="ml-auto mr-auto col-lg-10">
                        <div class="dec-review-topbar nav mb-40">
                            <a data-toggle="tab" href="#des-details1">Description</a>
                            <a class="active" data-toggle="tab" href="#des-details2">Specification</a>
                            <a data-toggle="tab" href="#des-details3">Reviews</a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane">
                                <div class="description-wrap">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane active">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="width1">Name / Model</td>
                                                <td>Lord Ganesh Idol</td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td>Categories</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Models</td>
                                                <td>FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Categories</td>
                                                <td>Product Type</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Size</td>
                                                <td>60’’ x 40’’</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Color</td>
                                                <td>Black, White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="dec-review-wrap mb-50">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <!-- <img src="<?= base_url() ?>layout/images/product-details/review-2.png" alt="review"> -->
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Prashant Patil</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dec-review-wrap">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <!-- <img src="<?= base_url() ?>layout/images/product-details/review-3.png" alt="review"> -->
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Mayur Wagh</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="<?= base_url() ?>layout/images/product/quickview-l1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="<?= base_url() ?>layout/images/product/quickview-l2.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="<?= base_url() ?>layout/images/product/quickview-l3.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="<?= base_url() ?>layout/images/product/quickview-l2.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="<?= base_url() ?>layout/images/product/quickview-s1.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="<?= base_url() ?>layout/images/product/quickview-s2.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="<?= base_url() ?>layout/images/product/quickview-s3.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="<?= base_url() ?>layout/images/product/quickview-s4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <span>Life Style</span>
                                    <h2>LaaVista Depro, FX 829 v1</h2>
                                    <div class="product-ratting-review">
                                        <div class="product-ratting">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-o"></i>
                                        </div>
                                        <div class="product-review">
                                            <span>40+ Reviews</span>
                                        </div>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="red"></li>
                                                <li class="blue"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">s</a></li>
                                                <li><a href="#">m</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-price-wrap">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                            <span class="old">$230.00</span>
                                        </div>
                                        <div class="dec-rang"><span>- 30%</span></div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </div>
                                    <div class="pro-details-compare-wishlist">
                                        <div class="pro-details-compare">
                                            <a title="Add To Compare" href="#"><i class="la la-retweet"></i> Compare</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i class="la la-heart-o"></i> Add to wish list</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
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
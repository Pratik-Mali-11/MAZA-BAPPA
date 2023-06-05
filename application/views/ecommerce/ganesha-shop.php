<!doctype html>
<html class="no-js" lang="zxx">

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

    <style type="text/css">
        .info{
            
        }
    </style>
</head>

<body>
    <div class="main-wrapper">

    <header class="header-area pt-11">
            <div class="main-header-wrap" style="background-color:white;height:100px;">
                <div class="container"   >
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3">
                            <div class="logo">
                                <img style="max-width: 100%;max-height:100%;size: 2vw;padding-bottom: 15px;"
                                    src="layout/images/nmclogo.png"
                                    alt=""
                                  />
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6" >
                            <div class="main-menu menu-common-style menu-lh-1 menu-margin-4 menu-font-3 ml-20 menu-others-page">
                                <nav style="padding-left: 20px;">
                                    <ul>
                                        <li><a href="./index.php" style="size: 1.5vw;">HOME</a>
                                        </li>
                                        <li><a href="#" style="size: 1.5vw;">ABOUT </a>
                                        </li>
                                        <li><a href="#" style="size: 1.5vw;">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-right-wrap mt-10">

                                <!-- <div class="header-wishlist">
                                    <a href="wishlist.html"><i class="la la-heart-o">wishlist</i></a>
                                </div> -->

                                <div class="header-login ml-40" style="padding-bottom: 15px;">
                                    <a href="<?= base_url('Ganesha-Login') ?>" ><button style="background-color: whitesmoke;font-size: 1.4vw;">Login</button></a>
                                </div>
                                <div class="header-login ml-40" style="padding-bottom: 15px;">
                                    <a href="<?= base_url('Ganesha-Login') ?>" ><button style="background-color: whotesmoke;font-size: 1.4vw;">Register</button></a>
                                </div>
                                <div class="cart-wrap common-style ml-35">

                                    <!-- shopping cart button -->
                                    <button class="cart-active cart-3">
                                        <i style="padding-left: 10px;">🛒</i>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <h4>Your Cart</h4>
                                            <a class="cart-close" href="<?= base_url('Ganesha-Cart') ?>"><i style="font-size:1.2vw;">x</i></a>
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
                                <li><a href="#">HOME</a>
                                </li>
                                <li><a href="#">ABOUT </a>
                                </li>
                                <li><a href="<?= base_url('Ganesha-Shop') ?>">Shop </a>
                                </li>
                                <li><a href="#">CONTACT</a></li>
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
        
         <div class="breadcrumb-area bg-img" style="background-image:url(<?= base_url() ?>layout/images/img9.jpg);size: 1vw;">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 style="font-size: 2.5vw;font:bold;">shop page</h2><br>
                <ul>
                    <li>
                        <a href="<?= base_url('./index.php') ?>" style="font-size: 1.2vw;font:bold;">Home</a>
                    </li>
                    <li class="active" style="font-size: 1.2vw;font:bold;">Shop Page</li> 
                </ul>
            </div>
        </div>
    </div>

        <div class="shop-area pt-90 pb-90" style="padding-top:50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-topbar-wrapper" style="size: 1vw;">
                            <div class="shop-topbar-left">
                                <!-- <div class="view-mode nav">
                                    <a class="active" href="#shop-1" data-toggle="tab"><i class=""></i></a>
                                    <a href="#shop-2" data-toggle="tab"><i class=""></i></a>
                                </div> -->
                                <div class="row">
                                    <div class="col-sm"><form class="example" style="max-width:100%;width: 500px;">
                                  <input style="background-color: white;" type="text" placeholder="Search.." name="search2"></form>
                                    </div> 
                                    <div style="padding-top: 10px;">
                                        <a href="./" onclick="" style="font-size:1.5vw;">🔍</a>
                                        <!-- <button style="font-size:1.5vw;">🔍</button> -->
                                    </div>                                   
                                </div>
                                
                                  
                                
                                    
                            </div>
                            <div class="product-sorting-wrapper">
                                <div class="product-shorting shorting-style" style="padding-top:5px;">
                                    <label>View:</label>
                                    <select style="size: 1vw;">
                                        <option value=""> 20</option>
                                        <option value=""> 23</option>
                                        <option value=""> 30</option>
                                    </select>
                                </div>
                                <div class="product-show shorting-style" style="padding-top:5px;">
                                    <label>Sort by:</label>
                                    <select style="size: 1vw;">
                                        <option value="" style="size: 1vw;">Default</option>
                                        <option value="" style="size: 1vw;"> Name</option>
                                        <option value="" style="size: 1vw;"> price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/51jAAuFwX1L.jpg" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 521.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/51wrFaVMnkL.jpg" alt="product"></a>
                                                    <span class="price-dec">-30%</span>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 601.00</span>
                                                            <span class="old">₹ 1001.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic3.jpg" alt="product"></a>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 101.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic19.jpg" alt="product"></a>
                                                    <span class="price-dec font-dec">NEW</span>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 221.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic1.jpg" alt="product"></a>
                                                    <span class="new-stock"><span>Stock <br>Out</span></span>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 501.00</span>
                                                            <span class="old">₹ 721.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic13.jpg" alt="product"></a>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 111.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic4.jpg" alt="product"></a>
                                                    <span class="price-dec font-dec">NEW</span>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 421.00</span>
                                                            <span class="old">₹ 601.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic5.jpg" alt="product"></a>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 301.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic6.jpg" alt="product"></a>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 611.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic11.jpg" alt="product"></a>
                                                    <span class="price-dec">-30%</span>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 121.00</span>
                                                            <span class="old">₹ 301.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic9.jpg" alt="product"></a>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 1001.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="<?= base_url('Ganesha-Product-Detail') ?>"><img src="<?= base_url() ?>layout/images/ganesha/pic10.jpg" alt="product"></a>
                                                    <span class="price-dec font-dec">NEW</span>
                                                    <div class="product-action">
                                                       <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i style="font-family:itallic">i</i></a>
                                                     
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    
                                                    <h4><a href="<?= base_url('Ganesha-Product-Detail') ?>">Lord Ganesh Idol</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>₹ 221.00</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-style text-center">
                                    <ul>
                                        <li><a class="prev" href="#">&#8249;</a></li>
                                        <li><a class="active" href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li><a href="#">05</a></li>
                                        <li><a href="#">06</a></li>
                                        <li><a class="next" href="#">&#8250;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
<footer class="footer-light border-top " style="background-color: whitesmoke;">
    <div class="container-fluid  text-ight footer mt-1 py-1 wow fadeIn" data-wow-delay="0.1s">

      <div class="container py-2">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <img src="layout/images/nmclogo.png" style="max-width:150px; max-height:70px;" />
            <p class="mb-2 text-black mb-4"><i class="fa fa-map-marker-alt me-3  " style="padding-top:20px;"></i>Nashik Municipal Corporation</p>
            <p class="mb-2 text-black mb-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
            <p class="mb-2 text-black mb-4"><i class="fa fa-envelope me-3"></i>info@example.com</p>
          </div>

          <div class="footer-bottom-info col-lg-4 col-md-4 ">
            <h4 class="pb-lg-4 pb-md-3 pb-3 ">Follow Us</h4>
            <div class="align-items-center justify-content-center"><a class="m-2 border-5 rounded-4 me-2 bg-white" href="https://twitter.com/my_nmc" target="_green"><i class="fab fa-twitter  "></i></a><a class=" m-1  border-5 rounded-4 me-2 bg-white" href="https://www.facebook.com/mynashikmc/" target="green"><i class="fab fa-facebook "></i></a><a class=" m-1  border-5 rounded-4 me-2 bg-white" href="https://www.youtube.com/c/mynmc" target="green"><i class="fab fa-youtube "></i></a><a class="m-1  border-5 rounded-4 me-2 bg-white" href="https://www.instagram.com/my_nmc/" target="_green"><i class="fab fa-instagram "></i></a></div>
          </div>
          <div class="col-lg-4 col-md-2">

            <a class="btn btn-link-black" href="">About Us</a>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                CONTACT US
              </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Helpline Number </a></li>
                <li><a class="dropdown-item" href="#">Feedback</a></li>

              </ul>
            </div>

            <a class="btn btn-link-dark" href="">Our Services</a>

          </div>
          <div class="col-lg-3 col-md-2">

            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.188371518644!2d73.77351521422774!3d20.00060722745621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeba0fc5f7df1%3A0xc0a291ab99639a35!2sNashik%20Municipal%20Corporation%2C%20Rajiv%20Gandhi%20Bhavan%2C!5e0!3m2!1sen!2sin!4v1671116361224!5m2!1sen!2sin" width="350" height="250" style="border-radius:50px 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>



        </div>
      </div>
    </div>
    <div class="d-none d-md-flex  p-h-40 justify-content-centre">
      <span class="" style="color: black;padding-left: 550px;">© 2021 Designed by E-Connect Innovative Solutions All rights reserved.</span>
      <!-- <ul class=" list-inline">
        <li class="list-inline-item">
          <a class="text-dark text-link" href="#">Legal</a>
        </li>
        <li class="list-inline-item">
          <a class="text-dark text-link" href="#">Privacy</a>
        </li>
        </ul> -->
    </div>
    <!-- Footer End -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h style="padding-left: 350px;padding-top: 10px;font-size: 1.5vw;font-family: itallic; ">Product Details</h>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="<?= base_url() ?>layout/images/ganesha/51jAAuFwX1L.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="<?= base_url() ?>layout/images/ganesha/pic6.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="<?= base_url() ?>layout/images/ganesha/pic23.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="<?= base_url() ?>layout/images/ganesha/pic26.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="<?= base_url() ?>layout/images/ganesha/51jAAuFwX1L.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="<?= base_url() ?>layout/images/ganesha/pic6.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="<?= base_url() ?>layout/images/ganesha/pic23.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="<?= base_url() ?>layout/images/ganesha/pic26.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Lord Ganesh Idol</h2>
                                    <div class="product-ratting-review">
                                        <div class="product-ratting">
                                            <i style="font-size: 20px;">⭐</i>
                                            <i style="font-size: 20px;">⭐</i>
                                            <i style="font-size: 20px;">⭐</i>
                                            <i style="font-size: 20px;">⭐</i>
                                            <i style="font-size: 20px;">⭐</i>
                                        </div>
                                        <div class="product-review">
                                            <span>40+ Reviews</span>
                                        </div>
                                    </div>
                                    <div class="pro-details-price-wrap">
                                        <div class="product-price">
                                            <span>₹ 551.00</span>
                                            <span class="old">₹ 1021.00</span>
                                        </div>
                                        <div class="dec-rang"><span>- 50%</span></div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="01">
                                        </div>
                                    </div>
                                    <div class="pro-details-compare-wishlist">
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i></i>+  Add to wish list</a>
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
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Ganesh Festival System &mdash; Home</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="ThemeZaa" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="#" />
  <!-- favicon icon -->
  <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
  <!-- style sheets and font icons  -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/font-icons.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/theme-vendors.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/responsive.css" />
  <style>
    atag.hover {
      color: #000;
    }

    @media only screen and (max-width: 600px) {
      .popup-img {
        height: auto !important;
      }
    }
    .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
 
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 5px 12px;
  border-top: none;
}

/* Style the responsive content in news ann */
.main {
  float: left;
  width: 60%;
  padding: 0 20px;
}

.right {
  background-color: #e5e5e5;
  float: right;
  width: 20%;
  padding: 15px;
  margin-top: 7px;
  text-align: center;
}

@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}

.youtube-video {
  aspect-ratio: 2.39/1
  width: 100%;
}

  </style>
</head>

<body data-mobile-nav-trigger-alignment="left" data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#333a3a">
  
  <!-- start header -->
  <header class="header-with-topbar">
      <nav
        class="
          navbar navbar-expand-lg
          top-space
          navbar-light
          bg-white
          header-light
          fixed-top
          navbar-boxed
          header-reverse-scroll"
      >
        <div class="container-fluid nav-header-container">
          <div class="col-6 col-lg-3 mr-auto pl-lg-5">
            <a class="navbar-brand" href="">
              <img
                style="max-width: 200px;max-height:70px;"
                src="layout/images/nmclogo.png"
                alt=""
              />
            
            </a>
          </div>
          <div class="col-7 menu-order px-lg-10">
            <button
              class="navbar-toggler float-left"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-left"
              id="navbarNav"
            >
              <ul class="navbar-nav alt-font" style="padding-left:70px">
                <li class="nav-item text-uppercase">
                  <a href="./index.php" class="nav-link" style="font-size:15px;">Home</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="layout/files/about-us.html" class="nav-link" style="font-size:15px;padding-left:20px" >About Us</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="layout/files/services1.html" class="nav-link" style="font-size:15px;padding-left:20px" >Services</a>
                </li>
                <!-- <li class="nav-item dropdown simple-dropdown text-uppercase">
                  <a href="#" class="nav-link" style="font-size:15px;" >Community</a>
                  <i
                    class="fa fa-angle-down dropdown-toggle"
                    data-toggle="dropdown"
                    aria-hidden="true"
                  ></i>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown">
                      <a href="./community.html"
                        >Join with Us<i
                          class="fas fa-angle-right dropdown-toggle"
                        ></i
                      ></a>
                    </li>
                    <li class="dropdown">
                      <a href="./career.html"
                        >Career<i class="fas fa-angle-right dropdown-toggle"></i
                      ></a>
                    </li>
                    <li class="dropdown">
                      <a href="./gallery.html"
                        >Gallery<i
                          class="fas fa-angle-right dropdown-toggle"
                        ></i
                      ></a>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="col-auto text-right pr-0 font-size-0">
            <div class="header-social-icon d-none d-sm-inline-block">
                <a href="http://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        </div>
      </nav>
    </header>
  <!-- end header -->

<!--courousel start-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="max-width:100%;max-height: 100%;"> 
    <div class="carousel-item active" style="height: 550px;">
      <img class="d-block w-100"  src="layout/images/newimg3.jpg" alt="First slide">
    </div>
    <div class="carousel-item" style="height:550px;">
      <img class="d-block w-100"  src="layout/images/img5.jpg" alt="Second slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--courousel end-->

   <section class="
                      padding-seven-lr
                      lg-padding-four-lr
                      md-padding-15px-lr
                      xs-no-padding-lr
                      padding-1-rem-bottom padding-1-rem-top" style="padding-top: 20px"> 
    <div class="container-fluid">
      <div class="row">
        <div class="col-auto text-center" class="main">
            <div class="
                        col-12
                        padding-1-rem-top padding-2-rem-right padding-2-rem-left
                        lg-padding-1-rem-all
                      ">
                    <h3 class="
                          alt-font
                          font-weight-700
                          text-center text-slate-blue
                          letter-spacing-minus-0px
                          margin-35px-bottom"
                          style="font-size: 19px; margin-bottom: -20px;">
                      News
                    </h3>
                  </div>

                  <div class="
                        padding-2-rem-right
                        padding-2-rem-left
                        padding-1-half-rem-bottom
                        lg-padding-1-rem-all
                      "  style="max-width: 100%;">
                    <hr/>
                    <marquee class="text-black bg-light-gray padding-1-half-rem-all" direction="up" height="400" scrollamount="4" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="width: 250px;">
                      <ul type="circle">
                        <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <!-- <img
                            width="35"
                            height="20"
                            src="https://tourism.nmc.gov.in/assets/images/new.gif"
                          /> -->
                          <a class="atag" href="https://nashikcorporation.in/" target="_blank">1. Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                        </li>
                        <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <a href="https://nashikcorporation.in/" target="_blank">2. Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                        </li>
                        <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <a href="https://nashikcorporation.in/" target="_blank">3. Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                        </li>
                        <!-- <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <img width="35" height="20" src="https://tourism.nmc.gov.in/assets/images/new.gif" /><a href="https://nashikcorporation.in/" target="_blank">Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                        </li> -->
                      </ul>
                    </marquee>
                  </div>
          </div>


        <!--youtube video start-->
          <div class="col-lg-3" style="padding-top: 6%;max-height: 100%;max-width: 100%;">
            <iframe class=" youtube-video " width="600" height="380" src="https://www.youtube.com/embed/hUq3QF1cacg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
          </div>
        <!--youtube video end-->  

          <div class="col-auto">
            <div class="
                        col-12
                        padding-1-rem-top padding-2-rem-right padding-2-rem-left
                        lg-padding-1-rem-all
                      ">
                    <h3 class="
                          alt-font
                          font-weight-700
                          text-center text-slate-blue
                          letter-spacing-minus-1px
                          margin-35px-bottom
                        " style="font-size:19px; margin-bottom: -20px" ;>
                      Announcements
                    </h3>
                  </div>

                  <div class="
                        padding-2-rem-right
                        padding-2-rem-left
                        padding-1-half-rem-bottom
                        lg-padding-1-rem-all
                      ">
                    <hr />
                    <marquee class="text-black bg-light-gray padding-1-half-rem-all" direction="up" height="400" scrollamount="4" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="width:250px;">
                      <ul type="circle">
                        <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <!-- <img
                            width="35"
                            height="20"
                            src="https://tourism.nmc.gov.in/assets/images/new.gif"
                          /> -->
                          <a class="atag" href="https://nashikcorporation.in/" target="_blank">1. Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                        </li>
                        <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <a href="https://nashikcorporation.in/" target="_blank">2. Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                        </li>
                        <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <a href="https://nashikcorporation.in/" target="_blank">3. Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                          <div>
                        </li>
                        <!-- <li class="
                              alt-font
                              font-weight-600
                              text-medium text-slate-blue
                              d-inline-block
                              w-90
                              xs-w-70
                              padding-1-rem-bottom
                            ">
                          <img width="35" height="20" src="https://tourism.nmc.gov.in/assets/images/new.gif" /><a href="https://nashikcorporation.in/" target="_blank">Due to the COVID-19 take care of yourself and
                            please stay at your home.
                          </a>
                        </li> -->
                      </ul>
                    </marquee>
                  </div>
          </div>

        </div>

      </div>
    </div>    
  </section>  
  
    <section class="
            padding-seven-lr
            lg-padding-four-lr
            md-padding-15px-lr
            xs-no-padding-lr
            padding-1-rem-bottom padding-1-rem-top" style="padding-top:20px;">                      
      <br />
      <div class="container-fluid">
        <div class="
  row row-cols-1 row-cols-xl-4 row-cols-lg-4 row-cols-sm-2
  justify-content-center
  ">

          <!-- start feature box item -->
          <div class="margin-30px-bottom col col-xl-4 text-center">
            <a href="<?= base_url('Book-slot') ?>">
              <div class="
    feature-box feature-box-left-icon-middle feature-box-shadow
    shadow-lg
    border-radius-4px
    h-100
    padding-30px-all
    bg-slate-blue
    ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
                  fab fa-wpforms
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content" style="font-family: inherit">
                  <span class="text-uppercase text-light font-weight-600">Book Ganesh Visarjan Slot <br>/ गणेश विसर्जन स्लॉट बुक करा
                  </span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->
          <!-- start feature box item -->
          <div class="margin-30px-bottom col col-xl-4 text-center">
            <a href="<?= base_url('Tank-On-Wheel') ?>">
              <div class="
    feature-box feature-box-left-icon-middle feature-box-shadow
    shadow-lg
    border-radius-4px
    h-100
    padding-30px-all
    bg-slate-blue
    ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
      fas fa-truck-pickup
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content" style="font-family: inherit">
                  <span class="text-uppercase text-light font-weight-600">Tank on Wheel /<br>मूर्ती दान
                  </span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->
          <!-- start feature box item -->
          <div class="col margin-30px-bottom col-xl-4 text-center">
            <a href="<?= base_url('Get-ammonium') ?>">
              <div class="
    feature-box feature-box-left-icon-middle feature-box-shadow
    shadow-lg
    border-radius-4px
    h-100
    padding-30px-all
    bg-slate-blue
    ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
                  fas fa-shopping-bag
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content">
                  <span class="text-uppercase text-light font-weight-600">Get Ammonium Bicarbonate / अमोनियम बायकार्बोनेट मिळवा</span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->
          <!-- start feature box item -->
          <div class="col margin-30px-bottom col-xl-4 text-center">
            <a href="<?= base_url('Org-registration') ?>">
              <div class="
    feature-box feature-box-left-icon-middle feature-box-shadow
    shadow-lg
    border-radius-4px
    h-100
    padding-30px-all
    bg-slate-blue
    ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
                  fas fa-user-alt
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content">
                  <span class="text-uppercase text-light font-weight-600">Organization Registration / संस्था नोंदणी</span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->


                    <!-- start modal pop-up -->
                    <div id="modal-popup2" class="
                              zoom-anim-dialog
                              col-11 col-xl-6 col-lg-6 col-md-8 col-sm-9
                              mx-auto
                              bg-white
                              text-center
                              modal-popup-main
                              padding-4-half-rem-all
                              mfp-hide
                              border-radius-6px
                              sm-padding-2-half-rem-lr
                              ">
                                          <span class="
                              text-extra-dark-gray text-uppercase
                              alt-font
                              text-extra-large
                              font-weight-600
                              margin-15px-bottom
                              d-block
                              ">Guidelines</span>
            <button title="Close (Esc)" type="button" class="mfp-close text-dark">
              ×
            </button>
            <p>
              Lorem ipsum is simply dummy text of the printing and typesetting
              industry lorem ipsum has been the industry's standard dummy text
              ever.
            </p>
            <p>
              Lorem ipsum is simply dummy text of the printing and typesetting
              industry lorem ipsum has been the industry's standard dummy text
              ever.
            </p>
            <p>
              Lorem ipsum is simply dummy text of the printing and typesetting
              industry lorem ipsum has been the industry's standard dummy text
              ever.
            </p>
            <p>
              Lorem ipsum is simply dummy text of the printing and typesetting
              industry lorem ipsum has been the industry's standard dummy text
              ever.
            </p>
            <a class="
                  btn btn-large btn-info
                  d-table d-lg-inline-block
                  lg-margin-15px-bottom
                  md-margin-auto-lr
                  " target="_blank" href="https://nmcfest.nmc.gov.in/">Agree Terms</a>
          </div>
          <!-- end modal pop-up -->
          <!-- start feature box item -->
          <div class="col margin-30px-bottom col-xl-4 btn-dual text-center">
            <!-- <a href="<?= base_url('mandal_registration') ?>"> -->
            <a class="popup-with-zoom-anim" href="#modal-popup2">
              <div class="
    feature-box feature-box-left-icon-middle feature-box-shadow
    shadow-lg
    border-radius-4px
    h-100 
    padding-30px-all
    bg-slate-blue
    ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
                  fas fa-user-plus
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content">
                  <span class="text-uppercase text-light font-weight-600">Ganesh Mandal Registration / गणेश मंडळ नोंदणी</span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="margin-30px-bottom col col-xl-4 text-center">
            <a href="<?= base_url('Ganesha-Shop') ?>">
              <div class="
      feature-box feature-box-left-icon-middle feature-box-shadow
      shadow-lg
      border-radius-4px
      h-100
      padding-30px-all
      bg-slate-blue
      ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
                  fas fa-shopping-basket
        icon-medium
        text-gradient-sky-blue-pink
        "></i>
                </div>
                <div class="feature-box-content" style="font-family: inherit">
                  <span class="text-uppercase text-light font-weight-600">Book Echo-Friendly Ganesha /<br>इको-फ्रेंडली गणेश मूर्ती बुक करा
                  </span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->
        </div>
      </div>
    </section>

<!-- sevices and geolocations start -->


    <section class="padding-seven-lr lg-padding-four-lr md-padding-15px-lr xs-no-padding-lr padding-1-rem-bottom padding-1-rem-top">
      <div class="section-main-heading" style="text-align: center; color:black;font-family: Poppins;border-top: 3px solid #bbb;">
        <p class="main-heading-title"></p><h3 class="main-heading-border" style="font-size:2vw; ">
          sevices and geolocations<p></p>
      </div>

        
          <div class="container-fluid">
            <div class="row" style="padding-left: 35px">
        <div class="col">
          <a class="btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" class="tablinks" onclick="option(event, 'Ammonium centers')" style="font-size:0.99vw;" >&nbsp;&nbsp;&nbsp;&nbsp;Ammonium centers&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
        <div class="col" >
          <a class="btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr"  class="tablinks" onclick="option(event, 'Ganesh Idol Centers')" style="font-size:0.99vw;" >&nbsp;&nbsp;&nbsp; Ganesh Idol centers&nbsp;&nbsp;&nbsp; </a>
        </div>
        <div class="col" style="padding-right:35px;" >
          <a class="btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" class="tablinks" onclick="option(event, 'Ganesh Mandal locations')" style="font-size:0.955vw;" >Ganesh Mandal Locations</a>
        </div>
        <div class="col">
         <a class="btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" class="tablinks" onclick="option(event, 'Served locations')" style="font-size:0.99vw;" >&nbsp;&nbsp;&nbsp;&nbsp; Served locations &nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
      </div>
    </div>   
      
      <div id="Ammonium centers" class="tabcontent" style="display: block;">
            <div class="container" class="main" style="padding-top: 30px;padding-right: 41px;padding-left: 45px;max-width: 100%;max-height: 100%;">
              <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1USqav4-RnBW_Z9GK7QdsZ5svo2Me-niJ" width="100%" height="500"></iframe>
            </div>
          </div>

      <div id="Ganesh Idol Centers" class="tabcontent">
        <div class="container" style="padding-top: 30px;padding-right: 41px;padding-left: 45px;">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1dbIeaK-8z2SFFwOrWeMJlr5aKNQ74p8&usp" width="100%" height="500"></iframe>
                  </div> 
      </div>

      <div id="Ganesh Mandal locations" class="tabcontent">
        <div class="container" style="padding-top: 30px;padding-right: 41px;padding-left: 45px;">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1RI0jwBBHqCVCQx3ti1pIoZhVoO4EZNc&ehbc=2E312F" width="100%" height="500"></iframe>
                  </div>
      </div>

      <div id="Served locations" class="tabcontent">
        <div class="container" style="padding-top: 30px;padding-right: 41px;padding-left: 45px;">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1ZZkXpInayRP-7tQly_xw43ujqVOy41M&ehbc=2E312F" width="100%" height="500"></iframe>
                  </div>
      </div>
    </section>
<!-- sevices and geolocations end --> 

   <!-- map  -->
<!-- <section class="padding-seven-lr lg-padding-four-lr md-padding-15px-lr xs-no-padding-lr padding-1-rem-bottom padding-1-rem-top">
            <div class="container">
              <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1USqav4-RnBW_Z9GK7QdsZ5svo2Me-niJ" width="100%" height="500"></iframe>
            </div>
          </section> -->

 <!-- map -->



    <!-- start section -->
  <section class="padding-seven-lr lg-padding-four-lr md-padding-15px-lr xs-no-padding-lr padding-1-rem-bottom padding-1-rem-top">

    <div class="container-fluid" style="border-top: 3px solid #bbb;padding-left:  40px;">
      <div class="row justify-content-md-right" style="padding-top:10px;">
        <div class="col col-auto" style="padding-left: 120px;padding-top: 30px;">
          <a class="btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" class="tablinks1" onclick="option1(event, 'Festival info')" style="height:45px;font-size: 0.99vw;">Festival Information</a>
        </div> 

         

          <div class="col-auto" style="padding-left:150px;">
                    <a class="navbar-brand" href="./">
                      <img
                        style="max-width:250px;height:auto; margin-left: 10px;"
                        src="layout/images/nmclogo.png"
                        alt=""
                      />                    
                    </a>
          </div>

          <div class="row justify-content-md-center">
      <div class="col col-auto" style="padding-left:150px;padding-top: 30px;">
        <div class="dropdown">
          <button class="btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" style="height:45px;font-size: 0.99vw;">
        Citizen Testimonials      ↓ 
          </button>
           <ul class="dropdown-menu">
            <li><a class="dropdown-item active" class="tablinks1" onclick="option1(event,'review')" style="height:40px;font-size: 0.99vw;" Festival Information>1.Citizen reviews</a></li>
            <li><a class="dropdown-item active" class="tablinks1" onclick="option1(event,'vid')" style="height:40px;font-size: 0.99vw;"Video Feedback>2.Video feedback</a></li>
          </ul>
        </div>
      </div>
  </div>
</div>
</div>
  <div id="Festival info" class="tabcontent1" style="display: block;">
        <div class="container" style="padding-top: 20px;padding-right: 41px;padding-left: 27px;">
          <iframe src="layout/files/festiv.html" width="100%" height="500"></iframe>
        </div>
  </div>
  <div id="review" class="tabcontent1" style="">
        <div class="container" style="padding-top: 20px;padding-right: 41px;padding-left: 50px;">
          <iframe src="layout/files/cr.html" width="100%" height="500"></iframe>
        </div>
  </div> 
  <div id="vid" class="tabcontent1">
        <div class="container" style="padding-top: 20px;padding-right: 41px;padding-left: 27px;">
          <iframe src="layout/files/vr.html" width="100%" height="500"></iframe>
        </div>
  </div> 
</section>  
    <!-- end section -->
 


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

          <div class="footer-bottom-info col-lg-4 col-md-4 " style="color:black;">
            <h4 class="pb-lg-4 pb-md-3 pb-3 ">Follow Us</h4>
            <div class="align-items-center justify-content-center" style="color:black;"><a class="m-2 border-5 rounded-4 me-2 bg-white" href="https://twitter.com/my_nmc" target="_green"><i class="fab fa-twitter  "></i></a><a class=" m-1  border-5 rounded-4 me-2 bg-white" href="https://www.facebook.com/mynashikmc/" target="green"><i class="fab fa-facebook "></i></a><a class=" m-1  border-5 rounded-4 me-2 bg-white" href="https://www.youtube.com/c/mynmc" target="green"><i class="fab fa-youtube "></i></a><a class="m-1  border-5 rounded-4 me-2 bg-white" href="https://www.instagram.com/my_nmc/" target="_green"><i class="fab fa-instagram "></i></a></div>
          </div>
          <div class="col-lg-4 col-md-2">

            <a class="btn btn-link-black" href="layout/files/sample about-us.html">About Us</a>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                CONTACT US
              </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Helpline Number </a></li>
                <li><a class="dropdown-item" href="#">Feedback</a></li>

              </ul>
            </div>

            <a class="btn btn-link-dark" href="layout/files/services1.html">Our Services</a>

          </div>
          <div class="col-lg-3 col-md-2">

            <div style="padding-left: 400px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.188371518644!2d73.77351521422774!3d20.00060722745621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeba0fc5f7df1%3A0xc0a291ab99639a35!2sNashik%20Municipal%20Corporation%2C%20Rajiv%20Gandhi%20Bhavan%2C!5e0!3m2!1sen!2sin!4v1671116361224!5m2!1sen!2sin" width="350" height="250" style="border-radius:50px 50px;size: 1vw;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>



        </div>
      </div>
    </div>
    <div class="d-none d-md-flex  p-h-40 justify-content-centre">
      <span class="" style="color: beige;">© 2021 Designed by E-Connect Innovative Solutions All rights reserved.</span>
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

                    
  <!-- start scroll to top -->
  <a class="scroll-top-arrow btn-outline-dark" href="javascript:void(0);"><i class="feather icon-feather-arrow-up btn-outline-dark "></i></a>
  <!-- end scroll to top -->

  <!-- start scroll to top -->
  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
  <!-- end scroll to top -->
  

  <!-- javascript -->
  <script type="text/javascript" src="<?= base_url() ?>layout/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>layout/js/theme-vendors.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>layout/js/main.js"></script>
  <script>
    $(function() {
      $("marquee")
        .mouseover(function() {
          $(this).attr("scrollamount", 0);
        })
        .mouseout(function() {
          $(this).attr("scrollamount", 5);
        });
    });
  </script>
  <script>
function option(evt, funct) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" ", "");
  }
  document.getElementById(funct).style.display = "block";
  evt.currentTarget.className += "";
}
</script>

 <script>
function option1(evt, funct) {
  var i, tabcontent1, tablinks1;
  tabcontent1 = document.getElementsByClassName("tabcontent1");
  for (i = 0; i < tabcontent1.length; i++) {
    tabcontent1[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks1");
  for (i = 0; i < tablinks.length; i++) {
    tablinks1[i].className = tablinks1[i].className.replace("", "");
  }
  document.getElementById(funct).style.display = "block";
  evt.currentTarget.className += "";
}
</script>
</body>

</html>
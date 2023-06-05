<!-- <!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Ganesh Festival System &mdash; Home</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="ThemeZaa" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
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
  </style>
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#333a3a">
  
  <div class="main-content">
    <!-- start page title -->
    <section class="half-section parallax margin-1-half-rem-bottom" data-parallax-background-ratio="0.5" style="
          background-image: url('<?= base_url() ?>layout/images/portfolio-bg.jpg');
          padding: 80px 0px 27px 0px;
        ">
      <div class="container">
        <div class="
              row
              align-items-stretch
              justify-content-center
              extra-small-screen
            ">
          <div class="
                col-12 col-xl-8 col-lg-7 col-md-8
                page-title-extra-small
                text-center
                d-flex
                justify-content-center
                flex-column
              ">
            <div>
              <img class="align-items-center padding-1-half-rem-bottom mx-3" style="max-width: 200px" src="<?= base_url() ?>layout/images/nmclogo.png" alt="" />
            </div>

            <span class="
                  alt-font
                  font-weight-500
                  text-extra-dark-gray text-uppercase
                  letter-spacing-1px
                  opacity-5
                  d-block
                  md-margin-20px-bottom
                ">Welcome to</span>
            <h3 class="
                  font-weight-600
                  alt-font
                  text-extra-dark-gray
                  letter-spacing-minus-1px
                ">
              Centralized Ganesh Festival System
            </h3>
            <div class="row justify-content-center">
              <!-- start blockquote item -->
              <div class="
                    col-12 col-xl-5 col-lg-6 col-md-8 col-sm-10
                    text-center
                    wow
                    animate__fadeIn
                  ">
                <!-- <i class="ti-quote-left text-dark-orange icon-large margin-25px-bottom d-block"></i> -->
                <i class="
                      fas
                      fa-quote-left
                      icon-extra-small
                      text-gradient-orange-pink
                    "></i>&nbsp;
                <span class="
                      font-weight-500
                      text-extra-large text-extra-dark-gray
                      alt-font
                      line-height-34px
                    ">One Stop All Solutions</span>
                &nbsp;<i class="
                      fas
                      fa-quote-right
                      icon-extra-small
                      text-gradient-orange-pink
                    "></i>
              </div>
              <!-- end blockquote item -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- start main modal pop-up -->
    <!-- id="modal-popup2" -->
    <div id="subscribe-popup" class="
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
          "><?= $data[0]->title?></span>
      <button title="Close (Esc)" type="button" class="mfp-close text-dark">×</button>
      <p>
        <?= $data[0]->description?>
      </p>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner popup-img" style="height: 300px;">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url('/layout/images/blog-img102.jpg') ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('/layout/images/blog-img92.jpg') ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('/layout/images/blog-img94.jpg') ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><br>
      <a class="
            btn btn-fancy btn-small btn-transparent-light-gray
            popup-modal-dismiss
          " href="#">Agree Terms</a>
    </div>
    <!-- end main modal pop-up -->
    <!-- start modal pop-up -->
    <!-- id="modal-popup2" -->
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
    </div>
    <!-- end modal pop-up -->

    <section class="half-section" style="padding: 10px 0px">
      <div class="row justify-content-center">
        <div class="
              col-lg-12 col-md-10 col-sm-12
              text-center
              elements-social
              social-icon-style-04
            ">
          <ul class="medium-icon">
            <li>
              <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="half-section" style="padding-top: 10px">
      <div class="container">
        <div class="row justify-content-center">
          <div class="
                col-12 col-md-8
                text-center
                fit-videos
                sm-margin-30px-bottom
              ">
            <!-- start youtube video -->
            <iframe width="600" height="350" src="https://www.youtube.com/embed/569lQejCuFQ?modestbranding=1&rel=0&showinfo=0&control=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- end youtube video -->
          </div>
          <div class="col-12 col-md-4 sm-margin-30px-bottom">
            <div class="swiper-slide">
              <div class="
                    border-all
                    border-width-1px
                    border-color-medium-gray
                    border-radius-4px
                    overflow-hidden
                    margin-5px-right
                    xs-no-margin-right
                    bg-light-gray
                  ">
                <div class="row">
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
                        " style="font-size: 19px; margin-bottom: -10px" ;>
                      News / Announcements
                    </h3>
                  </div>

                  <div class="
                        padding-2-rem-right
                        padding-2-rem-left
                        padding-1-half-rem-bottom
                        lg-padding-1-rem-all
                      ">
                    <hr />
                    <marquee class="text-black bg-light-gray padding-1-half-rem-all" direction="up" height="320" scrollamount="5" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
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
                        <li class="
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
                        </li>
                      </ul>
                    </marquee>
                  </div>
                </div>
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
padding-1-rem-bottom padding-1-rem-top
">
      <br />
      <div class="container-fluid">
        <div class="
  row row-cols-1 row-cols-xl-4 row-cols-lg-4 row-cols-sm-2
  justify-content-center
  ">
          <!-- start feature box item -->
          <div class="margin-30px-bottom col col-xl-4 text-center">
            <a href="#">
              <div class="
      feature-box feature-box-left-icon-middle feature-box-shadow
      shadow-lg
      border-radius-1px
      h-100
      padding-30px-all
      bg-slate-blue
      ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
        line-icon-Approved-Window
        icon-medium
        text-gradient-sky-blue-pink
        "></i>
                </div>
                <div class="feature-box-content" style="font-family: inherit">
                  <span class="text-uppercase text-light font-weight-600">Book Ganesh Idols
                  </span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->
          <!-- start feature box item -->
          <div class="margin-30px-bottom col col-xl-4 text-center">
            <a href="<?= base_url('Book-slot') ?>">
              <div class="
    feature-box feature-box-left-icon-middle feature-box-shadow
    shadow-lg
    border-radius-1px
    h-100
    padding-30px-all
    bg-slate-blue
    ">
                <div class="feature-box-icon margin-20px-right">
                  <i class="
      line-icon-Approved-Window
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content" style="font-family: inherit">
                  <span class="text-uppercase text-light font-weight-600">Book your Slot
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
      line-icon-Add-Bag
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content">
                  <span class="text-uppercase text-light font-weight-600">Get Ammonium Bicarbonate</span>
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
      line-icon-User
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content">
                  <span class="text-uppercase text-light font-weight-600">Organization Registration</span>
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
          <!-- start modal pop-up -->
          <div id="modal-popup3" class="
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
            <div class="feature-box-icon margin-10px-all">
              <i class="fas fa-check-circle icon-medium align-middle text-green "></i>
            </div>
            <span class="
text-extra-dark-gray
alt-font
text-extra-large
font-weight-500
d-block
">Congratulations!</span>
            <button title="Close (Esc)" type="button" class="mfp-close text-dark">
              ×
            </button>
            <h2 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large">Your Ganesh Immersion Slot has been Booked!</h2>
            <span class="
text-extra-dark-gray
alt-font
text-extra-large
font-weight-500
d-block
">अभिनंदन</span>
            <h3 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large">तुमचा गणेश विसर्जन स्लॉट बुक झाला आहे.</h3>
            <p>
              Your order <span class="text-black underline"><u>#673290789</u></span> has been completed. Your order details are shown for your personal accont.
            </p>
            <a class="
btn btn-large btn-info
d-table d-lg-inline-block
lg-margin-15px-bottom
md-margin-auto-lr
" href="<?php echo base_url() . 'Invoice' ?>">View E-Receipt</a>
          </div>
          <!-- end modal pop-up -->
          <!-- start feature box item -->
          <div class="col margin-30px-bottom col-xl-4 btn-dual text-center">
            <a class="popup-with-zoom-anim" href="#modal-popup3">
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
      line-icon-Add-User
      icon-medium
      text-gradient-sky-blue-pink
      "></i>
                </div>
                <div class="feature-box-content">
                  <span class="text-uppercase text-light font-weight-600">Ganesh Mandal Registration</span>
                </div>
                <div class="feature-box-overlay bg-slate-blue"></div>
              </div>
            </a>
          </div>
          <!-- end feature box item -->
        </div>
      </div>
    </section>
    <section class="padding-seven-lr lg-padding-four-lr md-padding-15px-lr xs-no-padding-lr padding-1-rem-bottom padding-1-rem-top">
      <div class="container">
        <iframe src="https://www.google.com/maps/d/embed?mid=1f5HjAtiHG-tvu9ctnXuZ4HTd63hxo0fl" width="100%" height="500"></iframe>
      </div>
    </section>
    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
      <div class="container">
        <h5 class="
              alt-font
              text-center
              padding-5-rem-bottom
              text-extra-dark-gray
              mb-0
              letter-spacing-minus-1px
            ">
          <span class="font-weight-500">Helpline Number</span>
        </h5>
        <div class="
              row
              align-items-center
              justify-content-center
              text-center text-sm-left
            ">
          <!-- start progress step item -->
          <div class="
                col-12 col-xl-2
                text-center
                col-sm-auto
                xs-margin-25px-bottom
                wow
                animate__fadeIn
              " data-wow-delay="0.3s">
            <div class="feature-box-icon">
              <i class="
                    line-icon-Headset
                    icon-extra-medium
                    text-fast-blue
                    margin-30px-bottom
                    md-margin-15px-bottom
                    sm-margin-10px-bottom
                  "></i>
            </div>
            <span class="
                  text-extra-dark-gray
                  font-weight-600
                  text-large
                  d-block
                  margin-5px-bottom
                ">Technical Support</span>
            <span class="text-extra-medium text-gray font-weight-600 d-block">Shri. Amit Patil</span>
            <span class="text-extra-medium font-weight-600 d-block">Vibhagiya Swacchata Nirishak</span>
            <a href="tel:=+911234567891" class="text-extra-medium font-weight-600 d-block">+911234567891</a>
          </div>
          <!-- end progress step item -->
          <!-- start separate line -->
          <div class="
                col-12 col-xl-1 col-md-auto
                d-none d-md-block
                wow
                animate__fadeIn
              " data-wow-delay="0.3s">
            <span class="w-40px h-1px bg-medium-gray d-block mx-auto"></span>
          </div>
          <!-- end separate line -->
          <!-- start progress step item -->
          <div class="
                col-12 col-xl-2
                text-center
                col-sm-auto
                xs-margin-25px-bottom
                wow
                animate__fadeIn
              " data-wow-delay="0.3s">
            <div class="feature-box-icon">
              <i class="
                    line-icon-Headset
                    icon-extra-medium
                    text-fast-blue
                    margin-30px-bottom
                    md-margin-15px-bottom
                    sm-margin-10px-bottom
                  "></i>
            </div>
            <span class="
                  text-extra-dark-gray
                  font-weight-600
                  text-large
                  d-block
                  margin-5px-bottom
                ">Technical Support</span>
            <span class="text-extra-medium text-gray font-weight-600 d-block">Shri. Amit Patil</span>
            <span class="text-extra-medium font-weight-600 d-block">Vibhagiya Swacchata Nirishak</span>
            <a href="tel:=+911234567891" class="text-extra-medium font-weight-600 d-block">+911234567891</a>
          </div>
          <!-- end progress step item -->
          <!-- start separate line -->
          <div class="
                col-12 col-xl-1 col-md-auto
                d-none d-md-block
                wow
                animate__fadeIn
              " data-wow-delay="0.5s">
            <span class="w-40px h-1px bg-medium-gray d-block mx-auto"></span>
          </div>
          <!-- end separate line -->
          <!-- start progress step item -->
          <div class="
                col-12 col-xl-2
                text-center
                col-sm-auto
                xs-margin-25px-bottom
                wow
                animate__fadeIn
              " data-wow-delay="0.3s">
            <div class="feature-box-icon">
              <i class="
                    line-icon-Headset
                    icon-extra-medium
                    text-fast-blue
                    margin-30px-bottom
                    md-margin-15px-bottom
                    sm-margin-10px-bottom
                  "></i>
            </div>
            <span class="
                  text-extra-dark-gray
                  font-weight-600
                  text-large
                  d-block
                  margin-5px-bottom
                ">Technical Support</span>
            <span class="text-extra-medium text-gray font-weight-600 d-block">Shri. Amit Patil</span>
            <span class="text-extra-medium font-weight-600 d-block">Vibhagiya Swacchata Nirishak</span>
            <a href="tel:=+911234567891" class="text-extra-medium font-weight-600 d-block">+911234567891</a>
          </div>
          <!-- end progress step item -->
          <!-- start separate line -->
          <div class="
                col-12 col-xl-1 col-md-auto
                d-none d-md-block
                wow
                animate__fadeIn
              " data-wow-delay="0.5s">
            <span class="w-40px h-1px bg-medium-gray d-block mx-auto"></span>
          </div>
          <!-- end separate line -->
          <!-- start progress step item -->
          <div class="
                col-12 col-xl-2
                text-center
                col-sm-auto
                xs-margin-25px-bottom
                wow
                animate__fadeIn
              " data-wow-delay="0.3s">
            <div class="feature-box-icon">
              <i class="
                    line-icon-Headset
                    icon-extra-medium
                    text-fast-blue
                    margin-30px-bottom
                    md-margin-15px-bottom
                    sm-margin-10px-bottom
                  "></i>
            </div>
            <span class="
                  text-extra-dark-gray
                  font-weight-600
                  text-large
                  d-block
                  margin-5px-bottom
                ">Technical Support</span>
            <span class="text-extra-medium text-gray font-weight-600 d-block">Shri. Amit Patil</span>
            <span class="text-extra-medium font-weight-600 d-block">Vibhagiya Swacchata Nirishak</span>
            <a href="tel:=+911234567891" class="text-extra-medium font-weight-600 d-block">+911234567891</a>
          </div>
          <!-- end progress step item -->
        </div>
      </div>
    </section>
    <!-- end section -->
  </div>
  <!-- start footer -->
  <footer class="footer-light border-top border-color-medium-gray padding-50px-tb">
    <div class="container">
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="
                  col-12 col-md-6
                  order-2 order-md-1
                  text-sm-center text-md-left
                  last-paragraph-no-margin
                ">
                <p>
                  &copy; 2021 Designed by
                  <a
                    href="#"
                    class="
                      text-decoration-line-bottom text-extra-dark-gray
                      font-weight-500
                    "
                    >E-Connect Innovative Solutions</a
                  >. All rights reserved.
                </p>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2 sm-margin-10px-bottom">
              <!-- <ul
                  class="
                    footer-horizontal-link
                    d-flex
                    flex-column flex-sm-row
                    justify-content-sm-center justify-content-md-end
                  "
                >
                  <li><a href="./privacy-policy.html">Privacy policy</a></li>
                  <li><a href="#">Terms of service</a></li>
                </ul> -->
              <div class="col-12 text-center text-md-right">
                <div class="social-icon-style-12">
                  <ul class="extra-small-icon dark">
                    <li>
                      <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->
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
</body>

</html> -->
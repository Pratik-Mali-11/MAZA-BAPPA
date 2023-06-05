<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Ganesh Festival System &mdash; Book a Slot</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="full-screen-menu"
  data-mobile-nav-bg-color="#333a3a">
  <div class="main-content">
    <!-- start modal pop-up -->
    <!-- id="modal-popup2" -->
    <!-- <div id="subscribe-popuppp" class="
          zoom-anim-dialog
          col-11 col-xl-6 col-lg-6 col-md-8 col-sm-9
          mx-auto
          bg-white
          modal-popup-main
          padding-4-half-rem-all
          mfp-hide
          border-radius-6px
          sm-padding-2-half-rem-lr
        ">
      <span class="
            text-extra-dark-gray text-uppercase
            alt-font
            text-center
            text-extra-large
            font-weight-600
            margin-15px-bottom
            d-block
          ">नियम आणि अटी / Terms & Conditions</span>
      <button title="Close (Esc)" type="button" class="mfp-close text-dark">×</button>
      <div class="modal-body">
      <p>
        १&#x29; प्रतिबंधित क्षेत्र आणि हॉटस्पॉट क्षेत्र या परिसरामध्ये राहणाऱ्या नागरिकांसाठी ही सुविधा उपलब्ध नाही.<br>

        २&#x29; महानगरपालिकेकडून एकूण ३३ कृत्रिम हौद आणि ३१ नैसर्गिक केंद्र यांचा समावेश आहे.<br>

        ३&#x29; ही सुविधा ‘प्रथम येणाऱ्यास प्रथम प्राधान्य’ या तत्त्वावर आधारित आहे.<br>

        ४&#x29; विसर्जन कालावधी यांच्यासाठी खुले आहेत.<br>

        ५&#x29; दुपारी २:०० ते रात्री १२:०० या दरम्यान विसर्जन कालावधी निश्चित करता येईल.<br>

        ६&#x29; विसर्जन कालावधी खालील प्रमाणे नियोजनानुसार खुले करण्यात येतील किंवा अद्ययावत करण्यात येतील.<br>


        ७&#x29; विसर्जन कालावधी यशस्वीरित्या निश्चित केल्यानंतर संबंधित नागरिकाला रिसीट देण्यात येईल. विसर्जनाच्या वेळी नागरिकांनी रिसीट आपल्या जवळ बाळगावी.<br>

        ८&#x29; निश्चित करण्यात आलेला कालावधी रद्द करता येणार नाही.<br>

        ९&#x29; नागरिकाने निश्चित करण्यात आलेल्या कालावधीच्या ३० मिनिटे आधी विसर्जन केंद्रावर उपस्थित राहावे.<br>

        १०&#x29; गणेशमूर्ती समवेत जास्तीत जास्त तीन जणांना प्रवेश दिला जाईल.<br>

        ११&#x29; नागरिकांनी मास्क घालणे आवश्यक आहे.<br>

        १२&#x29; विसर्जनाच्या वेळी सामाजिक अंतर पाळणे बंधनकारक आहे.<br>

        १३&#x29; एका मोबाईल क्रमांकावरून एकच स्लॉट बुक करता येऊ शकतो.<br>

        १४&#x29; शासनाच्या वतीने वेळोवेळी जाहिर करण्यात आलेले नियम, अटी, मार्गदर्शक तत्त्वे यांचे पालन करणे बंधनकारक आहे.
      </p>
      </div>
      <div class="text-center">
      <a class="
          btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr
            popup-modal-dismiss
          " href="#">Agree Terms</a>
      </div>
    </div> -->
    <!-- end modal pop-up -->

    <?php if (isset($_SESSION['status'])) { ?>
      <!-- start modal pop-up -->
      <div id="modal-popup3" role="dialog" class="
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
        <h2 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large">Your
          Ganesh Immersion Slot has been Booked!</h2>
        <span class="
        text-extra-dark-gray
        alt-font
        text-extra-large
        font-weight-500
        d-block
        ">अभिनंदन</span>
        <h3 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large">तुमचा
          गणेश विसर्जन स्लॉट बुक झाला आहे.</h3>
        <p>
          Your booking <span class="text-black underline"><u>#
              <?= $_SESSION['status']['u_id'] ?>
            </u></span> has been Completed.
        </p>
        <a class="
        btn btn-large btn-info
        d-table d-lg-inline-block
        lg-margin-15px-bottom
        md-margin-auto-lr" href="<?php echo base_url() . 'Invoice' ?>">View E-Receipt</a>
      </div>
      <!-- end modal pop-up -->
    <?php } ?>
    <!-- header start -->
    <header class="header-with-topbar">
      <nav class="
          navbar navbar-expand-lg
          top-space
          navbar-light
          bg-white
          header-light
          fixed-top
          navbar-boxed
          header-reverse-scroll
        ">
        <div class="container-fluid nav-header-container">
          <div class="col-6 col-lg-3 mr-auto pl-lg-5">
            <a class="navbar-brand" href="index.html">
              <img style="max-width: 200px;max-height:70px;" src="layout/images/nmclogo.png" alt="" />
              <!-- <img
                src="images/nmclogo.png"
                class="alt-logo"
                alt=""
              />
              <img
                src="images/nmclogo.png"
                class="mobile-logo"
                alt=""
              /> -->
            </a>
          </div>
          <div class="col-7 menu-order px-lg-10">
            <button class="navbar-toggler float-left" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-label="Toggle navigation">
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-left" id="navbarNav">
              <ul class="navbar-nav alt-font">
                <li class="nav-item text-uppercase">
                  <a href="<?= base_url('') ?>" class="nav-link">Home</a>
                  <!-- <a href="<?= base_url('') ?>" class="nav-link">Home</a> -->
                </li>
                <li class="nav-item text-uppercase">
                  <a href="layout/about-us.html" class="nav-link">About Us</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a href="./services.html" class="nav-link">Services</a>
                </li>
                <li class="nav-item dropdown simple-dropdown text-uppercase">
                  <a href="#" class="nav-link">Community</a>
                  <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown">
                      <a href="./community.html">Join with Us<i class="fas fa-angle-right dropdown-toggle"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="./career.html">Career<i class="fas fa-angle-right dropdown-toggle"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="./gallery.html">Gallery<i class="fas fa-angle-right dropdown-toggle"></i></a>
                    </li>
                  </ul>
                </li>
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
    <!-- header end -->
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5" style="
          background-image: url('<?= base_url() ?>layout/images/portfolio-bg.jpg');
          padding: 40px 0px 10px 0px;
        ">
      <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active carousel-item-start" style="height:400px; min-height: 300px">
              <img class="w-100" src="layout\images\ganesh.jpg" alt="Image">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-12">
                      <h1 class="display-1 text-white mb-5  slideInUp">Book Your Slot </h1>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <!-- <div class="
              row
              align-items-stretch
              justify-content-center
              extra-small-screen
            ">
          <div class="
                col-12 col-xl-6 col-lg-7 col-md-8
                page-title-extra-small
                text-center
                d-flex
                justify-content-center
                flex-column
              ">
            <h2 class="
                  text-extra-dark-gray
                  alt-font
                  font-weight-500
                  letter-spacing-1px
                  line-height-50
                  sm-line-height-45
                  xs-line-height-30
                  no-margin-bottom
                ">
              Book your Slot
            </h2> -->
            <div class="text-center mt-4">
              <div class="
                    breadcrumb
                    justify-content-center
                    alt-font
                    text-small
                    no-margin-bottom
                  " style="margin: 15px 0px">
                <ul class="font-weight-600">
                  <li>
                    <a href="<?= base_url('') ?>" class="text-extra-black text-black-hover">Home</a>
                  </li>
                  <li class="text-extra-light-gray">Book your Slot</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end page title -->
    <section style="padding: 2rem 0rem">
      <div class="container">
        <div class="
              row row-cols-1 row-cols-lg-3 row-cols-md-2
              justify-content-center
            ">
          <div class="col col-sm-8 padding-2-half-rem-bottom">
            <div class="
                  feature-box
                  padding-1-half-rem-top padding-1-half-rem-bottom
                  bg-white
                  border-radius-6px
                  overflow-hidden
                  box-shadow-large box-shadow-extra-large-hover
                ">
              <div class="
                    feature-box-move-bottom-top
                    padding-5-rem-lr padding-15px-tb
                    lg-padding-2-half-rem-lr
                    md-padding-4-half-rem-lr
                  ">
                <div class="feature-box-icon">
                  <div class="
                        col
                        padding-1-rem-bottom
                        text-center
                        sm-margin-40px-bottom
                        wow
                        animate__fadeIn
                      " data-wow-delay="0.2s">
                    <h3 class="
                          vertical-counter
                          d-inline-flex
                          text-extra-dark-gray
                          alt-font
                          appear
                          font-weight-600
                          letter-spacing-minus-2px
                          mb-0
                        " data-to="1055"></h3>
                    <!-- <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">Total Slots</span></span> -->
                  </div>
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                  <span class="
                        text-extra-dark-gray text-extra-medium
                        d-block
                        alt-font
                        font-weight-500
                      ">Total <br>Slots Released Today</span>
                </div>
                <!-- <div class="
                      move-bottom-top
                      margin-10px-top
                      last-paragraph-no-margin
                    ">
                  <p>
                    Lorem ipsum is simply dummy text of the printing industry
                  </p>
                </div> -->
              </div>
              <div class="feature-box-overlay"></div>
            </div>
          </div>
          <div class="col col-sm-8 padding-2-half-rem-bottom">
            <div class="
                  feature-box
                  padding-1-half-rem-top padding-1-half-rem-bottom
                  bg-white
                  border-radius-6px
                  overflow-hidden
                  box-shadow-large box-shadow-extra-large-hover
                ">
              <div class="
                    feature-box-move-bottom-top
                    padding-5-rem-lr padding-15px-tb
                    lg-padding-2-half-rem-lr
                    md-padding-4-half-rem-lr
                  ">
                <div class="feature-box-icon">
                  <div class="
                        col
                        padding-1-rem-bottom
                        text-center
                        sm-margin-40px-bottom
                        wow
                        animate__fadeIn
                      " data-wow-delay="0.2s">
                    <h3 class="
                          vertical-counter
                          d-inline-flex
                          text-extra-dark-gray
                          alt-font
                          appear
                          font-weight-600
                          letter-spacing-minus-2px
                          mb-0
                        " data-to="2570"></h3>
                    <!-- <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">Total Slots</span></span> -->
                  </div>
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                  <span class="
                        text-extra-dark-gray text-extra-medium
                        d-block
                        alt-font
                        font-weight-500
                      ">Total <br>Slots Booked Today</span>
                </div>
                <!-- <div class="
                      move-bottom-top
                      margin-10px-top
                      last-paragraph-no-margin
                    ">
                  <p>
                    Lorem ipsum is simply dummy text of the printing industry
                  </p>
                </div> -->
              </div>
              <div class="feature-box-overlay"></div>
            </div>
          </div>
          <div class="col col-sm-8 padding-2-half-rem-bottom">
            <div class="
                  feature-box
                  padding-1-half-rem-top padding-1-half-rem-bottom
                  bg-white
                  border-radius-6px
                  overflow-hidden
                  box-shadow-large box-shadow-extra-large-hover
                ">
              <div class="
                    feature-box-move-bottom-top
                    padding-5-rem-lr padding-15px-tb
                    lg-padding-2-half-rem-lr
                    md-padding-4-half-rem-lr
                  ">
                <div class="feature-box-icon">
                  <div class="
                        col
                        padding-1-rem-bottom
                        text-center
                        sm-margin-40px-bottom
                        wow
                        animate__fadeIn
                      " data-wow-delay="0.2s">
                    <h3 class="
                          vertical-counter
                          d-inline-flex
                          text-extra-dark-gray
                          alt-font
                          appear
                          font-weight-600
                          letter-spacing-minus-2px
                          mb-0
                        " data-to="3400"></h3>
                    <!-- <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">Total Slots</span></span> -->
                  </div>
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                  <span class="
                        text-extra-dark-gray text-extra-medium
                        d-block
                        alt-font
                        font-weight-500
                      ">Total <br>Till date Slots released</span>
                </div>
                <!-- <div class="
                      move-bottom-top
                      margin-10px-top
                      last-paragraph-no-margin
                    ">
                  <p>
                    Lorem ipsum is simply dummy text of the printing industry
                  </p>
                </div> -->
              </div>
              <div class="feature-box-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wow animate__fadeIn d-none d-sm-block">
      <div class="container">
      </div>
    </section>
    <section class="overflow-visible">
      <div class="container">
        <br /><br />
        <div class="
              z-index-6
              position-relative
              overlap-section-three-fourth
              bg-white
              box-shadow-large
              padding-8-rem-all
              md-padding-5-rem-all
              xs-padding-4-rem-tb xs-padding-2-rem-lr
              wow
              animate__fadeIn
            " data-wow-delay="0.1s">
          <div class="row justify-content-center">
            <div class="
                  col-12 col-xl-6 col-lg-7
                  text-center
                  margin-4-half-rem-bottom
                  md-margin-3-rem-bottom
                ">
              <span class="
                    alt-font
                    letter-spacing-minus-1-half
                    text-extra-medium
                    d-block
                    margin-5px-bottom
                  ">Fill out the form and
              </span>
              <h4 class="alt-font font-weight-600 text-extra-dark-gray">
                Book Ganesh Visarjan Slot
              </h4>
            </div>
            <div class="col-12">
              <!-- start book slot form -->
              <a href="#modal-popup3" style="display: none" id="launchbtn"
                class="text-extra-black popup-with-zoom-anim text-black-hover">View Messages</a>
              <a href="#subscribe-popuppp" style="display: none" id="launchguidebtn"
                class="text-extra-black popup-with-zoom-anim text-black-hover">View Messages</a>

              <form method="post" action="<?php echo base_url('Book-slot'); ?>" autocomplete="off"onsubmit="return myfun()">
              <script>
        function myfun() {
            var a = document.getElementById("mobilenumber").value;
            if (a == "") {
                document.getElementById("message").innerHTML = "please inter your mobile Number"
                return false;
            }
            if (isNaN(a)) {
                document.getElementById("message").innerHTML = "**Enter only Numeric value"
                return false;

            }
            if (a.length < 10) {
                document.getElementById("message").innerHTML = "**Mobile number must be 10 digit"
                return false;
            }
            if (a.length > 10) {
                document.getElementById("message").innerHTML = "**Mobile number must be 10 digit"
                return false;
            }
            if ((a.charAt(0) != 9) && (a.charAt(0) != 8) && (a.charAt(0) != 7)) {
                document.getElementById("message").innerHTML = "**Mobile number must start with 9,8, and 7"
                return false;
            }

           var n = document.getElementById("name").value;
           if()

        }
    </script>
    <!-- <form onsubmit="return myfun()">
        Mobile Number : <input type="text" id="mobilenumber" placeholder="Enter your Mobile number">
        <span id="message"></span><br><br>
        <input type="submit" value="Submit">
    </form> -->

                <div class="row row-cols-1 row-cols-md-2">
                  <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                    <label class="margin-15px-bottom font-weight-600">Name / नाव
                      <span class="required-error text-radical-red" id = "message">*</span></label>
                    <input class="medium-input bg-white margin-5px-bottom required" type="text" name="name" id = "name"
                       pattern="/^[A-Za-z]+$/" placeholder="Your name" value="<?php echo set_value('name'); ?>" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('name', "*"); ?>
                    </p>
                    <label class="margin-15px-bottom font-weight-600">Mobile Number / मोबाइल नंबर
                      <span class="required-error text-radical-red" id="message">*</span></label>
                    <input class="medium-input bg-white margin-5px-bottom required" type="tel" name="mobile_no" id="mobilenumber"
                      placeholder="Your Mobile" value="<?php echo set_value('mobile_no'); ?>" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('mobile_no', "*"); ?>
                    </p>

                    <label class="margin-15px-bottom font-weight-600">
                      Email / ईमेल
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          " type="email" name="email" placeholder="Your email address"
                      value="<?php echo set_value('email'); ?>" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('email', "*"); ?>
                    </p>

                    <label class="margin-15px-bottom font-weight-600">Type of Murti / मूर्तीचा प्रकार
                      <span class="required-error text-radical-red">*</span></label>
                    <select class="
                      medium-input
                      sm-w-100
                      w-100
                      bg-white
                      margin-5px-bottom
                      required
                    " name="murti_type" style="background-size: 12px">
                      <option value="none" disabled selected>
                        Select type of Murti
                      </option>
                      <option value="Shadu Mati Murti" <?php if (set_value('murti_type') == 'Shadu Mati Murti') { ?>
                          selected <?php } ?>>Shadu Mati Murti</option>
                      <option value="Plaster Of Paris Murti" <?php if (set_value('murti_type') == 'Plaster Of Paris Murti') { ?> selected <?php } ?>>Plaster Of Paris Murti</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('murti_type', "*"); ?>
                    </p>
                  </div>


                  <div class="col margin-4-rem-bottom sm-margin-25px-bottom">

                    <label class="margin-15px-bottom font-weight-600">Select Division / विभाग निवडा
                      <span class="required-error text-radical-red">*</span></label>
                    <select class="
                          medium-input
                          sm-w-100
                          w-100
                          bg-white
                          margin-5px-bottom
                          required
                        " name="division_name" style="background-size: 12px">
                      <option value="none" disabled selected>Select Division</option>
                      <option value="Nashik East" <?php if (set_value('division_name') == 'Nashik East') { ?> selected <?php } ?>>Nashik East</option>
                      <option value="Nashik Road" <?php if (set_value('division_name') == 'Nashik Road') { ?> selected <?php } ?>>Nashik Road</option>
                      <option value="Nashik West" <?php if (set_value('division_name') == 'Nashik West') { ?> selected <?php } ?>>Nashik West</option>
                      <option value="Satpur" <?php if (set_value('division_name') == 'Satpur') { ?> selected <?php } ?>>
                        Satpur</option>
                      <option value="Panchvati" <?php if (set_value('division_name') == 'Panchvati') { ?> selected <?php } ?>>Panchvati</option>
                      <option value="New Nashik" <?php if (set_value('division_name') == 'New Nashik') { ?> selected <?php } ?>>New Nashik</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('division_name', "*"); ?>
                    </p>

                    <label class="margin-15px-bottom font-weight-600">Select Visarjan Pond / विसर्जनाचा तलाव निवडा
                      <span class="required-error text-radical-red">*</span></label>
                    <select class="
                          medium-input
                          sm-w-100
                          w-100
                          bg-white
                          margin-5px-bottom
                          required
                        " name="pond_name" style="background-size: 12px">
                      <option value="none" disabled selected>
                        Select Visarjan Pond
                      </option>
                      <option class="font-weight-700" value="Artificial" disabled>
                        Artificial Ponds
                      </option>
                      <option value="Artificial-One" <?php if (set_value('pond_name') == 'Artificial-One') { ?> selected
                        <?php } ?>>One</option>
                      <option value="Artificial-Two" <?php if (set_value('pond_name') == 'Artificial-Two') { ?> selected
                        <?php } ?>>Two</option>
                      <option value="Artificial-Three" <?php if (set_value('pond_name') == 'Artificial-Three') { ?> selected
                        <?php } ?>>Three</option>
                      <option value="Artificial-Four" <?php if (set_value('pond_name') == 'Artificial-Four') { ?> selected
                        <?php } ?>>Four</option>
                      <option value="Artificial-Five" <?php if (set_value('pond_name') == 'Artificial-Five') { ?> selected
                        <?php } ?>>Five</option>
                      <option value="Artificial-Six" <?php if (set_value('pond_name') == 'Artificial-Six') { ?> selected
                        <?php } ?>>Six</option>
                      <option class="font-weight-700" value="Natural" disabled>
                        Natural Ponds
                      </option>
                      <option value="Natural-One" <?php if (set_value('pond_name') == 'Natural-One') { ?> selected <?php } ?>>One</option>
                      <option value="Natural-Two" <?php if (set_value('pond_name') == 'Natural-Two') { ?> selected <?php } ?>>Two</option>
                      <option value="Natural-Three" <?php if (set_value('pond_name') == 'Natural-Three') { ?> selected <?php } ?>>Three</option>
                      <option value="Natural-Four" <?php if (set_value('pond_name') == 'Natural-Four') { ?> selected <?php } ?>>Four</option>
                      <option value="Natural-Five" <?php if (set_value('pond_name') == 'Natural-Five') { ?> selected <?php } ?>>Five</option>
                      <option value="Natural-Six" <?php if (set_value('pond_name') == 'Natural-Six') { ?> selected <?php } ?>>Six</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('pond_name', "*"); ?>
                    </p>

                    <label class="margin-15px-bottom font-weight-600">
                      Select Visarjan Date / विसर्जनाची तारीख निवडा
                      <span class="required-error text-radical-red">*</span></label>
                    <!-- <input
                        class="medium-input bg-white margin-25px-bottom required"
                        type="date"
                        name="slot"
                        placeholder="Book Slot"
                      /> -->
                    <select class="
                        medium-input
                        sm-w-100
                        w-100
                        bg-white
                        margin-5px-bottom
                        required
                      " name="book_date" style="background-size: 12px">
                      <option value="none" disabled selected>
                        Select Visarjan Date
                      </option>
                      <option value="23rd August 2021" <?php if (set_value('book_date') == '23rd August 2021') { ?> selected
                        <?php } ?>>1.5 Days - 23rd August 2021</option>
                      <option value="26rd August 2021" <?php if (set_value('book_date') == '26rd August 2021') { ?> selected
                        <?php } ?>>5 Days - 26rd August 2021</option>
                      <option value="27rd August 2021" <?php if (set_value('book_date') == '27rd August 2021') { ?> selected
                        <?php } ?>>Gauri Ganpati - 27rd August 2021</option>
                      <option value="28rd August 2021" <?php if (set_value('book_date') == '28rd August 2021') { ?> selected
                        <?php } ?>>7 Days - 28rd August 2021</option>
                      <option value="1st September 2021" <?php if (set_value('book_date') == '1st September 2021') { ?>
                          selected <?php } ?>>Anant Chaturdashi - 1st September 2021</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('book_date', "*"); ?>
                    </p>

                    <label class="margin-15px-bottom font-weight-600">Select Timeslot / विसर्जनाची वेळ निवडा
                      <span class="required-error text-radical-red">*</span></label>
                    <select class="
                          medium-input
                          sm-w-100
                          w-100
                          bg-white
                          margin-5px-bottom
                          required
                        " name="book_time" style="background-size: 12px">
                      <option value="none" disabled selected>
                        Select timeslot for Visarjan
                      </option>
                      <option value="8:00 AM to 8:30 AM" <?php if (set_value('book_time') == '8:00 AM to 8:30 AM') { ?>
                          selected <?php } ?>>8:00 AM to 8:30 AM &mdash; 3 Spots Left</option>
                      <option value="8:31 AM to 9:00 AM" <?php if (set_value('book_time') == '8:31 AM to 9:00 AM') { ?>
                          selected <?php } ?>>8:31 AM to 9:00 AM &mdash; 5 Spots Left</option>
                      <option value="9:01 AM to 9:30 AM" <?php if (set_value('book_time') == '9:01 AM to 9:30 AM') { ?>
                          selected <?php } ?>>9:01 AM to 9:30 AM &mdash; 9 Spots Left</option>
                      <option value="9:31 AM to 10:00 AM" <?php if (set_value('book_time') == '9:31 AM to 10:00 AM') { ?>
                          selected <?php } ?>>9:31 AM to 10:00 AM &mdash; 7 Spots Left</option>
                      <option value="10:01 AM to 10:30 AM" <?php if (set_value('book_time') == '10:01 AM to 10:30 AM') { ?>
                          selected <?php } ?>>10:01 AM to 10:30 AM &mdash; 4 Spots Left</option>
                      <option value="10:31 AM to 11:00 AM" <?php if (set_value('book_time') == '10:31 AM to 11:00 AM') { ?>
                          selected <?php } ?>>10:31 AM to 11:00 AM &mdash; 2 Spots Left</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600">
                      <?php echo form_error('book_time', "*"); ?>
                    </p>
                  </div>
                </div>
                <div class="col-12 text-center text-md-center">
                  <button
                    class="btn btn-fancy btn-rounded btn-large btn-dark-gray btn-box-shadow d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr"
                    type="submit" name="submit">
                    Submit Form
                  </button>
                </div>
                <div class="form-results d-none"></div>
              </form>
              <!-- end book slot form -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!--Start Footer -->
  <!-- <footer className='container-fluid  footer2 bg-dark text-white '>
   <hr className="border-top border-7 opacity-30 "></hr>

<div class="container">
  <div class="row">
    <div class="col-lg-2 col-md-12 mb-4">
    
      <div class="view overlay z-depth-1-half">
        <img src="layout\images\nmclogo.png" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      

<div class="col-2 text-left text-md-right" >
<div class="col-lg-2 col-md-12 mb-4">
                <div class="social-icon-style-12">
                  <ul class="extra-small-icon dark">
                    <li><a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                  
                </div>
              </div>  


<div class="footer-copyright text-center py-3">
  <a href="#" class="
                      text-decoration-line-bottom text-extra-dark-gray
                      font-weight-500"> @designedbyinnovativesolutions</a>
</div>
</footer> -->
  <!-- ENd Footer -->


  <!-- Footer Start -->
  <footer class="footer-light border-top border-color-medium-gray ">
    <div class="container-fluid  text-ight footer mt-1 py-1 wow fadeIn" data-wow-delay="0.1s">

      <div class="container py-2">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <img src="layout/images/nmclogo.png" style="max-width:150px; max-height:70px;" />
            <p class="mb-2 text-black mb-4"><i class="fa fa-map-marker-alt me-3  " style="padding-top:20px;"></i>Nashik
              Municipal Corporation</p>
            <p class="mb-2 text-black mb-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
            <p class="mb-2 text-black mb-4"><i class="fa fa-envelope me-3"></i>info@example.com</p>
          </div>

          <div class="social-icon-style-12">
            <ul class="extra-small-icon dark">
              <li><a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>

          </div>
          <div class="col-lg-4 col-md-2">

            <a class="btn btn-link-black" href="">About Us</a>
            <!-- <div class="dropdown"> -->
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Contact Us
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item">Helpline Number</a>
              <a class="dropdown-item">feedback</a>
            </div>
            <a class="btn btn-link-dark" href="">Our Services</a>

          </div>
          <div class="col-lg-3 col-md-2">

            <div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.188371518644!2d73.77351521422774!3d20.00060722745621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeba0fc5f7df1%3A0xc0a291ab99639a35!2sNashik%20Municipal%20Corporation%2C%20Rajiv%20Gandhi%20Bhavan%2C!5e0!3m2!1sen!2sin!4v1671116361224!5m2!1sen!2sin"
                width="350" height="250" style="border-radius:50px 50px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>



        </div>
      </div>
    </div>
    <!-- Footer End -->


    <!-- start scroll to top -->
    <a class="scroll-top-arrow btn-outline-dark" href="javascript:void(0);"><i
        class="feather icon-feather-arrow-up btn-outline-dark "></i></a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="<?= base_url() ?>layout/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>layout/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>layout/js/main.js"></script>
    <script>
      $(document).ready(function () {
        <?php if (isset($_SESSION['status'])) { ?>
          $(document).ready(function () {
            document.getElementById("launchbtn").click();

          });
        <?php } else { ?>
          $(document).ready(function () {
            setTimeout(function () {
              document.getElementById("launchguidebtn").click();
            }, 2000);
          });
        <?php } ?>
      });
    </script>
</body>

</html>
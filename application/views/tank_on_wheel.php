<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Ganesh Festival System &mdash; Tank on Wheel</title>
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

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#333a3a">
  <div class="main-content">
    <!-- start modal pop-up -->
    <!-- id="modal-popup2" -->
    <div id="subscribe-popuppp" class="
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
        Lorem ipsum is simply dummy text of the printing and typesetting
        industry lorem ipsum has been the industry's standard dummy text ever.
      </p>
      <p>
        Lorem ipsum is simply dummy text of the printing and typesetting
        industry lorem ipsum has been the industry's standard dummy text ever.
      </p>
      <p>
        Lorem ipsum is simply dummy text of the printing and typesetting
        industry lorem ipsum has been the industry's standard dummy text ever.
      </p>
      <p>
        Lorem ipsum is simply dummy text of the printing and typesetting
        industry lorem ipsum has been the industry's standard dummy text ever.
      </p>
      </div>
      <div class="text-center">
      <a class="
          btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr
            popup-modal-dismiss
          " href="#">Agree Terms</a>
      </div>
    </div>
    <!-- end modal pop-up -->

    <?php if(isset($_SESSION['status'])) { ?>
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
      <h2 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large">Your Tank On Wheel Slot has been Booked!</h2>
      <span class="
        text-extra-dark-gray
        alt-font
        text-extra-large
        font-weight-500
        d-block
        ">अभिनंदन</span>
      <h3 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large">तुमचा मूर्ती दानाचा स्लॉट बुक झाला आहे.</h3>
      <p>
        Your booking <span class="text-black underline"><u>#<?= $_SESSION['status']['u_id'] ?></u></span> has been Completed.
      </p>
      <a class="
        btn btn-large btn-info
        d-table d-lg-inline-block
        lg-margin-15px-bottom
        md-margin-auto-lr" 
        href="<?php echo base_url() . 'Tank-On-Wheel_invoice' ?>">View E-Receipt</a>
    </div>
    <!-- end modal pop-up -->
    <?php } ?>
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5" style="
          background-image: url('<?= base_url() ?>layout/images/portfolio-bg.jpg');
          padding: 40px 0px 10px 0px;
        ">
      <div class="container">
        <div class="
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
                Tank on Wheel
            </h2>
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
                  <li class="text-extra-light-gray">Tank on Wheel</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end page title -->
    <section class="wow animate__fadeIn d-none d-sm-block">
      <div class="container">
      </div>
    </section>
    <section class="overflow-visible">
      <div class="container">
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
                Book Tank on Wheel Slot
              </h4>
            </div>
            <div class="col-12">
              <!-- start book slot form -->
              <a href="#modal-popup3" style="display: none" id="launchbtn" class="text-extra-black popup-with-zoom-anim text-black-hover">View Messages</a>
              <a href="#subscribe-popuppp" style="display: none" id="launchguidebtn" class="text-extra-black popup-with-zoom-anim text-black-hover">View Messages</a>
              <form method="post" action="<?php echo base_url('Tank-On-Wheel'); ?>" autocomplete="off">
                <div class="row row-cols-1 row-cols-md-2">
                  <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                    <label class="margin-15px-bottom font-weight-600">Society Name / सोसायटीचे नाव
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                        " type="text" name="society_name" placeholder="Your Society Name" value="<?php echo set_value('society_name'); ?>" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('society_name', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">
                      Society Address / सोसायटीचा पत्ता
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          " type="text" name="society_addr" placeholder="Your Society Address" value="<?php echo set_value('society_addr'); ?>" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('society_addr', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">Secretary Name / सचिवांचे नाव
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                        " type="text" name="secretary_name" placeholder="Secretary Name" value="<?php echo set_value('secretary_name'); ?>" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('secretary_name', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">
                    Secretary Email / सचिवांचा ईमेल
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          " type="email" name="secretary_email" placeholder="Secretary Email" value="<?php echo set_value('secretary_email'); ?>" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('secretary_email', "*"); ?></p>



                  </div>


                  <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <label class="margin-15px-bottom font-weight-600">Secretary Mobile Number / सचिवांचा मोबाइल नंबर
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="medium-input bg-white margin-5px-bottom required" type="tel" name="sec_mobile_no" placeholder="Secretaries Mobile Number" value="<?php echo set_value('sec_mobile_no'); ?>"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('sec_mobile_no', "*"); ?></p>

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
                      <option value="Nashik East" <?php if(set_value('division_name')=='Nashik East'){ ?> selected <?php } ?>>Nashik East</option>
                      <option value="Nashik Road" <?php if(set_value('division_name')=='Nashik Road'){ ?> selected <?php } ?>>Nashik Road</option>
                      <option value="Nashik West" <?php if(set_value('division_name')=='Nashik West'){ ?> selected <?php } ?>>Nashik West</option>
                      <option value="Satpur" <?php if(set_value('division_name')=='Satpur'){ ?> selected <?php } ?>>Satpur</option>
                      <option value="Panchvati" <?php if(set_value('division_name')=='Panchvati'){ ?> selected <?php } ?>>Panchvati</option>
                      <option value="New Nashik" <?php if(set_value('division_name')=='New Nashik'){ ?> selected <?php } ?>>New Nashik</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('division_name', "*"); ?></p>

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
                      <option value="23rd August 2021" <?php if(set_value('book_date')=='23rd August 2021'){ ?> selected <?php } ?>>1.5 Days - 23rd August 2021</option>
                      <option value="26rd August 2021" <?php if(set_value('book_date')=='26rd August 2021'){ ?> selected <?php } ?>>5 Days - 26rd August 2021</option>
                      <option value="27rd August 2021" <?php if(set_value('book_date')=='27rd August 2021'){ ?> selected <?php } ?>>Gauri Ganpati - 27rd August 2021</option>
                      <option value="28rd August 2021" <?php if(set_value('book_date')=='28rd August 2021'){ ?> selected <?php } ?>>7 Days - 28rd August 2021</option>
                      <option value="1st September 2021" <?php if(set_value('book_date')=='1st September 2021'){ ?> selected <?php } ?>>Anant Chaturdashi - 1st September 2021</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('book_date', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">Select Vehicle Timeslot / विसर्जनासाठी वाहनांचा वेळ निवडा
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
                        Select Vehicle timeslot for Visarjan
                      </option>
                      <option value="8:00 AM to 8:30 AM" <?php if(set_value('book_time')=='8:00 AM to 8:30 AM'){ ?> selected <?php } ?>>8:00 AM to 8:30 AM &mdash; 3 Spots Left</option>
                      <option value="8:31 AM to 9:00 AM" <?php if(set_value('book_time')=='8:31 AM to 9:00 AM'){ ?> selected <?php } ?>>8:31 AM to 9:00 AM &mdash; 5 Spots Left</option>
                      <option value="9:01 AM to 9:30 AM" <?php if(set_value('book_time')=='9:01 AM to 9:30 AM'){ ?> selected <?php } ?>>9:01 AM to 9:30 AM &mdash; 9 Spots Left</option>
                      <option value="9:31 AM to 10:00 AM" <?php if(set_value('book_time')=='9:31 AM to 10:00 AM'){ ?> selected <?php } ?>>9:31 AM to 10:00 AM &mdash; 7 Spots Left</option>
                      <option value="10:01 AM to 10:30 AM" <?php if(set_value('book_time')=='10:01 AM to 10:30 AM'){ ?> selected <?php } ?>>10:01 AM to 10:30 AM &mdash; 4 Spots Left</option>
                      <option value="10:31 AM to 11:00 AM" <?php if(set_value('book_time')=='10:31 AM to 11:00 AM'){ ?> selected <?php } ?>>10:31 AM to 11:00 AM &mdash; 2 Spots Left</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('book_time', "*"); ?></p>
                  </div>
                </div>
                <div class="col-12 text-center text-md-center">
                  <button class="btn btn-fancy btn-rounded btn-large btn-dark-gray btn-box-shadow d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" type="submit" name="submit">
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
                <a href="#" class="
                      text-decoration-line-bottom text-extra-dark-gray
                      font-weight-500
                    ">E-Connect Innovative Solutions</a>. All rights reserved.
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
                    <li><a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
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
    $(document).ready(function ()
    {
      <?php if(isset($_SESSION['status'])) { ?>
        $(document).ready(function () {
				  document.getElementById("launchbtn").click();
          
			  });
      <?php } else { ?>
        $(document).ready(function(){
          setTimeout(function(){
          document.getElementById("launchguidebtn").click();
        }, 2000);
        });
      <?php } ?>
    });
  </script>
</body>

</html>
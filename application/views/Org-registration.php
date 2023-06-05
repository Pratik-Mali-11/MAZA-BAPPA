<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Ganesh Festival System &mdash; Organization Registration</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
  <meta name="description" content="#" />
  <!-- favicon icon -->
  <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png">
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
    <div id="guidlines-popup" class="
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
          ">नियम आणि अटी / Terms & Conditions</span>
      <button title="Close (Esc)" type="button" class="mfp-close text-dark">×</button>
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
      <a class="
          btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr
            popup-modal-dismiss
          " href="#">Agree Terms</a>
    </div>
    <!-- end modal pop-up -->
        <!-- start modal pop-up -->
        <div id="org_popup" role="dialog" class="
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
      <h2 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large"><?= $_SESSION['status']['name'] ?> is Successfully Registered</h2>
      <span class="
        text-extra-dark-gray
        alt-font
        text-extra-large
        font-weight-500
        d-block
        ">अभिनंदन</span>
      <h3 class="alt-font text-size-large text-extra-dark-gray text-uppercase font-weight-600 text-extra-large">आपण यशस्वीरित्या नोंदणी केली आहे.</h3>
      <p>
        Your Organization's Registration ID is <span class="text-black underline"><u>#<?= $_SESSION['status']['u_id'] ?></u></span>.<br>
        NOTE : Your will be Notified when you are Approved.
      </p>
      <a href="<?= base_url('') ?>" class="
        btn btn-large btn-info
        d-table d-lg-inline-block
        lg-margin-15px-bottom
        md-margin-auto-lr" 
        >Done</a>
    </div>
    <!-- end modal pop-up -->
    <!-- start page title -->
    <section class="parallax margin-8-half-rem-bottom sm-margin-2-half-rem-bottom" data-parallax-background-ratio="0.5" style="
          background-image: url('images/portfolio-bg.jpg');
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
              Organization Registration
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
                  <li class="text-extra-light-gray">Organization's Registration</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="overflow-visible">
      <br>
      <div class="container margin-4-half-rem-top ">
        <div class="
              z-index-6
              position-relative
              overlap-section-three-fourth
              bg-white
              box-shadow-large
              padding-8-rem-all
              md-padding-5-rem-all
              xs-padding-4-rem-tb xs-padding-2-rem-lr
              animate__fadeIn
            " data-wow-delay="0.4s">
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
                  ">Fill out the form for
              </span>
              <h4 class="alt-font font-weight-600 text-extra-dark-gray">
                Organization Registration
              </h4>
            </div>
            <div class="col-12">
              <a href="#guidlines-popup" style="display: none" id="launchguidebtn" class="text-extra-black popup-with-zoom-anim text-black-hover"></a>
              <a href="#org_popup" style="display: none" id="launchbtn" class="text-extra-black popup-with-zoom-anim text-black-hover"></a>
              <form action="<?= base_url('Org-registration'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <?php echo $this->session->flashdata('error_msg'); ?>
              <div class="row row-cols-1 row-cols-md-2">
                  <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                    <label class="margin-15px-bottom font-weight-600">Organization Name / संस्थेचे नाव
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          required
                        " type="text" name="name" placeholder="Organization name" value="<?php echo set_value('name'); ?>">
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('name', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">
                      Type of Organization / संस्थेचा प्रकार
                      <span class="required-error text-radical-red">*</span></label>
                    <select class="
                      medium-input
                      sm-w-100
                      w-100
                      bg-white
                      margin-5px-bottom
                      
                    " name="org_type" style="background-size: 12px">
                      <option value="murti" selected disabled>
                        Select type of Organization
                      </option>
                      <option value="NGO" <?php if(set_value('org_type')=='NGO'){ ?> selected <?php } ?>>NGO</option>
                      <option value="Club" <?php if(set_value('org_type')=='Club'){ ?> selected <?php } ?>>Club</option>
                      <option value="Association" <?php if(set_value('org_type')=='Association'){ ?> selected <?php } ?>>Association</option>
                      <option value="Other" <?php if(set_value('org_type')=='Other'){ ?> selected <?php } ?>>Other</option>
                    </select>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('org_type', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">Mobile or Whatsapp Number / मोबाइल किंवा व्हॉट्सअ‍ॅप नंबर
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="medium-input bg-white margin-5px-bottom required" type="tel" name="mobile_no" value="<?= set_value('mobile_no'); ?>" placeholder="Your Mobile or Whatsapp Number"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('mobile_no', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">
                      Email / ईमेल
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          " type="email" name="email" placeholder="Your email address" value="<?= set_value('email'); ?>"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('email', "*"); ?></p>

                    <div class="row row-cols-1 row-cols-md-2">


                    </div>
                    <label class="margin-15px-bottom font-weight-600">Organization Registration Date / संस्थेची नोंदणीची तारीख
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          required
                        " type="date" name="reg_date" placeholder="Registration Date" value="<?php echo set_value('reg_date'); ?>"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('reg_date', "*"); ?></p>

                  </div>
                  <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                    <label class="margin-15px-bottom font-weight-600">Organization Registration Number / संस्थेचा नोंदणी क्रमांक
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="medium-input bg-white margin-5px-bottom required" type="text" name="reg_no" value="<?php echo set_value('reg_no'); ?>" placeholder="NGO Registration Number" />
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('reg_no', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">Organization Full Address / संस्थेचा पूर्ण पत्ता
                      <span class="required-error text-radical-red">*</span></label>

                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          required
                        " type="text" name="org_address" placeholder="NGO's full address" value="<?php echo set_value('org_address'); ?>"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('org_address', "*"); ?></p>
                    <label class="margin-15px-bottom font-weight-600">
                      Key Person or President Name / मुख्य व्यक्ती किंवा अध्यषांचे नाव
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          required
                        " type="text" name="per_name" placeholder="President Name" value="<?php echo set_value('per_name'); ?>"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('per_name', "*"); ?></p>

                    <label class="margin-15px-bottom font-weight-600">Copy of Registration Certificate / नोंदणी प्रमाणपत्र प्रत
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                        medium-input
                        bg-whites
                        margin-5px-bottom" type="file" name="prod_image"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php if(isset($imageError)) { echo $imageError; } ?></p>

                    <label class="margin-15px-bottom font-weight-600">
                      Total Members for Volunteering / एकूण स्वयंसेवक
                      <span class="required-error text-radical-red">*</span></label>
                    <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          required
                        " type="number" name="total_member" placeholder="Total Members" value="<?php echo set_value('total_member'); ?>"/>
                    <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('total_member', "*"); ?></p>

                  </div>

                </div>
                <div class="col-12 text-center text-md-center">
                  <button id="project-contact-us-button" class="btn btn-fancy btn-rounded btn-large btn-dark-gray btn-box-shadow d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr " type="submit" name="submit">
                    Register Organization
                  </button>
                </div>
                <div class="form-results d-none"></div>
              </form>
              <!-- end contact form -->
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
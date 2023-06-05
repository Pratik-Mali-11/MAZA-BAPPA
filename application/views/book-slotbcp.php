 <!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <title>Ganesh Festival System &mdash; Book a Slot</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,maximum-scale=1"
    />
    <meta name="description" content="#" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png" />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="images/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="images/apple-touch-icon-114x114.png"
    />
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/font-icons.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/theme-vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>layout/css/responsive.css" />
  </head>

  <body
    data-mobile-nav-trigger-alignment="right"
    data-mobile-nav-style="full-screen-menu"
    data-mobile-nav-bg-color="#333a3a"
  >
    <div class="main-content">
            <!-- start modal pop-up -->
      <!-- id="modal-popup2" -->
      <div
        id="subscribe-popup"
        class="
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
        "
      >
        <span
          class="
            text-extra-dark-gray text-uppercase
            alt-font
            text-extra-large
            font-weight-600
            margin-15px-bottom
            d-block
          "
          ><?= $data[0]->title?></span
        >
          <button title="Close (Esc)" type="button" class="mfp-close text-dark">×</button>
        <p>
          <?= $data[0]->description?></p>
        <!-- <p>
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
        </p> -->
        <a
          class="
          btn btn-large btn-info d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr
            popup-modal-dismiss
          "
          href="#"
          >Agree Terms</a
        >
      </div>
      <!-- end modal pop-up -->
      <!-- start page title -->
      <section
        class="parallax"
        data-parallax-background-ratio="0.5"
        style="
          background-image: url('<?= base_url() ?>layout/images/portfolio-bg.jpg');
          padding: 40px 0px 10px 0px;
        "
      >
        <div class="container">
          <div
            class="
              row
              align-items-stretch
              justify-content-center
              extra-small-screen
            "
          >
            <div
              class="
                col-12 col-xl-6 col-lg-7 col-md-8
                page-title-extra-small
                text-center
                d-flex
                justify-content-center
                flex-column
              "
            >
              <h2
                class="
                  text-extra-dark-gray
                  alt-font
                  font-weight-500
                  letter-spacing-1px
                  line-height-50
                  sm-line-height-45
                  xs-line-height-30
                  no-margin-bottom
                "
              >
                Book your Slot
              </h2>
              <div class="text-center mt-4">
                <div
                  class="
                    breadcrumb
                    justify-content-center
                    alt-font
                    text-small
                    no-margin-bottom
                  "
                  style="margin: 15px 0px"
                >
                  <ul class="font-weight-600">
                    <li>
                      <a
                        href="<?= base_url('MainCon/') ?>"
                        class="text-extra-black text-black-hover"
                        >Home</a>
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
          <div
            class="
              row row-cols-1 row-cols-lg-3 row-cols-md-2
              justify-content-center
            "
          >
            <div class="col col-sm-8 padding-2-half-rem-bottom">
              <div
                class="
                  feature-box
                  padding-1-half-rem-top padding-1-half-rem-bottom
                  bg-white
                  border-radius-6px
                  overflow-hidden
                  box-shadow-large box-shadow-extra-large-hover
                "
              >
                <div
                  class="
                    feature-box-move-bottom-top
                    padding-5-rem-lr padding-15px-tb
                    lg-padding-2-half-rem-lr
                    md-padding-4-half-rem-lr
                  "
                >
                  <div class="feature-box-icon">
                    <div
                      class="
                        col
                        padding-1-rem-bottom
                        text-center
                        sm-margin-40px-bottom
                        wow
                        animate__fadeIn
                      "
                      data-wow-delay="0.2s"
                    >
                      <h3
                        class="
                          vertical-counter
                          d-inline-flex
                          text-extra-dark-gray
                          alt-font
                          appear
                          font-weight-600
                          letter-spacing-minus-2px
                          mb-0
                        "
                        data-to="1055"
                      ></h3>
                      <!-- <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">Total Slots</span></span> -->
                    </div>
                  </div>
                  <div class="feature-box-content last-paragraph-no-margin">
                    <span
                      class="
                        text-extra-dark-gray text-extra-medium
                        d-block
                        alt-font
                        font-weight-500
                      "
                      >Total <br>Slots Released Today</span
                    >
                  </div>
                  <div
                    class="
                      move-bottom-top
                      margin-10px-top
                      last-paragraph-no-margin
                    "
                  >
                    <p>
                      Lorem ipsum is simply dummy text of the printing industry
                    </p>
                  </div>
                </div>
                <div class="feature-box-overlay"></div>
              </div>
            </div>
            <div class="col col-sm-8 padding-2-half-rem-bottom">
              <div
                class="
                  feature-box
                  padding-1-half-rem-top padding-1-half-rem-bottom
                  bg-white
                  border-radius-6px
                  overflow-hidden
                  box-shadow-large box-shadow-extra-large-hover
                "
              >
                <div
                  class="
                    feature-box-move-bottom-top
                    padding-5-rem-lr padding-15px-tb
                    lg-padding-2-half-rem-lr
                    md-padding-4-half-rem-lr
                  "
                >
                  <div class="feature-box-icon">
                    <div
                      class="
                        col
                        padding-1-rem-bottom
                        text-center
                        sm-margin-40px-bottom
                        wow
                        animate__fadeIn
                      "
                      data-wow-delay="0.2s"
                    >
                      <h3
                        class="
                          vertical-counter
                          d-inline-flex
                          text-extra-dark-gray
                          alt-font
                          appear
                          font-weight-600
                          letter-spacing-minus-2px
                          mb-0
                        "
                        data-to="2570"
                      ></h3>
                      <!-- <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">Total Slots</span></span> -->
                    </div>
                  </div>
                  <div class="feature-box-content last-paragraph-no-margin">
                    <span
                      class="
                        text-extra-dark-gray text-extra-medium
                        d-block
                        alt-font
                        font-weight-500
                      "
                      >Total <br>Slots Booked Today</span
                    >
                  </div>
                  <div
                    class="
                      move-bottom-top
                      margin-10px-top
                      last-paragraph-no-margin
                    "
                  >
                    <p>
                      Lorem ipsum is simply dummy text of the printing industry
                    </p>
                  </div>
                </div>
                <div class="feature-box-overlay"></div>
              </div>
            </div>
            <div class="col col-sm-8 padding-2-half-rem-bottom">
              <div
                class="
                  feature-box
                  padding-1-half-rem-top padding-1-half-rem-bottom
                  bg-white
                  border-radius-6px
                  overflow-hidden
                  box-shadow-large box-shadow-extra-large-hover
                "
              >
                <div
                  class="
                    feature-box-move-bottom-top
                    padding-5-rem-lr padding-15px-tb
                    lg-padding-2-half-rem-lr
                    md-padding-4-half-rem-lr
                  "
                >
                  <div class="feature-box-icon">
                    <div
                      class="
                        col
                        padding-1-rem-bottom
                        text-center
                        sm-margin-40px-bottom
                        wow
                        animate__fadeIn
                      "
                      data-wow-delay="0.2s"
                    >
                      <h3
                        class="
                          vertical-counter
                          d-inline-flex
                          text-extra-dark-gray
                          alt-font
                          appear
                          font-weight-600
                          letter-spacing-minus-2px
                          mb-0
                        "
                        data-to="3400"
                      ></h3>
                      <!-- <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">Total Slots</span></span> -->
                    </div>
                  </div>
                  <div class="feature-box-content last-paragraph-no-margin">
                    <span
                      class="
                        text-extra-dark-gray text-extra-medium
                        d-block
                        alt-font
                        font-weight-500
                      "
                      >Total <br>Till date Slots released</span
                    >
                  </div>
                  <div
                    class="
                      move-bottom-top
                      margin-10px-top
                      last-paragraph-no-margin
                    "
                  >
                    <p>
                      Lorem ipsum is simply dummy text of the printing industry
                    </p>
                  </div>
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
          <div
            class="
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
            "
            data-wow-delay="0.4s"
          >
            <div class="row justify-content-center">
              <div
                class="
                  col-12 col-xl-6 col-lg-7
                  text-center
                  margin-4-half-rem-bottom
                  md-margin-3-rem-bottom
                "
              >
                <span
                  class="
                    alt-font
                    letter-spacing-minus-1-half
                    text-extra-medium
                    d-block
                    margin-5px-bottom
                  "
                  >Fill out the form and
                </span>
                <h4 class="alt-font font-weight-600 text-extra-dark-gray">
                  Book Ganesh Visarjan Slot
                </h4>
              </div>
              <div class="col-12">
                <!-- start book slot form -->
                <?php $k = "slot_booking";?>
              <form action="<?php echo base_url('DbCon/add/' . $k);?>" method="post" novalidate="">
                  <div class="row row-cols-1 row-cols-md-2">
                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                      <label class="margin-15px-bottom font-weight-600"
                        >Name
                        <span class="required-error text-radical-red"
                          >*</span
                        ></label
                      >
                      <input
                        class="
                          medium-input
                          bg-white
                          margin-25px-bottom
                          
                        "
                        type="text"
                        name="name"
                        placeholder="Your name"
                      />
                      <label class="margin-15px-bottom font-weight-600"
                      >Mobile Number
                      <span class="required-error text-radical-red">*</span
                    ></label>      
                      <input
                        class="medium-input bg-white margin-25px-bottom "
                        type="tel"
                        name="mobile_no"
                        placeholder="Your mobile"
                      />
                      
                      <label class="margin-15px-bottom font-weight-600">
                        Email
                        <span class="required-error text-radical-red">*</span
                      ></label>
                      <input
                        class="
                          medium-input
                          bg-white
                          margin-25px-bottom
                          "
                        type="email"
                        name="email"
                        placeholder="Your email address"
                      />

                    <label class="margin-15px-bottom font-weight-600"
                    >Type of Murti
                    <span class="required-error text-radical-red">*</span
                  ></label> 
                  <select
                    class="
                      medium-input
                      sm-w-100
                      w-100
                      bg-white
                      margin-25px-bottom
                      
                    "
                    name="murti_type"
                    style="background-size: 12px"
                  >
                    <option value="none" selected >
                  Select type of Murti
                    </option>
                    <option value="Shadu Murti">Shadu Mati Murti</option>
                    <option value="Plaster Of Paris">Plaster Of Paris Murti</option>
                  </select>
                    </div>

                    
                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                      
                      <label class="margin-15px-bottom font-weight-600"
                      >Select Division
                      <span class="required-error text-radical-red">*</span
                    ></label> 
                      <select
                        class="
                          medium-input
                          sm-w-100
                          w-100
                          bg-white
                          margin-25px-bottom
                          
                        "
                        name="division_name"
                        style="background-size: 12px"
                      >
                        <option value="none" selected>Select Division</option>
                        <option value="Nashik East">Nashik East</option>
                        <option value="Nashik Road">Nashik Road</option>
                        <option value="Nashik West">Nashik West</option>
                        <option value="Satpur">Satpur</option>
                        <option value="Panchvati">Panchvati</option>
                        <option value="New Nashik">New Nashik</option>
                      </select>
                      <label class="margin-15px-bottom font-weight-600"
                      >Select Visarjan Pond
                      <span class="required-error text-radical-red">*</span
                    ></label> 
                      <select
                        class="
                          medium-input
                          sm-w-100
                          w-100
                          bg-white
                          margin-25px-bottom
                          
                        "
                        name="pond_name"
                        style="background-size: 12px"
                      >
                        <option
                          value="none"
                          selected>
                          Select Visarjan Pond
                        </option>
                        <option
                        class="font-weight-700"
                          value="Artificial"
                          disabled
                        >
                          Artificial Ponds
                        </option>
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                        <option value="Four">Four</option>
                        <option value="Five">Five</option>
                        <option value="Six">Six</option>
                        <option
                        class="font-weight-700"
                        value="Natural"
                        disabled
                      >
                        Natural Ponds
                      </option>
                       <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                        <option value="Four">Four</option>
                        <option value="Five">Five</option>
                        <option value="Six">Six</option>
                      </select>

                      <label class="margin-15px-bottom font-weight-600">
                        Select Visarjan Date
                      <span class="required-error text-radical-red">*</span
                    ></label> 
                      <!-- <input
                        class="medium-input bg-white margin-25px-bottom required"
                        type="date"
                        name="slot"
                        placeholder="Book Slot"
                      /> -->
                      <select
                      class="
                        medium-input
                        sm-w-100
                        w-100
                        bg-white
                        margin-25px-bottom
                        
                      "
                      name="book_date"
                      style="background-size: 12px"
                    >
                      <option value="none" selected>
                        Select Visarjan Date
                      </option>
                      <option value="1.5 Days - 23rd August 2021">1.5 Days - 23rd August 2021</option>
                      <option value="5 Days - 26rd August 2021">5 Days - 26rd August 2021</option>
                      <option value="Gauri Ganpati - 27rd August 2021">Gauri Ganpati - 27rd August 2021</option>
                      <option value="7 Days - 28rd August 2021">7 Days - 28rd August 2021</option>
                      <option value="Anant Chaturdashi - 1st September 2021">Anant Chaturdashi - 1st September 2021</option>
                    </select>
                      <label class="margin-15px-bottom font-weight-600"
                      >Select Timeslot
                      <span class="required-error text-radical-red">*</span
                    ></label> 
                      <select
                        class="
                          medium-input
                          sm-w-100
                          w-100
                          bg-white
                          margin-25px-bottom
                          
                        "
                        name="book_time"
                        style="background-size: 12px"
                      >
                        <option value="none" selected>
                          Select timeslot for Visarjan
                        </option>
                  <option value="8:00 AM to 8:30 AM">8:00 AM to 8:30 AM &mdash; 3 Spots Left</option>
                  <option value="8:31 AM to 9:00 AM">8:31 AM to 9:00 AM &mdash; 5 Spots Left</option>
                  <option value="9:01 AM to 9:30 AM">9:01 AM to 9:30 AM &mdash; 9 Spots Left</option>
                <option value="9:31 AM to 10:00 AM">9:31 AM to 10:00 AM &mdash; 7 Spots Left</option>
              <option value="10:01 AM to 10:30 AM">10:01 AM to 10:30 AM &mdash; 4 Spots Left</option>
              <option value="10:31 AM to 11:00 AM">10:31 AM to 11:00 AM &mdash; 2 Spots Left</option>
                      </select>
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
    <footer
      class="footer-light border-top border-color-medium-gray padding-50px-tb"
    >
      <div class="container">
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div
                class="
                  col-12 col-md-6
                  order-2 order-md-1
                  text-sm-center text-md-left
                  last-paragraph-no-margin
                "
              >
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
              <div
                class="col-12 col-md-6 order-1 order-md-2 sm-margin-10px-bottom"
              >
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
    <a class="scroll-top-arrow" href="javascript:void(0);"
      ><i class="feather icon-feather-arrow-up"></i
    ></a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="<?= base_url() ?>layout/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>layout/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>layout/js/main.js"></script>
  </body>
</html>

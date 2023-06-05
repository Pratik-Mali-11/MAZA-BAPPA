<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Ganesh Festival System &mdash; Check Status</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1, shrink-to-fit=no" />
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
              Check Status
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
                  <li class="text-extra-light-gray">Check Status</li>
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
                Check Status
              </h4>
            </div>
            <div class="col-md-8 col-12">
              <!-- start book slot form -->
              <form method="post" action="<?php echo base_url('check_status'); ?>" autocomplete="off">
                <!-- <div class="col-8"> -->
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <label class="margin-15px-bottom font-weight-600">Check Status of / स्थिती प्रकार निवडा
                    <span class="required-error text-radical-red">*</span></label>
                  <select class="
                      medium-input
                      sm-w-100
                      w-100
                      bg-white
                      margin-5px-bottom
                      required
                    " name="status_type" style="background-size: 12px">
                    <option value="none" disabled selected>
                      Select check status type
                    </option>
                    <option value="Ganesh Visarjan Slot" <?php if (set_value('status_type') == 'Ganesh Visarjan Slot') { ?> selected <?php } ?>>Ganesh Visarjan Slot</option>
                    <option value="Ammonium Powder Registration" <?php if (set_value('status_type') == 'Ammonium Powder Registration') { ?> selected <?php } ?>>Ammonium Powder Registration</option>
                    <option value="Organisation Registration" <?php if (set_value('status_type') == 'Organisation Registration') { ?> selected <?php } ?>>Organisation Registration</option>
                    <option value="Tank on Wheel" <?php if (set_value('status_type') == 'Tank on Wheel') { ?> selected <?php } ?>>Tank on Wheel</option>
                  </select>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('status_type', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Unique User Id or Email / युनिक आयडी किंवा ईमेल
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                        " type="text" name="id_email" placeholder="Enter Unique Id or Email" value="<?php echo set_value('id_email'); ?>" />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('id_email', "*"); ?></p>
                </div>
                <!-- </div> -->
                <div class="col-12 text-center margin-15px-bottom text-md-center">
                  <button class="btn btn-fancy btn-rounded btn-large btn-dark-gray btn-box-shadow d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" type="submit" name="submit">
                    Check Status
                  </button>
                </div>
                <div class="form-results d-none"></div>
                <?php if(isset($slot_booking)) { ?>
                <h6 class="alt-font font-weight-600 text-extra-dark-gray">
                Search Results
              </h6>
              <?php $index = 1; foreach($slot_booking as $row) {?>
              <div class="col margin-2-rem-bottom sm-margin-25px-bottom">
                <table>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">ID :</td>
                    <td class="margin-5px-bottom"><?= $index++; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Booking ID :</td>
                    <td class="margin-5px-bottom"><?= $row->user_id; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Name :</td>
                    <td class="margin-5px-bottom"><?= $row->name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Visarjan Date :</td>
                    <td class="margin-5px-bottom"><?= $row->book_date; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Slot Time :</td>
                    <td class="margin-5px-bottom"><?= $row->book_time; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Venue :</td>
                    <td class="margin-5px-bottom"><?= $row->division_name.'-'.$row->pond_name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Download Invoice :</td>
                    <td class="margin-5px-bottom"><a href="<?= base_url('check_visarjan_invoice?user_id='.$row->user_id); ?>">Click Here</a></td>
                  </tr>
                </table>
                <hr>
                </div>
                <?php } ?>
                <?php } ?>
                <?php if(isset($ammo_booking)) { ?>
                <h6 class="alt-font font-weight-600 text-extra-dark-gray" style="font-size:23px">
                Search Results
              </h6>
              <?php $index = 1; foreach($ammo_booking as $row) {?>
              <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
              <table>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">ID : </td>
                    <td class="margin-5px-bottom"><?= $index; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Booking ID : </td>
                    <td class="margin-5px-bottom"><?= $row->user_id; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Name :</td>
                    <td class="margin-5px-bottom"><?= $row->name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Murti Type : </td>
                    <td class="margin-5px-bottom"><?= $row->murti_type; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Booking Type : </td>
                    <td class="margin-5px-bottom"><?= $row->booking_type; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Murti Weight : </td>
                    <td class="margin-5px-bottom"><?= $row->murti_weight; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Center Name : </td>
                    <td class="margin-5px-bottom"><?= $row->division_name.'-'.$row->center_name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Download Invoice : </td>
                    <td class="margin-5px-bottom"><a href="<?= base_url('check_ammonium_invoice?user_id='.$row->user_id); ?>"> Click Here</a></td>
                  </tr>
                </table>
                <hr>
                </div>
                <?php } ?>
                <?php } ?>
                <?php if(isset($org_registr)) { ?>
                <h6 class="alt-font font-weight-600 text-extra-dark-gray">
                Search Results
              </h6>
              <?php  $index = 1; foreach($org_registr as $row) {?>
              <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
              <table>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">ID :</td>
                    <td class="margin-5px-bottom"><?= $index++; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Registration ID :</td>
                    <td class="margin-5px-bottom"><?= $row->org_id; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Organisation Name :</td>
                    <td class="margin-5px-bottom"><?= $row->name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Organisation Type :</td>
                    <td class="margin-5px-bottom"><?= $row->org_type; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">President Name :</td>
                    <td class="margin-5px-bottom"><?= $row->per_name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Registration Date :</td>
                    <td class="margin-5px-bottom"><?= explode(' ',$row->registered_at)[0] ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Registration :</td>
                    <td class="margin-5px-bottom"><?php $check = $row->approved; if($check == 0){ echo "Not Approved";}else{ echo "Approved";} ?></td>
                  </tr>
                </table>
                <hr>
                </div>
                <?php } ?>
                <?php } ?>
                <?php if(isset($tank_on_wheel)) { ?>
                <h6 class="alt-font font-weight-600 text-extra-dark-gray">
                Search Results
              </h6>
              <?php  $index = 1; foreach($tank_on_wheel as $row) {?>
              <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
              <table>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">ID :</td>
                    <td class="margin-5px-bottom"><?= $index++; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Booking ID :</td>
                    <td class="margin-5px-bottom"><?= $row->user_id; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Society Name :</td>
                    <td class="margin-5px-bottom"><?= $row->society_name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Society Address :</td>
                    <td class="margin-5px-bottom"><?= $row->society_addr; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Secretory Name :</td>
                    <td class="margin-5px-bottom"><?= $row->secretary_name; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Secretory Mobile No. :</td>
                    <td class="margin-5px-bottom"><?= $row->sec_mobile_no ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Visarjan Date :</td>
                    <td class="margin-5px-bottom"><?= $row->book_date; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Slot Time :</td>
                    <td class="margin-5px-bottom"><?= $row->book_time; ?></td>
                  </tr>
                  <tr>
                    <td class="margin-5px-bottom font-weight-600">Download Invoice : </td>
                    <td class="margin-5px-bottom"><a href="<?= base_url('check_tank_invoice?user_id='.$row->user_id); ?>"> Click Here</a></td>
                  </tr>
                </table>
                <hr>
                </div>
                <?php } ?>
                <?php } ?>
                <?php if(isset($warning)) { ?>
                <h6 class="alt-font font-weight-600 text-extra-dark-gray">
                Search Results
              </h6>
              <?= $warning ?>
                <?php } ?>
              </form>
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
  <script type="text/javascript" src="<?= base_url() ?>layout/js/vendors.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>layout/js/theme-vendors.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>layout/js/main.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>layout/js/app.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Ganesh Festival System &mdash; Festival Permission Application Form </title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
  <meta name="description" content="#" />
  <!-- favicon icon -->
  <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png" />
  <!-- style sheets and font icons  -->
  <link rel="stylesheet" type="text/css" href="<?=base_url() ?>layout/css/font-icons.min.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url() ?>layout/css/theme-vendors.min.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url() ?>layout/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url() ?>layout/css/responsive.css" />
  <script>
    var stateObject = {
      "Nashik East": {
        "Bhadrakali": ["Unit Number 2"],
        "Sarkar Wada": ["Unit Number 2"],
        "Indira Nagar": ["Unit Number 3"],
        "Mumbai Naka": ["Unit Number 2"],
        "Upnagar": ["Unit Number 4"],
      },
      "Nashik West": {
        "Bhadrakali": ["Unit Number 2"],
        "Sarkar Wada": ["Unit Number 2"],
        "Mumbai Naka": ["Unit Number 2"],
        "Ganga Pur": ["Unit Number 2"],
      },
      "Panchavati": {
        "Adgaon": ["Unit Number 1"],
        "Panchavati": ["Unit Number 1"],
        "Mhasarul": ["Unit Number 1"],
      },
      "New Nashik": {
        "Ambad": ["Unit Number 1"],
        "Indira Nagar": ["Unit Number 3"],
        "Mumbai Naka": ["Unit Number 2"],
      },
      "Satpur": {
        "Ambad": ["Unit Number 3"],
        "Satpur": ["Unit Number 3"],
        "GangaPur": ["Unit Number 2"],
      },
      "Nashik Road": {
        "Nashik Road": ["Unit Number 4"],
        "Upnagar": ["Unit Number 4"],

      },
      "NMC": {

      },
    }
    window.onload = function() {
      var countySel = document.getElementById("nashik"),
        stateSel = document.getElementById("police"),
        districtSel = document.getElementById("city");
      abc = document.getElementById("fire");

      for (var country in stateObject) {
        countySel.options[countySel.options.length] = new Option(country, country);
      }
      countySel.onchange = function() {
        stateSel.length = 1; // remove all options bar first
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done 
        for (var state in stateObject[this.value]) {
          stateSel.options[stateSel.options.length] = new Option(state, state);
        }
      }
      countySel.onchange(); // reset in case page is reloaded
      stateSel.onchange = function() {
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done 
        var district = stateObject[countySel.value][this.value];
        // for (var state1 in stateObject[this.value]) {
        //   districtSel.options[districtSel.options.length] = new Option(state1, state1);
        for (var i = 0; i < district.length; i++) {
          districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
        }
      }

    }
  </script>

</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#333a3a">
  <div class="main-content">

    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5" style="
          background-image: url('<?=base_url() ?>layout/images/portfolio-bg.jpg');
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
              Festival Permission Form
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
                    <a href="<?=base_url('') ?>" class="text-extra-black text-black-hover">Home</a>
                  </li>
                  <li class="text-extra-light-gray">Festival Permission Form</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end page title -->
    <section class="overflow-visible">
      <div class="container">
        <div class="
              z-index-6
              position-relative
              overlap-section-third-fourth
              bg-white
              box-shadow-large
              padding-8-rem-all
              md-padding-5-rem-all
              xs-padding-4-rem-tb xs-padding-2-rem-lr
              wow
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
                  ">Fill out the Application Form for
              </span>
              <h4 class="alt-font font-weight-600 text-extra-dark-gray">
                Festival Permission
              </h4>
            </div>

            <!-- <div class="col-12"> -->


            <!-- start contact form -->
            <form action="#" class="margin-1-rem-left margin-1-rem-right " method="post" autocomplete="off">
              <div class="row row-cols-1 row-cols-md-2">

                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <h7 class="alt-font font-weight-600 text-extra-dark-gray">
                    Applicant Information
                  </h7><br>
                  <label class="margin-15px-bottom font-weight-600">Name
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
                          medium-input
                          bg-white
                          margin-5px-bottom
                          required
                        " type="text" name="name" placeholder="Your name" value="<?php echo set_value('name'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('name', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Mobile Number
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom required" type="tel" name="mobile_no" placeholder="Your mobile" value="<?php echo set_value('mobile_no'); ?>"
                      />
                      <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('mobile_no', "*"); ?></p>

                </div>
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom"><br>
                  <label class="margin-15px-bottom font-weight-600">Email
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
                        medium-input
                        bg-white
                        margin-5px-bottom
                        required
                      " type="email" name="email" placeholder="Your email address" value="<?php echo set_value('email'); ?>"
                      />
                      <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('email', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Full Address
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
                    medium-input
                    bg-white
                    margin-5px-bottom
                    required
                  " type="text" name="address" placeholder="Type Your address" value="<?php echo set_value('address'); ?>"
                      />
                      <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('address', "*"); ?></p>

                </div>
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <h7 class="margin-25px-bottom alt-font font-weight-600 text-extra-dark-gray">
                    Festival information
                  </h7><br>
                  <label class="margin-10px-bottom font-weight-600">Name of the festival
                    <span class="required-error text-radical-red">*</span></label>
                  <select class="
                  medium-input
                  sm-w-100
                  w-100
                  bg-white
                  margin-5px-bottom
                  required
                " name="festival_name" style="background-size: 12px">
                    <option value="slot" selected disabled>
                      Select The Name Of Festival
                    </option>
                    <option value="Ganeshotsav">Ganeshotsav</option>
                    <option value="Navratri festival">Navratri festival</option>
                    <option value="Goat Eid">Goat Eid</option>
                    <option value="Ramadan Eid">Ramadan Eid</option>
                    <option value="Moharram">Moharram</option>
                    <option value="Christmas">Christmas</option>
                    <option value="Ambedkar Jayanti">Ambedkar Jayanti</option>
                    <option value="Mahanirvana Day">Mahanirvana Day</option>
                    <option value="Shiva Jayanti">Shiva Jayanti</option>
                    <option value="Others">Others</option>
                  </select>

                </div>
              </div>

              <div class="row row-cols-1 row-cols-md-2">
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <h7 class="margin-25px-bottom alt-font font-weight-600 text-extra-dark-gray">
                    Circle Details
                  </h7><br>
                  <label class="margin-15px-bottom font-weight-600">Board Name
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
                    medium-input
                    bg-white
                    margin-5px-bottom
                    required
                  " type="text" name="board_name" placeholder="Your Board Name" value="<?php echo set_value('board_name'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('board_name', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Public Board Address
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom required" type="text" name="public_b_addr" placeholder="Your Board Address" value="<?php echo set_value('public_b_addr'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('public_b_addr', "*"); ?>

                </div>
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom"><br>
                  <label class="margin-15px-bottom font-weight-600">Circle Registration Number (if any)
                    <span class="required-error text-radical-red"></span></label>
                  <input class="
                  medium-input
                  bg-white
                  margin-5px-bottom
                  required
                " type="text" name="circle_no" placeholder="Circle Registration Number" value="<?php echo set_value('circle_no'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('circle_no', "*"); ?>

                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <h7 class="margin-25px-bottom alt-font font-weight-600 text-extra-dark-gray">
                    Other Details
                  </h7><br>
                  <label class="margin-15px-bottom font-weight-600">Tent length (feet)
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
                medium-input
                bg-white
                margin-5px-bottom
                required
              " type="text" name="tent_length" placeholder="Length of Tent in (Feet)" value="<?php echo set_value('tent_length'); ?>"
                      />
                  <p class="text-radical-red margin-5px-bottom font-weight-600"><?php echo form_error('tent_length', "*"); ?></p>
                  <label class="margin-15px-bottom font-weight-600">Tent width (feet)
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom required" type="text" name="tent_width" placeholder="Tent width (feet)" value="<?php echo set_value('tent_width'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('tent_width', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Period of Tent (Day)
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom required" type="text" name="p_of_tent" placeholder="Period of Tent (Day)" value="<?php echo set_value('p_of_tent'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('p_of_tent', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Date of commencement of construction of pavilion
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom required" type="text" name="date_of_const" placeholder="Date of commencement of construction of pavilion" value="<?php echo set_value('date_of_const'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('date_of_const', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Last date for removal of pavilion
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom required" type="text" name="last_date_removal" placeholder="Last date for removal of pavilion" value="<?php echo set_value('last_date_removal'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('last_date_removal', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Place of arch erection
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom" type="text" name="place_of_arch" placeholder="Place of arch erection" value="<?php echo set_value('place_of_arch'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('place_of_arch', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Number of arches
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom" type="text" name="no_of_arches" placeholder="Number of arches" value="<?php echo set_value('no_of_arches'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('no_of_arches', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Arch height (keep fire bomb) (feet)
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom" type="text" name="arch_height" placeholder="Arch height (keep fire bomb) (feet)" value="<?php echo set_value('arch_height'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('arch_height', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Banner Number
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-5px-bottom" type="text" name="banner_no" placeholder="Banner Number" value="<?php echo set_value('banner_no'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('banner_no', "*"); ?></p>
                </div>
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom"><br>
                  <label class="margin-15px-bottom font-weight-600">Pavilion Area
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
                medium-input
                bg-white
                margin-5px-bottom
                required
              " type="text" name="pavilian_area" placeholder="Tent Area" value="<?php echo set_value('pavilian_area'); ?>"
              /><p class="text-radical-red margin-5px-bottom font-weight-600"><?php echo form_error('pavilian_area', "*"); ?></p>
                      
                  <label class="margin-15px-bottom font-weight-600">Address of the place where the pavilion will be
                    erected
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
            medium-input
            bg-white
            margin-5px-bottom
            required
          " type="text" name="address_of_place" placeholder="Address of the place where the pavilion will be erected" value="<?php echo set_value('address_of_place'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('address_of_place', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Details of previous complaints against the
                    applicant
                    <span class="required-error text-radical-red"></span></label>
                  <input class="medium-input bg-white margin-5px-bottom" type="text" name="details_prev" placeholder="Details of previous complaints against the applicant" value="<?php echo set_value('details_prev'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('details_prev', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Details if permission has already been obtained
                    <span class="required-error text-radical-red"></span></label>
                  <input class="medium-input bg-white margin-5px-bottom" type="text" name="details_permission" placeholder="Details if permission has already been obtained" value="<?php echo set_value('details_permission'); ?>"
                      />
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('details_permission', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Has the applicant obtained loudspeaker
                    permission?
                    <span class="required-error text-radical-red">*</span></label> <br />
                  <input type="radio" id="mno" name="mno[]" value="<?php echo set_value('mno[]'); ?>"
                      />
                    <label for="yes">Yes</label>
                    <input type="radio" id="mno1" name="mno[]" value="<?php echo set_value('mno[]'); ?>"
                      />

                    <label for="no">No</label><br>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('mno[]', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Have fire prevention measures been implemented ?
                    <span class="required-error text-radical-red">*</span></label> <br />
                  <input type="radio" id="xyz" name="xyz[]" value="yes"value="<?php echo set_value('xyz[]'); ?>"
                      />
                    <label for="yes">Yes</label>
                    <input type="radio" id="xy1" name="xyz[]" value="no"value="<?php echo set_value('xyz[]'); ?>"
                      />
                    <label for="no">No</label><br>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('xyz[]', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Is the pavilion to be erected enough to
                    accommodate the potential people coming in and the width of the road / sidewalk ?
                    <span class="required-error text-radical-red">*</span></label>
                  <input type="radio" id="abc" name="abc[]" value="yes"value="<?php echo set_value('abc[]'); ?>"
                      />
                    <label for="yes">Yes</label>
                    <input type="radio" id="abc1" name="abc[]" value="no"value="<?php echo set_value('abc[]'); ?>"
                      />
                    <label for="no">No</label><br>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('abc[]', "*"); ?></p>

                  </input>
                  <label class="margin-15px-bottom font-weight-600">Is there enough road / sidewalk for citizens to
                    get around?
                    <span class="required-error text-radical-red">*</span></label><br>
                  <input type="radio" id="html" name="fav_language[]" value="yes"value="<?php echo set_value('fav_language[]'); ?>"
                      />

                    <label for="html">Yes</label>
                    <input type="radio" id="html1" name="fav_language[]" value="no">
                    <label for="html1">No</label><br>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('fav_language[]', "*"); ?></p>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <h7 class="margin-25px-bottom alt-font font-weight-600 text-extra-dark-gray">
                    Department
                  </h7><br>
                  <label class="margin-15px-bottom font-weight-600">Nashik Municipal Corporation Divisional Office
                    <span class="required-error text-radical-red">*</span></label>
                  <select class="
        medium-input
        sm-w-100
        w-100
        bg-white
        margin-5px-bottom
        required
      " name="nashik" id="nashik" size="1">
                    <option value="" selected="selected">Select Nashik Municipal Corporation Divisional Office
                    </option>
                  </select>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('nashik', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Police Station / Thane
                    <span class="required-error text-radical-red">*</span></label>
                  <select class="
      medium-input
      sm-w-100
      w-100
      bg-white
      margin-5px-bottom
      required
    " name="police" id="police" size="1">
                    <option value="" selected="selected">Select Police Station / Thane</option>
                  </select>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('police', "*"); ?></p>

                </div>
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom"><br>
                  <label class="margin-15px-bottom font-weight-600">City Transport Department
                    <span class="required-error text-radical-red">*</span></label>
                  <select class="
        medium-input
        sm-w-100
        w-100
        bg-white
        margin-5px-bottom
        required
      " name="city" id="city" size="1">
                    <option value="" selected="selected">Select City Transport Department</option>
                  </select>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('city', "*"); ?></p>

                  <label class="margin-15px-bottom font-weight-600">Fire Station
                    <span class="required-error text-radical-red">*</span></label><br>
                  <select class="
      medium-input
      sm-w-100
      w-100
      bg-white
      margin-5px-bottom
      required
    " name="fire" style="background-size: 12px">
                    <option value="slot" selected disabled>
                      Select Fire Station
                    </option>
                    <option value="Main Fire Station (Shingda Talav)">Main Fire Station (Shingda Talav)</option>
                    <option value="Panchavati Fire Station">Panchavati Fire Station</option>
                    <option value="Sidco (New NAshik) Fire Station">Sidco (New NAshik) Fire Station</option>
                    <option value="Satpur Fire Station">Satpur Fire Station</option>
                    <option value="Nashik Road Fire Station">Nashik Road Fire Station</option>
                  </select>
                  <p class="text-radical-red margin-15px-bottom font-weight-600"><?php echo form_error('fire', "*"); ?></p>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                  <h7 class="margin-25px-bottom alt-font font-weight-600 text-extra-dark-gray">
                    Documents to attach
                  </h7><br>

                  <label class="margin-15px-bottom font-weight-600">AADHAAR CARD
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
        medium-input
        bg-white
        margin-5px-bottom
        required
      " type="file" name="adhar" placeholder="Your name" />
                  <label class="margin-15px-bottom font-weight-600">List of Board Officers / Members and Mobile
                    Number
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="medium-input bg-white margin-25px-bottom required" type="file" name="list_board_member" placeholder="Your mobile" />
                </div>
                <div class="col margin-4-rem-bottom sm-margin-25px-bottom"><br>
                  <label class="margin-15px-bottom font-weight-600">Traffic - Guarantee (in sample)
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
      medium-input
      bg-white
      margin-5px-bottom
      required
    " type="file" name="traffic" placeholder="Your email address" />
                  <div class="row row-cols-1 row-cols-md-2">

                  </div>
                  <label class="margin-15px-bottom font-weight-600">Tent Viewer Map
                    <span class="required-error text-radical-red">*</span></label>
                  <input class="
  medium-input
  bg-white
  margin-5px-bottom
  required
" type="file" name="tent_map" placeholder="Type Your address" /><span class="required-error text-radical-black">(Upload
                    document in pdf, jpg, jpeg format)
                  </span>
                </div>
              </div>
              <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                <h7 class="margin-25px-bottom alt-font font-weight-600 text-extra-dark-gray">
                  Terms and Conditions
                </h7>
                <label class="margin-15px-bottom font-weight-600"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required> By this we declare that the program will be carried
                  out as per the order given by the High Court in Public Interest Petition No. 173/2010 as per
                  the guidelines regarding erection of mandap / stage of Nashik Municipal Corporation. In case
                  of violation of any terms and conditions, all the responsibility will remain with the Board.

                </label>
              </div>
              <div class="col-12 text-center text-md-center">
                <button id="project-contact-us-button" class="btn btn-fancy btn-rounded btn-large btn-dark-gray btn-box-shadow d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr submit" type="submit">
                  Submit Form
                </button>
              </div>
              <div class="form-results d-none"></div>
            </form>
            <!-- end contact form -->
            <!-- </div> -->
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
                <a href="#" target="_blank" class="
                      text-decoration-line-bottom text-extra-dark-gray
                      font-weight-500
                    ">Impact Solutions</a>. All rights reserved.
              </p>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2 sm-margin-10px-bottom">
              <ul class="
                    footer-horizontal-link
                    d-flex
                    flex-column flex-sm-row
                    justify-content-sm-center justify-content-md-end
                  ">
                <li><a href="./privacy-policy.html">Privacy policy</a></li>
                <li><a href="#">Terms of service</a></li>
              </ul>
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
  <script type="text/javascript" src="<?=base_url() ?>layout/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?=base_url() ?>layout/js/theme-vendors.min.js"></script>
  <script type="text/javascript" src="<?=base_url() ?>layout/js/main.js"></script>
</body>

</html>

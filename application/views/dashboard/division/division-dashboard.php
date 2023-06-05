<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Division Dashboard &mdash; Ganesh Festival System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png" />

    <!-- page css -->
    <link
      href="<?= base_url() ?>layout/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"
      rel="stylesheet"
    />

    <!-- Core css -->
    <link href="<?= base_url() ?>layout/css/app.min.css" rel="stylesheet" />
  </head>

  <body>
    <div class="app">
      <div class="layout">
        <!-- Header START -->
        <div class="header">
          <div class="logo logo-dark text-center">
            <a href="index.html">
              <img
                style="height: 55px; width: 130px; margin: 10px"
                src="<?= base_url() ?>layout/images/logo/nmclogo.png"
                alt="Logo"
              />
              <img
                style="height: 55px; width: 45px; margin: 10px 10px 10px 17px"
                class="logo-fold"
                src="<?= base_url() ?>layout/images/logo/nmclogo-fold.png"
                alt="Logo"
              />
            </a>
          </div>
          <div class="nav-wrap">
            <ul class="nav-left">
              <li class="desktop-toggle">
                <a href="javascript:void(0);">
                  <i class="anticon"></i>
                </a>
              </li>
              <li class="mobile-toggle">
                <a href="javascript:void(0);">
                  <i class="anticon"></i>
                </a>
              </li>
              <!-- <li>
                <a
                  href="javascript:void(0);"
                  data-toggle="modal"
                  data-target="#search-drawer"
                >
                  <i class="anticon anticon-search"></i>
                </a>
              </li> -->
            </ul>
            <ul class="nav-right">
              <li class="dropdown dropdown-animated scale-left">
                <div class="pointer" data-toggle="dropdown">
                  <div class="avatar avatar-image m-h-10 m-r-15">
                    <img src="<?= base_url() ?>layout/images/avatars/thumb-3.jpg" alt="" />
                  </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                  <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                    <div class="d-flex m-r-50">
                      <div class="avatar avatar-lg avatar-image">
                        <img src="<?= base_url() ?>layout/images/avatars/thumb-3.jpg" alt="" />
                      </div>
                      <div class="m-l-10">
                        <p class="m-b-0 text-dark font-weight-semibold">
                          Prashant Patil
                        </p>
                        <p class="m-b-0 opacity-07">NMC Official</p>
                      </div>
                    </div>
                  </div>
                  <a
                    href="edit-profile.html"
                    class="dropdown-item d-block p-h-15 p-v-10"
                  >
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <i
                          class="anticon opacity-04 font-size-16 anticon-user"
                        ></i>
                        <span class="m-l-10">Edit Profile</span>
                      </div>
                      <i class="anticon font-size-10 anticon-right"></i>
                    </div>
                  </a>
                  <!-- <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Account Setting</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a> -->
                  <a
                    href="<?php echo base_url() . 'logout' ?>"
                    class="dropdown-item d-block p-h-15 p-v-10"
                  >
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <i
                          class="anticon opacity-04 font-size-16 anticon-logout"
                        ></i>
                        <span class="m-l-10">Logout</span>
                      </div>
                      <i class="anticon font-size-10 anticon-right"></i>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <div class="side-nav">
          <div class="side-nav-inner">
            <ul class="side-nav-menu scrollable">
              <li class="nav-item">
                <a href="index.html">
                  <span class="icon-holder">
                    <i class="anticon anticon-dashboard"></i>
                  </span>
                  <span class="title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                  <span class="icon-holder">
                    <i class="anticon anticon-appstore"></i>
                  </span>
                  <span class="title">Ganesh Visarjan</span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="add-visarjan-data.html">1. Add Offline Ganesh Visarjan Data</a>
                  </li>
                  <li>
                    <a href="visarjan-data.html">2. Online Ganesh Visarjan</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                  <span class="icon-holder">
                    <i class="anticon anticon-build"></i>
                  </span>
                  <span class="title">Ammonium Bicarb.</span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="add-ammonium-data.html"
                      >1. Add Offline Ammonium Bicarbonate Data</a
                    >
                  </li>
                  <li>
                    <a href="ammonium-data.html">2. Online Ammonium Bicarbonate</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="edit-profile.html">
                  <span class="icon-holder">
                    <i class="anticon anticon-user"></i>
                  </span>
                  <span class="title">Admin Profile</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-dollar"></i>
                      </div>
                      <div>
                        <p class="m-b-0">Online Ganesh <br />Visarjan</p>
                        <h2 class="m-b-0">
                          <span>7600</span>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="avatar avatar-icon avatar-lg avatar-cyan">
                        <i class="anticon anticon-bar-chart"></i>
                      </div>
                      <div>
                        <p class="m-b-0">Offline Ganesh <br />Visarjan</p>
                        <h2 class="m-b-0">
                          <span>200</span>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="avatar avatar-icon avatar-lg avatar-red">
                        <i class="anticon anticon-profile"></i>
                      </div>
                      <div>
                        <p class="m-b-0">Online Ammonium <br />Disctributed</p>
                        <h2 class="m-b-0">
                          <span>64800</span>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="avatar avatar-icon avatar-lg avatar-gold">
                        <i class="anticon anticon-bar-chart"></i>
                      </div>
                      <div>
                        <p class="m-b-0">Offline Ammonium <br />Disctributed</p>
                        <h2 class="m-b-0">
                          <span>2340</span>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <h5>Online Ganesh Visarjan</h5>
                      <div>
                        <a
                          href="visarjan-data.html"
                          class="btn btn-sm btn-default"
                          >View All</a
                        >
                      </div>
                    </div>
                    <!-- <div class="m-t-30"> -->
                      <!-- <label for="filterlist">Filter Data by Division</label> -->
                      <!-- <select id="filterlist" onchange="myFunction()" class="form-control">
                                            <option selected disabled>Select Division</option>
                                            <option value="Nashik East">Nashik East</option>
                                            <option value="Nashik Road">Nashik Road</option>
                                            <option value="Nashik West">Nashik West</option>
                                            <option value="Nashik West">Satpur</option>
                                            <option value="Panchvati">Panchvati</option>
                                            <option value="New Nashik">New Nashik</option>
                                        </select> -->
                      <!-- <input type="text" id="filterlist" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
                      <div class="table-responsive">
                        <table id="data-table" class="table table-hover">
                          <thead>
                            <tr>
                              <th>BID</th>
                              <th>Name</th>
                              <th>Mobile Number</th>
                              <th>Email Id</th>
                              <th>Type of Murti</th>
                              <th>Visarjan Date</th>
                              <th>Division</th>
                              <th>Visarjan Pond</th>
                              <th>Visarjan Timeslot</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>#5331</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="d-flex align-items-center">
                                    <h6 class="m-l-10 m-b-0">Erin Gonzales</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="tel:+911234567891">1234567891</a>
                              </td>
                              <td>
                                <a href="mailto:temp@gmail.com"
                                  >temp@gmail.com</a
                                >
                              </td>
                              <td>Shadu Murti</td>
                              <td>23 Aug 2021</td>
                              <td>Nashik Road</td>
                              <td>XYZ - Artificial</td>
                              <td>8:00 AM to 8:30 AM</td>
                            </tr>
                            <tr>
                              <td>#5332</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="d-flex align-items-center">
                                    <h6 class="m-l-10 m-b-0">Vishwas Patil</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="tel:+911234567891">6518932461</a>
                              </td>
                              <td>
                                <a href="mailto:demo@gmail.com"
                                  >demo@gmail.com</a
                                >
                              </td>
                              <td>Shadu Murti</td>
                              <td>26 Aug 2021</td>
                              <td>Nashik East</td>
                              <td>ABC - Natural</td>
                              <td>9:00 AM to 9:30 AM</td>
                            </tr>
                            <tr>
                              <td>#5333</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="d-flex align-items-center">
                                    <h6 class="m-l-10 m-b-0">Erin Gonzales</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="tel:+911234567891">1234567891</a>
                              </td>
                              <td>
                                <a href="mailto:temp@gmail.com"
                                  >temp@gmail.com</a
                                >
                              </td>
                              <td>Shadu Murti</td>
                              <td>23 Aug 2021</td>
                              <td>Nashik Road</td>
                              <td>XYZ - Artificial</td>
                              <td>8:00 AM to 8:30 AM</td>
                            </tr>
                            <tr>
                              <td>#5331</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="d-flex align-items-center">
                                    <h6 class="m-l-10 m-b-0">Erin Gonzales</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="tel:+911234567891">1234567891</a>
                              </td>
                              <td>
                                <a href="mailto:demo@gmail.com"
                                  >demo@gmail.com</a
                                >
                              </td>
                              <td>Shadu Murti</td>
                              <td>23 Aug 2021</td>
                              <td>Nashik Road</td>
                              <td>XYZ - Artificial</td>
                              <td>8:00 AM to 8:30 AM</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Wrapper END -->

          <!-- Footer START -->
          <footer class="footer">
            <div class="footer-content">
              <p class="m-b-0">
                © 2021 Designed by
                <a class="text-gray" href="#" style="font-weight: bold"
                  >E-Connect Innovative Solutions</a
                >. All rights reserved.
              </p>
              <span>
                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                <a href="" class="text-gray">Privacy &amp; Policy</a>
              </span>
            </div>
          </footer>
          <!-- Footer END -->
        </div>
        <!-- Page Container END -->

        <!-- Search Start-->
        <div class="modal modal-left fade search" id="search-drawer">
          <div class="modal-dialog">
            <div class="modal-content">
              <div
                class="modal-header justify-content-between align-items-center"
              >
                <h5 class="modal-title">Search</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <i class="anticon anticon-close"></i>
                </button>
              </div>
              <div class="modal-body scrollable">
                <div class="input-affix">
                  <i class="prefix-icon anticon anticon-search"></i>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                  />
                </div>
                <div class="m-t-30">
                  <h5 class="m-b-20">Files</h5>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-cyan avatar-icon">
                      <i class="anticon anticon-file-excel"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Quater Report.exl</a
                      >
                      <p class="m-b-0 text-muted font-size-13">by Finance</p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-blue avatar-icon">
                      <i class="anticon anticon-file-word"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Documentaion.docx</a
                      >
                      <p class="m-b-0 text-muted font-size-13">by Developers</p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-purple avatar-icon">
                      <i class="anticon anticon-file-text"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Recipe.txt</a
                      >
                      <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-red avatar-icon">
                      <i class="anticon anticon-file-pdf"></i>
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Project Requirement.pdf</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        by Project Manager
                      </p>
                    </div>
                  </div>
                </div>
                <div class="m-t-30">
                  <h5 class="m-b-20">Members</h5>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="layout/images/avatars/thumb-1.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Erin Gonzales</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        UI/UX Designer
                      </p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="layout/images/avatars/thumb-2.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Darryl Day</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        Software Engineer
                      </p>
                    </div>
                  </div>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="layout/images/avatars/thumb-3.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >Marshall Nichols</a
                      >
                      <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                    </div>
                  </div>
                </div>
                <div class="m-t-30">
                  <h5 class="m-b-20">News</h5>
                  <div class="d-flex m-b-30">
                    <div class="avatar avatar-image">
                      <img src="layout/images/others/img-1.jpg" alt="" />
                    </div>
                    <div class="m-l-15">
                      <a
                        href="javascript:void(0);"
                        class="text-dark m-b-0 font-weight-semibold"
                        >5 Best Handwriting Fonts</a
                      >
                      <p class="m-b-0 text-muted font-size-13">
                        <i class="anticon anticon-clock-circle"></i>
                        <span class="m-l-5">25 Nov 2018</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Search End-->
      </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>layout/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="<?= base_url() ?>layout/vendors/chartjs/Chart.min.js"></script>
    <script src="<?= base_url() ?>layout/js/pages/dashboard-crm.js"></script>

    <!-- Core JS -->
    <script src="<?= base_url() ?>layout/js/app.min.js"></script>

    <!-- <script>
        var $rows = $('#data-table tr');
        $('#filterlist').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
        }).hide();
        });
    </script> -->
  </body>
</html>

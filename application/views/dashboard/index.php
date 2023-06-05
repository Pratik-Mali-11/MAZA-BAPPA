<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Super Admin Dashboard &mdash; Ganesh Festival System</title>

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
                    href="<?php echo base_url() . 'Admin-Profile' ?>"
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
                <a href="<?= base_url('Dashboard/') ?>">
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
                    <a href="<?= base_url('Visarjan-Data') ?>">1. Online Ganesh Visarjan</a>
                  </li>
                  <li>
                    <a href="#">2. Offline Ganesh Visarjan</a>
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
                    <a href="<?= base_url('Ammonium-Data') ?>"
                      >1. Online Ammonium Bicarbonate</a
                    >
                  </li>
                  <li>
                    <a href="#">2. Offline Ammonium Bicarbonate</a>
                  </li>
                </ul>
              </li>
              <!-- <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-hdd"></i>
                                </span>
                                <span class="title">Ganesh Mandal's</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">1. Registered Mandal's</a>
                                </li>
                                <li>
                                    <a href="#">2. Approved Mandal's</a>
                                </li>
                            </ul>
                        </li> -->
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                  <span class="icon-holder">
                    <i class="anticon anticon-hdd"></i>
                  </span>
                  <span class="title">Organizations's</span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?= base_url('Org-Reg-Data') ?>">Registered Organizations</a>
                  </li>
                  <li>
                    <a href="<?= base_url('Org-Apr-Data') ?>">Approved Organizations</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                  <span class="icon-holder">
                    <i class="anticon anticon-form"></i>
                  </span>
                  <span class="title">Announcements</span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                 <li>
                    <a href="<?= base_url('Add-Announcement') ?>">Add Announcements</a>
                  </li>
                  <li>
                    <a href="<?= base_url('Edit-Announcement') ?>">Edit Announcements</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                  <span class="icon-holder">
                    <i class="anticon anticon-table"></i>
                  </span>
                  <span class="title">Guidelines</span>
                  <span class="arrow">
                    <i class="arrow-icon"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?= base_url('Edit-Popup') ?>">Edit Guidelines</a>
                  </li>
                  <li>
                    <a href="<?= base_url('Edit-Slider') ?>">Edit Slider</a>
                  </li>
                  <!-- <li>
                                    <a href="#">1. Main Popup</a>
                                </li> -->
                  <!-- <li>
                                    <a href="#">2. Ammonium Bicarbonate Popup</a>
                                </li>
                                <li>
                                    <a href="#">3. Book your Slot Popup</a>
                                </li>
                                <li>
                                    <a href="#">4. Ganesh Mandal's Popup</a>
                                </li>
                                <li>
                                    <a href="#">5. NGO's Popup</a>
                                </li> -->
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Admin-Profile') ?>">
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
            <div class="row align-items-center justify-content-center">
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
                        <p class="m-b-0">Total Divisions</p>
                        <h2 class="m-b-0">
                          <span>06</span>
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
                      <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-dollar"></i>
                      </div>
                      <div>
                        <p class="m-b-0">Mandal Registered</p>
                        <h2 class="m-b-0">
                          <span>76</span>
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
                        <p class="m-b-0">NGO Registered</p>
                        <h2 class="m-b-0">
                          <span>28</span>
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
                    <div class="m-t-30">
                      <label for="filterlist">Filter Data by Division</label>
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

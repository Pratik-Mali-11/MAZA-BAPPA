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
                  <li class="active">
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
            <div class="page-header no-gutters has-tab">
              <h2 class="font-weight-normal">Edit Guidelines</h2>
              <ul class="nav nav-tabs">
                <!-- <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#tab-main"
                    >1. Main Popup</a
                  >
                </li> -->
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#tab-ammonium"
                    >Ammonium Powder Guidelines</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-slot"
                    >Slot Booking Guidelines</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-mandal"
                    >Ganesh Mandal Guidelines</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-ngo"
                    >Organization Guidelines</a
                  >
                </li>
              </ul>
            </div>
            <div class="container">
              <div class="tab-content m-t-15">
                <!-- <div class="tab-pane fade show active" id="tab-main">
                  <div class="col-md-6 mx-auto">
                    <div class="card">
                      <div class="card-header text-center">
                        <h4 class="card-title">Main Popup</h4>
                      </div>
                      <div class="card-body">
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label class="font-weight-semibold" for="title"
                                >Title :</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="home-title"
                                placeholder="Title"
                                value="<?= $data[0]->title?>"
                              />
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label
                                class="font-weight-semibold"
                                for="description"
                                >Description :</label
                              >
                              <textarea
                                class="form-control"
                                id="home-description"
                                placeholder="Description"
                                aria-label="With textarea"
                              ><?= $data[1]->description?></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <input
                                type="file"
                                class="custom-file-input"
                                id="customFile"
                              />
                              <label class="custom-file-label" for="customFile"
                                >Choose Slider Images</label
                              >
                            </div>
                          </div>
                          <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">
                              Add Content
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="tab-pane fade show active" id="tab-ammonium">
                  <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="card">
                        <div class="card-header text-center">
                          <h4 class="card-title">Ammonium Bicarbonate Guidelines</h4>
                        </div>
                        <div class="card-body">
                          <!-- <hr class="m-v-25"> -->
                          <form href="<?php echo base_url('DbCon/update_guidelines/'). $data[1]->id; ?>" method="post" novalidate="">
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label class="font-weight-semibold" for="Ammonium-title"
                                  >Title :</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="ammonium-title"
                                  placeholder="Title"
                                  value="<?= $data[1]->title?>"
                                  name="ammonium-title"
                                />
                              </div>
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="ammonium-description"
                                  aria-label="With textarea"
                                  name="ammonium-description"
                                ><?= $data[1]->description ?></textarea>
                              </div>
                            </div>
                            <div class="form-group text-center">
                              <button type="submit" class="btn btn-primary" name="submit">
                                Add Content
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-slot">
                  <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="card">
                        <div class="card-header text-center">
                          <h4 class="card-title">Book your Slot Popup</h4>
                        </div>
                        <div class="card-body">
                          <!-- <hr class="m-v-25"> -->
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label class="font-weight-semibold" for="title"
                                  >Title :</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="slotbook-title"
                                  placeholder="Title"
                                  value="<?= $data[2]->title?>"
                                />
                              </div>
                            </div>
                           
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="slotbook-description"
                                  placeholder="Description"
                                  aria-label="With textarea"
                                ><?= $data[2]->description?></textarea>
                              </div>
                            </div>
                            <div class="form-group text-center">
                              <button type="submit" class="btn btn-primary" href="<?= base_url('DbCon/update_guidelines/').$data[2]->id ?>">
                                Add Content
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-mandal">
                  <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="card">
                        <div class="card-header text-center">
                          <h4 class="card-title">Ganesh Mandal's Popup</h4>
                        </div>
                        <div class="card-body">
                          <!-- <hr class="m-v-25"> -->
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label class="font-weight-semibold" for="title"
                                  >Title :</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="ganeshmandal-title"
                                  placeholder="Title"
                                  value="<?= $data[3]->title?>"
                                />
                              </div>
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="ganeshmandal-description"
                                  placeholder="Description"
                                  aria-label="With textarea"
                                ><?= $data[3]->description?></textarea>
                              </div>
                            </div>
                            <div class="form-group text-center">
                              <button type="submit" class="btn btn-primary" href="<?= base_url('DbCon/update_guidelines/').$data[3]->id ?>">
                                Add Content
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-ngo">
                  <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="card">
                        <div class="card-header text-center">
                          <h4 class="card-title">Organization's Popup</h4>
                        </div>
                        <div class="card-body">
                          <!-- <hr class="m-v-25"> -->
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label class="font-weight-semibold" for="title"
                                  >Title :</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="org-title"
                                  placeholder="Title"
                                  value="<?= $data[4]->title?>"
                                />
                              </div>
                            </div>
                           
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="org-description"
                                  placeholder="Description"
                                  aria-label="With textarea"
                                ><?= $data[4]->description?></textarea>
                              </div>
                            </div>
                            <div class="form-group text-center">
                              <button type="submit" class="btn btn-primary" href="<?= base_url('DbCon/update_guidelines/').$data[4]->id ?>">
                                Add Content
                              </button>
                            </div>
                          </form>
                        </div>
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

        <!-- Quick View START -->
        <div class="modal modal-right fade quick-view" id="quick-view">
          <div class="modal-dialog">
            <div class="modal-content">
              <div
                class="modal-header justify-content-between align-items-center"
              >
                <h5 class="modal-title">Theme Config</h5>
              </div>
              <div class="modal-body scrollable">
                <div class="m-b-30">
                  <h5 class="m-b-0">Header Color</h5>
                  <p>Config header background color</p>
                  <div class="theme-configurator d-flex m-t-10">
                    <div class="radio">
                      <input
                        id="header-default"
                        name="header-theme"
                        type="radio"
                        checked
                        value="default"
                      />
                      <label for="header-default"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-primary"
                        name="header-theme"
                        type="radio"
                        value="primary"
                      />
                      <label for="header-primary"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-success"
                        name="header-theme"
                        type="radio"
                        value="success"
                      />
                      <label for="header-success"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-secondary"
                        name="header-theme"
                        type="radio"
                        value="secondary"
                      />
                      <label for="header-secondary"></label>
                    </div>
                    <div class="radio">
                      <input
                        id="header-danger"
                        name="header-theme"
                        type="radio"
                        value="danger"
                      />
                      <label for="header-danger"></label>
                    </div>
                  </div>
                </div>
                <hr />
                <div>
                  <h5 class="m-b-0">Side Nav Dark</h5>
                  <p>Change Side Nav to dark</p>
                  <div class="switch d-inline">
                    <input
                      type="checkbox"
                      name="side-nav-theme-toogle"
                      id="side-nav-theme-toogle"
                    />
                    <label for="side-nav-theme-toogle"></label>
                  </div>
                </div>
                <hr />
                <div>
                  <h5 class="m-b-0">Folded Menu</h5>
                  <p>Toggle Folded Menu</p>
                  <div class="switch d-inline">
                    <input
                      type="checkbox"
                      name="side-nav-fold-toogle"
                      id="side-nav-fold-toogle"
                    />
                    <label for="side-nav-fold-toogle"></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Quick View END -->
      </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>layout/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?= base_url() ?>layout/js/app.min.js"></script>
  </body>
</html>

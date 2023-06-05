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
              <li>
                <a
                  href="javascript:void(0);"
                  data-toggle="modal"
                  data-target="#search-drawer"
                >
                  <i class="anticon anticon-search"></i>
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
                  <li class="active">
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
            <div class="page-header no-gutters">
              <h2 class="font-weight-normal">Add Offline Ammonium Bicarbonate Data</h2>
            </div>
            <div class="container">
              <div class="tab-content m-t-15">
                <div class="tab-pane fade show active" id="tab-main">
                  <div class="col-md-6 mx-auto">
                    <div class="card">
                      <div class="card-body">
                        <!-- <hr class="m-v-25"> -->
                        <form>
                          <div class="form-row">
                          <div class="form-group col-md-12">
                            <label class="font-weight-semibold" for="inputState"
                                >Visarjan Date :</label
                              >
                            <select id="inputState" class="form-control">
                                <option selected>Select Visarjan Date</option>
                                <option value="1.5 Days - 23rd August 2021">1.5 Days - 23rd August 2021</option>
                                <option value="5 Days - 26rd August 2021">5 Days - 26rd August 2021</option>
                                <option value="Gauri Ganpati - 27rd August 2021">Gauri Ganpati - 27rd August 2021</option>
                                <option value="7 Days - 28rd August 2021">7 Days - 28rd August 2021</option>
                                <option value="Anant Chaturdashi - 1st September 2021">Anant Chaturdashi - 1st September 2021</option>
                            </select>
                          </div>
                          <div class="form-group col-md-12">
                            <label class="font-weight-semibold" for="inputState"
                                >Select Center :</label
                              >
                            <select id="inputState" class="form-control">
                                <option selected>Select Center Name</option>
                                <option value="1">Center 1</option>
                                <option value="2">Center 2</option>
                                <option value="3">Center 3</option>
                                <option value="4">Center 4</option>
                                <option value="5">Center 5</option>
                                <option value="6">Center 6</option>
                            </select>
                          </div>
                            <div class="form-group col-md-12">
                              <label class="font-weight-semibold" for="title"
                                >Total Ammonium Dictributed Count :</label
                              >
                              <input
                                type="number"
                                class="form-control"
                                id="count"
                                placeholder="Enter Total Ammonium Dictributed Count"
                              />
                            </div>
                          </div>
                          <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">
                              Add Data
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-ammonium">
                  <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="card">
                        <div class="card-header text-center">
                          <h4 class="card-title">Ammonium Bicarbonate Popup</h4>
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
                                  id="title"
                                  placeholder="Title"
                                />
                              </div>
                            </div>
                            <!-- <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-semibold" for="description">Description :</label>
                                                            <input type="text" class="form-control" id="description" placeholder="Description">
                                                        </div>
                                                    </div> -->
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="description"
                                  placeholder="Description"
                                  aria-label="With textarea"
                                ></textarea>
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
                                  id="title"
                                  placeholder="Title"
                                />
                              </div>
                            </div>
                            <!-- <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-semibold" for="description">Description :</label>
                                                            <input type="text" class="form-control" id="description" placeholder="Description">
                                                        </div>
                                                    </div> -->
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="description"
                                  placeholder="Description"
                                  aria-label="With textarea"
                                ></textarea>
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
                                  id="title"
                                  placeholder="Title"
                                />
                              </div>
                            </div>
                            <!-- <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-semibold" for="description">Description :</label>
                                                            <input type="text" class="form-control" id="description" placeholder="Description">
                                                        </div>
                                                    </div> -->
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="description"
                                  placeholder="Description"
                                  aria-label="With textarea"
                                ></textarea>
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
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-ngo">
                  <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="card">
                        <div class="card-header text-center">
                          <h4 class="card-title">NGO's Popup</h4>
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
                                  id="title"
                                  placeholder="Title"
                                />
                              </div>
                            </div>
                            <!-- <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label class="font-weight-semibold" for="description">Description :</label>
                                                            <input type="text" class="form-control" id="description" placeholder="Description">
                                                        </div>
                                                    </div> -->
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label
                                  class="font-weight-semibold"
                                  for="description"
                                  >Description :</label
                                >
                                <textarea
                                  class="form-control"
                                  id="description"
                                  placeholder="Description"
                                  aria-label="With textarea"
                                ></textarea>
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

    <!-- Core JS -->
    <script src="<?= base_url() ?>layout/js/app.min.js"></script>
  </body>
</html>

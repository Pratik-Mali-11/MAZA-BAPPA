<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ganesh Festival System &mdash; Invoice</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url() ?>layout/css/app.min.css" rel="stylesheet">

    <!-- HTML to PDF JS -->
    <script src="<?= base_url() ?>layout/js/convert-pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #printarea, #printarea * 
            {
                visibility: visible;
            }
            #printarea
            {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg d-flex" style="background-image: url('<?= base_url() ?>layout/images/ganesha-login-bg.jpg')">
            <div class="d-flex flex-column justify-content-center w-100">
                <div class="container d-flex h-100">
                    <div id="printarea" class="row mx-auto align-items-center w-100">
                        <div class="col-md-10 col-12 col-lg-10 m-h-auto">
                            <div class="card shadow-lg" id="invoice">
                                <div class="card-body">
                                <div class="p-h-10">
                                    <div class="row abh-filter-btnm-v-20 border-bottom">
                                        <div class="col-sm-4">
                                            <!-- <img class="img-fluid text-opacity m-t-5" width="100" src="<?= base_url() ?>layout/images/logo/logo.png" alt=""> -->
                                        </div>
                                        <div class="col-sm-8 text-right p-v-20">
                                            <button onclick="window.print()" class="btn btn-primary btn-sm m-r-5">Print</button>
                                            <button id="download-pdf" class="btn btn-primary btn-sm m-r-5">Export as PDF</button>
                                        </div>
                                    </div>
                                    <div class="m-t-15 lh-2">
                                        <div class="inline-block">
                                            <img style="height: 65px; width: 150px; margin-bottom: 10px;" class="img-fluid" src="<?= base_url() ?>layout/images/logo/nmclogo.png" alt="">
                                        </div>
                                        <div class="float-right">
                                            <h2>E-Receipt</h2>
                                        </div>
                                    </div>
                                    <div class="m-t-20 lh-2">
                                        <div class="col-12">
                                            <div class="col-sm-3" style="padding: 0px;">
                                                <div class="text-dark text-uppercase d-inline-block">
                                                    <span class="font-weight-semibold text-dark">E-Receipt No : </span>
                                                </div>
                                                <div class="float-right">#1668</div>
                                            </div>
                                            <div class="col-sm-3" style="padding: 0px;">
                                                <div class="text-dark text-uppercase d-inline-block">
                                                    <span class="font-weight-semibold text-dark">Date : </span>
                                                </div>
                                                <div class="float-right">25/8/2021</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-20">
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Booking ID.</th>
                                                        <th>Name</th>
                                                        <th>Visarjan Date</th>
                                                        <th>Slot Time</th>
                                                        <th>Venue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>#1234</th>
                                                        <td>Amay Patil</td>
                                                        <td>27th August 2021</td>
                                                        <td>09:00 AM to 09:30 AM</td>
                                                        <td>Trimurti Chowk</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row m-t-10 lh-2">
                                            <div class="col-sm-12">
                                                <div class="border-bottom p-v-20">
                                                    <p class="text-opacity"><b>Guidelines :</b></p>
                                                    <p class="text-opacity">&nbsp;&nbsp;&nbsp;1. Please Share the Booking ID with GROUND SECURITY STAFF ONLY.</p>
                                                    <p class="text-opacity">&nbsp;&nbsp;&nbsp;2. DO NOT FORGET to Download/Print your Ganesh Visarjan Booking E-Receipt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-v-20">
                                            <div class="col-sm-6">
                                                <!-- <img class="img-fluid text-opacity m-t-4" width="100" src="<?= base_url() ?>layout/images/logo/nmclogo.png" alt=""> -->
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <small><span class="font-weight-semibold text-dark">Phone:</span> (+91) 123456-7890</small>
                                                <br>
                                                <small>support@visarjan.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="m-b-0 text-light">
                        © 2021 Designed by E-Connect Innovative Solutions All rights reserved.
                    </span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-light text-link" href="">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-light text-link" href="">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>layout/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?= base_url() ?>layout/js/app.min.js"></script>

</body>

</html>
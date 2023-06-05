<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ganesh Festival System &mdash; Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>layout/images/logo/nmc-favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url() ?>layout/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('<?= base_url() ?>layout/images/ganesha-login-bg.jpg')">
            <div class="d-flex flex-column justify-content-center w-100">
                <div class="container d-flex h-100">
                    <div class="row mx-auto align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img style="height: 55px; width: 130px;" class="img-fluid" alt="" src="<?= base_url() ?>layout/images/logo/nmclogo.png">
                                        <h2 class="m-b-0">Log In</h2>
                                    </div>
                                    <form action="<?php echo base_url() . 'login' ?>" method="post">
<?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-danger">
                  <?php echo $this->session->flashdata('message') ?>
                </div>
              <?php } ?>
                                    <?php echo form_open('login', array('id' => 'loginForm')) ?>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Email:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                            <?php echo form_error('userName', '<br><div class="error">', '</div>') ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>
                                        <a class="float-right font-size-13 text-muted" href="">Forget Password?</a>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            <?php echo form_error('password', '<br><div class="error">', '</div>') ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <button class="btn btn-primary" type="submit" name="submit" value="Login">Log In</button>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </form> 
                                
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
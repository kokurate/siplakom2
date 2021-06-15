<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIPLAKOM Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!-- <link rel="icon" type="image/png" href="<?= base_url(); ?>/login/images/icons/favicon.ico" /> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/login/css/main.css">
    <!--===============================================================================================-->

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url(); ?>/login/images/1.jpg');">
            <!-- <img src="<?= base_url(); ?>/login/images/bg-01.jpg" style="background-image: ;"> -->
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    SIPLAKOM Login
                </span>

                <div class="text-center mb-2">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                </div>


                <form action="<?= route_to('auth/login') ?>" method="post" class="login100-form validate-form p-b-33 p-t-5">
                    <?= csrf_field() ?>

                    <?php if ($config->validFields === ['email']) : ?>
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100   <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="email" name="login" placeholder="<?= lang('Auth.email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>

                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>
                    <?php else : ?>
                        <div class="wrap-input100 validate-input">
                            <input type="text" class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>
                    <?php endif; ?>


                    <!-- <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div> -->


                    <div class="wrap-input100 validate-input" data-validate="Enter password">

                        <input type="password" name="password" class="input100  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>


                    <br>




                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn"><?= lang('Auth.loginAction') ?></button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/login/js/main.js"></script>

</body>

</html>
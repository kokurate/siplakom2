<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $tittle; ?></title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url(); ?>/register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/register/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <!-- <img src="<?= base_url(); ?>/register/images/puskom2.jpg" alt="" style="background-image: image(<?= base_url(); ?>/register/images/puskom2.jpg);"> -->


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <!-- <h2 class="form-title">Sign up</h2> -->
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Ulangi Password" />
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image text-center">
                        <h2 class="underline">Registrasi Akun Petugas</h2>
                        <hr>
                        <h2>SIPLAKOM</h2>
                        <p><strong>Sistem Pengaduan Layanan di Pusat Komputer</strong></p>
                        <strong>
                            <p><i>Universitas Negeri Manado</i></p>
                        </strong>
                        <!-- <figure><img src="<?= base_url(); ?>/register/images/signup-image.jpg" alt="sing up image"></figure> -->

                        <!-- <figure><img src="<?= base_url(); ?>/register/images/puskom2.jpg" alt="sing up image"></figure> -->
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="<?= base_url(); ?>/register/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
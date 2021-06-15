<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $tittle; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="base_url(); ?>/onepage/assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="?= base_url(); ?>/onepage/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/onepage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/onepage/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/onepage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/onepage/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/onepage/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/onepage/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/onepage/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/onepage/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- Link Template Landing Page  -->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>/landingpage/css/styles.css" rel="stylesheet" />
    <!-- Qta Pe Bootstrap -->
    <link href="<?= base_url() ?>/landingpage/css/my.css" rel="stylesheet" />

    <!-- Nootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<!-- My CSS -->
<link rel="stylesheet" href="/css/style.css">

<!-- CSS Table -->
<link rel="stylesheet" href="/css/styletable.css">

<body>

    <!-- ======= Navbar ======= -->


    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a class="js-scroll-trigger" href="#">Login</a></li>
            <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#hero">Home</a></li>
            <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#about">Tentang</a></li>
            <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#services">Pelayanan</a></li>
            <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="#faq">FAQ</a></li>

        </ul>
    </nav>



    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">

                    <h1>SIPLAKOM</h1>
                    <h2 style="color: #929695;">Sistem Pengaduan Layanan di UPT Pusat Komputer</h2>
                    <h2 style="font-style: italic; color: #929695;">Universitas Negeri Manado</h2>
                    <br>
                    <a href="/user/cari" class="btn btn-outline-primary  btn-lg btn-block">Cari Pengaduan</a>
                    <a href="/user/create" class="btn btn-outline-danger  btn-lg btn-block">Buat Pengaduan</a>
                    <br>
                    <a href="#about" class="btn btn-outline-light  btn-lg cta-btn scrollto js-scroll-trigger mr-1 mt-1">Tentang SIPLAKOM</a>
                    <a href="#services" class="btn btn-outline-light btn-lg cta-btn scrollto js-scroll-trigger mt-1">Alur Pengaduan</a>

                </div>
            </div>

        </div>
    </section>
    <!-- End Hero -->

    <br><br><br>
    <!-- Beking HR
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>Sistem Pengaduan Layanan</h3>
                <div class="text-center">
                    <a href="#about" class="cta-btn scrollto js-scroll-trigger">Tentang SIPLAKOM</a>
                </div>

                <a href="#about" class="cta-btn scrollto js-scroll-trigger">Cari Pengaduan</a>
                <a href="/user/create" class="cta-btn scrollto js-scroll-trigger">Buat Pengaduan</a>
            </div>
        </div>
    </section> -->
    <!-- End Cta Section -->
    <br>


    <!-- Pengaduan Terbaru -->
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <!-- Table -->
        <div class="row justify-content-center">

            <h1 class="text-center" style="color: #124265;">PENGADUAN TERBARU</h1>

            <div class="table-responsive">

                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th scope="col" style="text-align: justify; margin:auto;">
                                <h5><strong>#</strong></h5>
                            </th>
                            <!-- <th scope="col">Foto</th> -->
                            <!-- <th scope="col" style="text-align: justify; margin:auto;">
                                <h5><strong>Judul Pengaduan</strong></h5>
                            </th> -->
                            <th scope="col" style="text-align: center; margin:auto;">
                                <h5><strong>
                                        Isi Pengaduan
                                    </strong></h5>
                            </th>
                            <th scope="col" style="text-align: justify; margin:auto;">
                                <h5><strong>Tujuan</strong></h5>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pengaduan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <!-- <td scope="col" style="text-align: justify; margin:auto;"><?= $p['judul_laporan']; ?></td> -->

                                <td scope="col" style="text-align: center; margin:auto;"><?= $p['isi_laporan']; ?></td>
                                <td scope="col" style="text-align:center; margin:auto;">
                                    <span class="badge badge-info"><?= $p['tujuan_pengaduan']; ?></span>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <br>



    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1 style="color: #124265;">DAFTAR PENGADUAN</h1>

                <!-- Total Pengaduan -->
                <section id="counts" class="counts section-bg">
                    <div class="row justify-content-end">
                        <div class="count-box">
                            <div class="text-center">

                                <span data-toggle="counter-up" style="color: black; font-size:90px;"><?= $all->getNumRows(); ?></span>
                                <br>
                                <p style="font-size: 32px;">Total Pengaduan</p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row justify-content-end">


                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up" style="color: black;"><?= $masuk->getNumRows(); ?></span>
                        <p>Pengaduan Masuk</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up" style="color: blue;"><?= $proses->getNumRows(); ?></span>
                        <p>Pengaduan Diproses</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up" style="color: green;"><?= $selesai->getNumRows(); ?></span>
                        <p>Pengaduan Selesai</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up" style="color: red;"><?= $tolak->getNumRows(); ?></span>
                        <p>Pengaduan Ditolak</p>
                    </div>
                </div>


            </div>
        </div>
    </section><!-- End Counts Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h1>Apa Itu SIPLAKOM</h1>
                    <p>Sistem Pengaduan Layanan di UPT Pusat Komputer </p>
                    <p><i>Universitas Negeri Manado</i></p>
                </div>

                <!-- Beking grid float left right -->
                <!-- <div class="row content">
                    <div class="col-lg-6">
                        <p>
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div> -->
                <div class="text-center">

                    <h5>
                        <strong>SIPLAKOM</strong> adalah Sistem Pengaduan Layanan di UPT Pusat Komputer, Universitas Negeri Manado.

                        SIPLAKOM ini dibuat untuk menampung pengaduan layanan kepada UPT PUSKOM.
                    </h5>
                    <h5>Diharapkan dengan sistem ini. Pihak-pihak yang mempunyai pengaduan terhadap UPT Pusat Komputer dapat lebih mudah untuk melaporkan pengaduannya. Untuk membuat pengaduan bisa kita akses kapan saja dan dimana saja, selama kita masih terkoneksi dengan internet</h5>
                    <H5>Saat ini pengaduan layanan yang tersedia ada 5, yaitu :</H5>

                    <div class="text-center">
                        <h5>
                            <b><i class="ri-check-double-line"></i> Jaringan</li></b>
                        </h5>
                        <h5>
                            <b><i class="ri-check-double-line"></i> Server</li></b>
                        </h5>
                        <h5>
                            <b><i class="ri-check-double-line"></i> Sistem Informasi</li></b>
                        </h5>
                        <h5>
                            <b><i class="ri-check-double-line"></i> Website UNIMA</li></b>
                        </h5>
                        <h5>
                            <b><i class="ri-check-double-line"></i> Learning Management System </li></b>
                        </h5>
                    </div>



                </div>
        </section><!-- End About Section -->




        <!-- ======= Services Section ======= -->
        <section id="services" class="content-section text-white text-center" style="background-color: #010F24F1;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="" style="color: red;">Alur Pengaduan</h2>
                    <h4>Pelayanan</h4>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-plus-square"></i></span>
                        <h4><strong>1. Buat Pengaduan</strong></h4>
                        <p>Silahkan klik menu Buat Pengaduan di halaman paling atas</p>

                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-clipboard-list"></i></span>
                        <h4><strong>2. Lengkapi Form</strong></h4>
                        <p>Isi form sesuai tempat yang sudah disediakan dengan data yang benar</p>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-paper-plane"></i></span>
                        <h4><strong>3. Kirim Pengaduan</strong></h4>
                        <p>Setelah selesai melengkapi form, kirim pengaduan, supaya bisa dicek dan ditanggapi oleh petugas</p>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-envelope"></i></span>
                        <h4><strong>4. Cek Email</strong></h4>
                        <p>Setelah selesai mengirim data, harap cek email yang diinputkan didalam form untuk mengambil kode pengaduan. Untuk digunakan untuk mengecek status pengaduan.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="200">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-clock"></i></span>
                        <h4><strong>5. Tunggu Konfirmasi</strong></h4>
                        <p>Tunggu tanggapan dari petugas. Harap untuk selalu cek email anda. Karena pemberitahuan tentang pengaduan yang anda ajukan akan disampaikan lewat email</p>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-search"></i></span>
                        <h4><strong>6. Cari Pengaduan</strong></h4>
                        <p>Setelah mendapatkan notifikasi dari email. Cari pengaduan anda dengan menggunakan kode pengaduan anda sebelumnya untuk mengecek detail pengaduan.</p>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Sevices Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <!-- <p>Testing</p> -->
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Apa itu SIPLAKOM ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                                <p>
                                    Seperti yang sudah dijelaskan diatas, SIPLAKOM adalah Sistem Pengaduan Layanan di UPT Pusat Komputer, Universitas Negeri Manado.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Bagaimana Proses Pembuatan Pengaduan ? > <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                                <p>Seperti yang sudah dijelaskan di bagian Alur Pengaduan, Silahkan baca dan ikuti prosedur yang ada untuk membuat pengaduan
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Apakah saya bisa mengubah pengaduan yang saya kirimkan ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                                <p>
                                    Tidak. Laporan yang sudah kalian kirimkan tidak bisa diubah lagi, maka dari itu kalian harus teliti dalam mengisi form
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Bagaimana jika email yang diinputkan sudah tidak aktif ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                                <p>
                                    Anda diharuskan mengisi email yang masih aktif, karena kode pengaduan dan informasi-informasi terkait pengaduan anda akan dikirimkan melalui email

                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Apakah pengaduan yang diajukan akan selalu mendapatkan respon ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                                <p>
                                    Tentu Saja. Pasti akan selalu mendapatkan respon dari petugas
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">Berapa lama respon atas pengaduan yang diajukan ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                                <p>
                                    Kecepatan respon tergantung dari banyaknya pengaduan yang masuk. Jika pengaduan sudah direspon oleh petugas, maka akan ada di notifikasi email yang kalian tambahkan pada saat membuat pengaduan. Maka dari itu mohon untuk mengisi email yang masih aktif
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="">Contact</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>



                <div class="" style="text-align:center">

                    <div class="">
                        <div class="info">
                            <div class="address ">

                                <h4> <i class="fas fa-location-arrow "></i><br>
                                    Alamat :</h4>
                                <p style="font-size: 20px;">Jln. Kampus Unima, Kelurahan Tonsaru, Kecamatan Tondano Selatan</p>
                            </div>

                            <hr class=" col-4">

                            <div class="email ">

                                <!-- <i class="icofont-envelope "></i> -->
                                <h4> <i class="fas fa-envelope "></i><br>
                                    Email:</h4>
                                <p style="font-size: 20px;">puskom@unima.ac.id</p>
                            </div>

                            <hr class=" col-4">

                            <div class="phone ">
                                <!-- <i class="icofont-phone "></i> -->
                                <h4><i class="fas fa-history "></i><br>
                                    Jam Kerja:</h4>
                                <p style="font-size: 20px;">Senin-Jumat</p>
                                <p style="font-size: 20px;">8.30 - 18.30 WITA</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>SIPLAKOM</h3>
                        <p>
                            Jln. Kampus Unima<br>
                            Kelurahan Tonsaru, Kecamatan <br>
                            Tondano Selatan <br><br>
                            <!-- <strong>Phone:</strong> 08<br> -->
                            <strong>Email:</strong> puskom@unima.ac.id<br>
                        </p>
                    </div>


                </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/onepage/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/onepage/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/onepage/assets/js/main.js"></script>


    <!-- =========================================================================== -->
    <!-- Link Template Landing Page -->
    <!-- Scroll to Top Button-->
    <!-- <a class="scroll-to-top rounded js-scroll-trigger" href="#"><i class="fas fa-angle-up"></i></a> -->
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <!-- Custom scripts for this template-->
    <script src="<?= base_url() ?>/landingpage/js/scripts.js"></script>

    <!-- Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
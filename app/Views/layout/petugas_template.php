<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $tittle; ?></title>
    <link href="<?= base_url(); ?>/petugaspage/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <!-- SB Admin 2 CSS -->
    <!-- <link href="<?= base_url(); ?>/petugaspage/css/sb-admin-2.css" rel="stylesheet" /> -->

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap 4 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Export CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/">SIPLAKOM</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav" class="">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Petugas</div>
                        <a class="nav-link" href="/petugas">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Dashboard
                        </a>

                        <!-- Menu Lama -->
                        <!-- Pengaduan Menu -->
                        <!-- <div class="sb-sidenav-menu-heading">Pengaduan</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Pengaduan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/petugas/proses">Pengaduan Proses</a>
                                <a class="nav-link" href="/petugas/tolak">Pengaduan Ditolak</a>
                                <a class="nav-link" href="/petugas/selesai">Pengaduan Selesai</a>
                            </nav>
                        </div> -->

                        <!-- COBA -->
                        <div class="sb-sidenav-menu-heading">Daftar Pengaduan</div>

                        <nav class="sb-sidenav-menu-nested nav">
                            <div class="sb-nav-link-icon">
                                <a class="nav-link" href="/petugas/masuk">
                                    <i class="fas fa-sign-in-alt mr-2"></i>
                                    Masuk
                                </a>
                            </div>
                        </nav>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                            Proses
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                <!-- Bamaso kadalam 2 -->
                                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Proses
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="/petugas/jaringan"> Jaringan</a>
                                        <a class="nav-link" href="/petugas/server">Server</a>
                                        <a class="nav-link" href="/petugas/sistem_informasi">Sistem Informasi</a>
                                        <a class="nav-link" href="/petugas/website_unima">Website UNIMA</a>
                                        <a class="nav-link" href="/petugas/lms">LMS</a>
                                    </nav>
                                    <hr style="background-color: white;">
                                </div> -->

                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/petugas/jaringan"> Jaringan</a>
                                    <a class="nav-link" href="/petugas/server">Server</a>
                                    <a class="nav-link" href="/petugas/sistem_informasi">Sistem Informasi</a>
                                    <a class="nav-link" href="/petugas/website_unima">Website UNIMA</a>
                                    <a class="nav-link" href="/petugas/lms">LMS</a>
                                </nav>



                            </nav>
                        </div>

                        <nav class="sb-sidenav-menu-nested nav">

                            <a class="nav-link" href="/petugas/tolak"> <i class="fas fa-times-circle mr-2"></i>
                                Tolak</a>
                            <a class="nav-link" href="/petugas/selesai"><i class="fas fa-check-circle mr-2"></i>
                                Selesai</a>
                        </nav>




                        <!-- Menu Spesifik
                        <div class="sb-sidenav-menu-heading">Spesifik Menu</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Proses
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/petugas/proses">Jaringan</a>
                                <a class="nav-link" href="/petugas/selesai">Server</a>
                                <a class="nav-link" href="/petugas/tolak">Website UNIMA</a>
                                <a class="nav-link" href="/petugas/tolak">Sistem Informasi</a>
                                <a class="nav-link" href="/petugas/tolak">LMS</a>
                            </nav>
                        </div> -->

                        <div class="sb-sidenav-menu-heading">Keluar</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-external-link-square-alt"></i></div>
                            Log out
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>

        <?= $this->renderSection('content'); ?>



        <!-- Footer -->
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; SIPLAKOM 2021</div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/petugaspage/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/petugaspage/assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/petugaspage/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/petugaspage/assets/demo/datatables-demo.js"></script>

    <!-- Image Preview JS -->
    <script>
        // foto 1 preview
        function fotoPetugas() {

            const foto_petugas = document.querySelector('#foto_petugas');
            const foto_petugasLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.foto_petugas-preview');

            // for mo ganti url
            // ambil tulisan label
            foto_petugasLabel.textContent = foto_petugas.files[0].name;

            // For mo ganti preview
            // ambil file yang diupload
            const fileFoto_petugas = new FileReader();
            fileFoto_petugas.readAsDataURL(foto_petugas.files[0]);

            fileFoto_petugas.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        // Lampiran foto 2 preview
        function fotoPetugas2() {

            const foto_petugas2 = document.querySelector('#foto_petugas2');
            const foto_petugas2Label = document.querySelector('.mt-1');
            const imgPreview = document.querySelector('.foto_petugas2-preview');

            // for mo ganti url
            // ambil tulisan label
            foto_petugas2Label.textContent = foto_petugas2.files[0].name;

            // For mo ganti preview
            // ambil file yang diupload
            const fileFoto_petugas2 = new FileReader();
            fileFoto_petugas2.readAsDataURL(foto_petugas2.files[0]);

            fileFoto_petugas2.onload = function(e) {
                imgPreview.src = e.target.result;
            }


            // Lampiran foto 3 preview
            function fotoPetugas3() {

                const foto_petugas3 = document.querySelector('#foto_petugas3');
                const foto_petugas3Label = document.querySelector('.mb-1');
                const imgPreview = document.querySelector('.foto_petugas3-preview');

                // for mo ganti url
                // ambil tulisan label
                foto_petugas3Label.textContent = foto_petugas3.files[0].name;

                // For mo ganti preview
                // ambil file yang diupload
                const fileFoto_petugas3 = new FileReader();
                fileFoto_petugas3.readAsDataURL(foto_petugas3.files[0]);

                fileFoto_petugas3.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        }
    </script>
</body>

</html>
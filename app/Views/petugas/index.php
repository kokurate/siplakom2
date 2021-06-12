<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>

        <h1 class="mt-4 ml-4 text-center">Dashboard</h1>

        <div class="container-fluid mt-4">
            <!-- <h1 class="mt-4">Dashboard</h1> -->
            <!-- Jumbotron -->
            <!-- <div class="mt-4 jumbotron jumbotron-fluid bg-dark">
                <div class="container">
                    <h1 class="display-4" style="color:white;">Selamat Datang di Dashboard Petugas </h1>
                    <p class="lead" style="color: aqua;">Petugas Memiliki akses untuk mengubah status pengaduan.</p>
                </div>
            </div> -->
            <!-- Set Flash Data -->

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <!-- Count -->

            <hr class="style-two-2">
            <br>
            <!-- awal row -->
            <div class="row">
                <!-- Semua -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body text-center">
                            <h4><?= $semua->getNumRows(); ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="/petugas/semua">
                                <h6>Semua Pengaduan</h6>
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>


                <!-- Masuk -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4 text-center">
                        <div class="card-body">
                            <h4><?= $masuk->getNumRows(); ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="/petugas/masuk">
                                <h6>Pengaduan Masuk</h6>
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Tolak -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4 text-center">
                        <div class="card-body">
                            <h4><?= $tolak->getNumRows(); ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="/petugas/tolak">
                                <h6>Pengaduan Ditolak</h6>
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Selesai -->
                <div class="col-xl-3 col-md-6 text-center">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <h4><?= $selesai->getNumRows(); ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="/pengaduan/selesai">
                                <h6>Pengaduan Selesai</h6>
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Akhir row -->

            <br>

            <!-- Jaringan -->
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="/petugas/jaringan">Proses <br>Jaringan UNIMA</a></div>
                                    <div class="mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $jaringan->getNumRows(); ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-wifi fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Server -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="/petugas/server">Proses <br> Server UNIMA </a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $server->getNumRows(); ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-server fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sistem Informasi -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="/petugas/sistem_informasi">Proses <br> Sistem Informasi</a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $sistem_informasi->getNumRows(); ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-database fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Web UNIMA -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="/petugas/website_unima">Proses <br> Website UNIMA</a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $website_unima->getNumRows(); ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-archive fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LMS -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="/petugas/lms">Proses <br> LMS UNIMA</a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <h3><?= $lms->getNumRows(); ?></h3>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card biasa
            
                <div class="col-md-2 col-md-2">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-md-2">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-md-2">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div> -->





                <?= $this->endSection(); ?>
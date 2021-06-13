<?= $this->extend('layout/admin_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>

        <h1 class="mt-4 ml-4 text-center">Dashboard</h1>
        <div class="container-fluid mt-4">

            <hr class="style-two-2">

            <!-- awal row -->
            <div class="row">
                <!-- Semua -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body text-center">
                            <h4><?= $semua->getNumRows(); ?></h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <p class="small text-white stretched-link" href="/petugas/semua">
                            <h6>Semua Pengaduan</h6>
                            </p>
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
                            <p class="small text-white stretched-link" href="/petugas/masuk">
                            <h6>Pengaduan Masuk</h6>
                            </p>
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
                            <p class="small text-white stretched-link" href="/petugas/tolak">
                            <h6>Pengaduan Ditolak</h6>
                            </p>
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
                            <p class="small text-white stretched-link" href="/pengaduan/selesai">
                            <h6>Pengaduan Selesai</h6>
                            </p>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Akhir row -->





            <?= $this->endSection(); ?>
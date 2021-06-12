<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-4">
            <a href="/petugas/" class="btn btn-outline-primary mb-2" style="width: 75px;"><i class="fas fa-arrow-left" style="width: 50px;"></i></a>

            <div class="card mb-4">
                <div class="card-header " style="font-size: 25px;">
                    <!-- <i class="fas fa-table mr-1"></i> -->
                    Daftar Pengaduan Masuk
                </div>
                <div class="card-body">
                    <!-- Ini dpe class asli -->
                    <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
                    <div class="table-responsive">

                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Judul Laporan</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tujuan Pengaduan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pengaduan as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td scope="col"><img src="/img/<?= $p['foto']; ?>" alt="" class="foto"></td>
                                        <td scope="col"><?= $p['judul_laporan']; ?></td>
                                        <td scope="col"><?= $p['nama']; ?></td>
                                        <td scope="col">
                                            <span class="badge badge-secondary"><?= $p['status']; ?></span>
                                        </td>
                                        <td scope="col">
                                            <span class="badge badge-secondary"><?= $p['tujuan_pengaduan']; ?></span>
                                        </td>

                                        <!-- Detail -->
                                        <td scope="col">
                                            <div class="d-inline">
                                                <a href="/petugas/<?= $p['id']; ?>" class=" btn btn-success mb-1"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- </div> -->
                </div>
            </div>


            <?= $this->endSection(); ?>
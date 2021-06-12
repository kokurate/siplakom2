<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- <h1 class="mt-4">Dashboard</h1> -->
            <h2 class="mt-3">Detail Pengaduan</h2>

            <!-- Set Flash Data nda dipake -->
            <?php if (session()->getFlashdata('pesan') == 4) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <?php if ($pengaduan['status'] == 'Pengaduan Sedang Diverifikasi') :  ?>
                <p class="card-text btn btn-secondary" style="font-style:italic">Status : <b><?= $pengaduan['status'] ?></b></p>
            <?php elseif ($pengaduan['status'] == 'Pengaduan Ditolak') : ?>
                <p class="card-text btn btn-danger" style="font-style:italic">Status : <b><?= $pengaduan['status'] ?></b></p>
            <?php elseif ($pengaduan['status'] == 'Pengaduan Sedang Diproses') : ?>
                <p class="card-text btn btn-primary" style="font-style:italic">Status : <b><?= $pengaduan['status'] ?></b></p>
            <?php elseif ($pengaduan['status'] == 'Pengaduan Selesai') : ?>
                <p class="card-text btn btn-success" style="font-style:italic">Status : <b><?= $pengaduan['status'] ?></b></p>
            <?php endif; ?>


            <p class="card-text btn btn-warning">Tujuan Pengaduan : <b><?= $pengaduan['tujuan_pengaduan'] ?></b></p>
            <br>
            <a href="/petugas/" class="btn btn-outline-primary mb-2" style="width: 75px;"><i class="fas fa-arrow-left" style="width: 50px;"></i></a>
            <br>
            <!-- Pange My CSS -->


            <!-- Beking pengkondisian -->
            <!-- Pengaduan Sedang Diverifikasi -->
            <?php if ($pengaduan['status'] == 'Pengaduan Sedang Diverifikasi') :  ?>
                <hr class="style-two">
                <div class="mb-2 text-center">
                    <a href="/tujuan/edit/<?= $pengaduan['id']; ?>" class="btn btn-primary">Ubah Tujuan Pengaduan</a>
                    <a href="/petugas/edit/<?= $pengaduan['id']; ?>" class="btn btn-warning">Proses Pengaduan</a>
                    <a href="/kirim_email/<?= $pengaduan['id']; ?>" class="btn btn-success">Kirim Email Ke Petugas</a>
                </div>
                <hr class="style-two">

                <!-- Pengaduan Sedang Diproses -->
            <?php elseif ($pengaduan['status'] == 'Pengaduan Sedang Diproses') : ?>
                <hr class="style-two">
                <div class="mb-2 text-center">
                    <a href="/petugas/edit/<?= $pengaduan['id']; ?>" class="btn btn-warning">Proses Pengaduan</a>
                </div>
                <hr class="style-two">
                <!-- Pengaduan Ditolak -->
            <?php elseif ($pengaduan['status'] == 'Pengaduan Ditolak') : ?>

                <!-- Pengaduan Selesai -->
            <?php elseif ($pengaduan['status'] == 'Pengaduan Selesai') : ?>

            <?php endif; ?>


        </div>

        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?= $pengaduan['judul_laporan']; ?></h3>
                        <p class="card-text" style="font-size: 18px;"><?= $pengaduan['isi_laporan']; ?></p>
                    </div>

                    <h3 style="text-align: center;">Lampiran Foto</h3>
                    <div class="text-center col mb-2" style="margin: auto;">
                        <img src="/img/<?= $pengaduan['foto']; ?>" class="rounded" style="width: 250px;" alt="..." onerror="this.style.display='none'">
                        <br>
                        <img src="/img/<?= $pengaduan['foto2']; ?>" class="rounded mt-3" style="width: 250px;" alt="..." onerror="this.style.display='none'">
                        <br>
                        <img src="/img/<?= $pengaduan['foto3']; ?>" class="rouded mt-3" style=" width: 250px;" alt="..." onerror="this.style.display='none'">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pengaduan Dibuat pada : <b><?= $pengaduan['created_at']; ?></b></li>
                    </ul>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">

                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title">Data Pelapor</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4>Kode Pengaduan : <br>
                                    <h3><b><?= $pengaduan['kode']; ?></b></h3>
                                </h4>
                            </li>
                            <li class="list-group-item">Nama : <b><?= $pengaduan['nama']; ?></b></li>
                            <li class="list-group-item">No HP : <b><?= $pengaduan['no_hp']; ?></b></li>
                            <li class="list-group-item">Email : <b><?= $pengaduan['email']; ?></b></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title">Keterangan Petugas</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $pengaduan['keterangan']; ?></li>

                        </ul>
                        <div class="text-center col mb-2" style="margin: auto;">
                            <h5>Lampiran Foto</h5>

                            <img src="/img/<?= $pengaduan['foto_petugas']; ?>" class="rounded" style="width: 250px;" alt="..." onerror="this.style.display='none'">
                            <br>
                            <img src="/img/<?= $pengaduan['foto_petugas2']; ?>" class="rounded mt-3" style="width: 250px;" alt="..." onerror="this.style.display='none'">
                            <br>
                            <!-- <img src="/img/<?= $pengaduan['foto3']; ?>" class="rouded mt-3" style=" width: 250px;" alt="..." onerror="this.style.display='none'"> -->
                        </div>
                    </div>

                    <li class="list-group-item">Pengaduan Diupdate pada : <b><?= $pengaduan['updated_at']; ?></b></li>
                </div>
            </div>
            <div class="mt-3 mb-2">

                <!-- Pengkondisian -->
                <!-- Pengaduan Sedang Diverifikasi -->
                <!-- <?php if ($pengaduan['status'] == 'Pengaduan Sedang Diverifikasi') :  ?>

                        <a href="/tujuan/edit/<?= $pengaduan['id']; ?>" class="btn btn-primary">Ubah Tujuan Pengaduan</a>
                        <a href="/petugas/edit/<?= $pengaduan['id']; ?>" class="btn btn-warning">Proses Pengaduan</a>
                </div>
                <a href="/kirim_email/<?= $pengaduan['id']; ?>" class="btn btn-success">Kirim Email Ke Petugas</a>

                Pengaduan Sedang Diproses
            <?php elseif ($pengaduan['status'] == 'Pengaduan Sedang Diproses') : ?>
                <a href="/petugas/edit/<?= $pengaduan['id']; ?>" class="btn btn-warning">Proses Pengaduan</a>

                <!-- Pengaduan Ditolak -->
            <?php elseif ($pengaduan['status'] == 'Pengaduan Ditolak') : ?>

                <!-- Pengaduan Selesai -->
            <?php elseif ($pengaduan['status'] == 'Pengaduan Selesai') : ?>

            <?php endif; ?>


            </div>


        </div>



        <?= $this->endSection(); ?>
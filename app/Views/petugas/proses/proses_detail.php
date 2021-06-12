<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- <h1 class="mt-4">Dashboard</h1> -->
            <h2 class="mt-2">Detail Pengaduan</h2>
            <p class="card-text btn btn-outline-primary">Status : <?= $pengaduan['status'] ?></p>

            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?= $pengaduan['judul_laporan']; ?></h3>
                            <p class="card-text" style="font-size: 18px;"><?= $pengaduan['isi_laporan']; ?></p>
                        </div>

                        <h3 style="text-align: center;">Lampiran Foto</h3>
                        <div class="col mb-2" style="margin: auto;">
                            <img src="/img/<?= $pengaduan['foto']; ?>" class="card-img-top" alt="..." width="200px;">
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
                                <li class="list-group-item">Nama : <b><?= $pengaduan['nama']; ?></b></li>
                                <li class="list-group-item">No Induk : <b><?= $pengaduan['noinduk']; ?></b></li>
                                <li class="list-group-item">Email : <b><?= $pengaduan['email']; ?></b></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="card-header">
                                <h2 class="card-title">Keterangan Petugas</h2>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?= $pengaduan['keterangan']; ?></li>
                                <li class="list-group-item">Pengaduan Diupdate pada : <b><?= $pengaduan['updated_at']; ?></b></li>

                            </ul>
                        </div>
                    </div>


                    <br>
                    <a href="/petugas/proses_edit/<?= $pengaduan['id']; ?>" class="btn btn-warning">Proses Pengaduan</a>
                    <a href="/petugas/proses" class="btn btn-primary">Kembali</a>
                </div>


            </div>



            <?= $this->endSection(); ?>
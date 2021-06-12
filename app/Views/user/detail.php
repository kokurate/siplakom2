<!-- Layout itu nama folder view -->
<!-- user_template itu nama file php -->
<?= $this->extend('layout/user_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- <h1 class="mt-4">Dashboard</h1> -->
            <h1 class="mt-3">Detail Pengaduan</h1>
            <p class="card-text btn btn btn-outline-primary">Status : <?= $pengaduan['status']; ?></p>

            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h5 class="card-title"><?= $pengaduan['judul_laporan']; ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?= $pengaduan['isi_laporan']; ?></li>


                            </ul>
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
                                <h2 class="card-title">Keterangan Petugas</h2>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b><?= $pengaduan['keterangan']; ?></b></li>
                                <li class="list-group-item">Pengaduan Diupdate pada : <b><?= $pengaduan['updated_at']; ?></b></li>

                            </ul>
                        </div>
                    </div>
                    <br>
                    <a href="/user" class="btn btn-primary">Kembali</a>
                </div>


            </div>
            <?= $this->endSection(); ?>
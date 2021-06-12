<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- <h1 class="mt-4">Dashboard</h1> -->
            <h1 class="mt-3 mb-3">Update Pengaduan</h1>



            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">


                        <div class="card-body">

                            <ul class="list-group list-group-flush">
                                <div class="btn ">
                                    <li class="list-group-item">
                                        <p class="card-text btn btn-warning btn btn-outline-secondary">Status : <?= $pengaduan['status'] = $pengaduan['status']; ?></p>
                                    </li>
                                </div>


                                <h3 class="mb-2" style="text-align: center;">Pilih Status Pengaduan</h3>



                                <!-- Update pake form -->
                                <form action="/petugas/update/<?= $pengaduan['id']; ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>

                                    <!-- Beking input hidden value yang nda mo rubah -->
                                    <input type="hidden" name="nama" value="<?= $pengaduan['nama']; ?>">
                                    <input type="hidden" name="noinduk" value="<?= $pengaduan['noinduk']; ?>">
                                    <input type="hidden" name="email" value="<?= $pengaduan['email']; ?>">
                                    <input type="hidden" name="judul_laporan" value="<?= $pengaduan['judul_laporan']; ?>">
                                    <input type="hidden" name="isi_laporan" value="<?= $pengaduan['isi_laporan']; ?>">
                                    <input type="hidden" name="foto" value="<?= $pengaduan['foto']; ?>">
                                    <input type="hidden" name="created_at" value="<?= $pengaduan['created_at']; ?>">
                                    <input type="hidden" name="updated_at" value="<?= $pengaduan['updated_at']; ?>">

                                    <!-- Update Status -->
                                    <div class="form-check">
                                        <div class="col">
                                            <div class="col" style="text-align:center;">

                                                <!--Proses -->
                                                <input class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" type="radio" name="status" id="proses" value="Pengaduan Sedang Diproses">
                                                <label class="btn btn-primary" for="proses" style="width: 160px;">Proses</label>

                                                <br>
                                                <!-- Tolak -->
                                                <input type="radio" class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status" id="tolak" value="Pengaduan Ditolak">
                                                <label class="btn btn-danger" for="tolak" style="width: 160px;">Tolak</label>

                                                <br>
                                                <!-- Selesai -->
                                                <input type="radio" class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status" id="selesai" value="Pengaduan Selesai">
                                                <label class="btn btn-success" for="selesai" style="width: 160px;">Selesai</label>

                                                <!-- Jika validasi Error tampilkan ini -->
                                                <?php if ($validation->hasError('status')) : { ?>
                                                        <div id="validationServer05Feedback" class="invalid-feedback btn btn-outline-danger" style="font-size: 20px; font-style:italic;">
                                                            <?= $validation->getError('status'); ?>
                                                        <?php } ?>

                                                        </div>

                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Keterangan -->
                                    <div class="form-group my-3">
                                        <h5><label for="keterangan">Tanggapan</label></h5>
                                        <textarea type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" name="keterangan" rows="4" placeholder="Keterangan Petugas saat ini :&#10;<?= $pengaduan['keterangan']; ?>" autofocus><?= old('keterangan'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('keterangan'); ?>
                                        </div>
                                    </div>

                            </ul>
                        </div>


                    </div>
                    <div class="mt-3 float-right">
                        <button type="submit" class="btn btn-dark">Update </button>
                        <a href="/petugas/detail/<?= $pengaduan['id']; ?>" class="btn btn-primary  d-inline ">Kembali</a>
                    </div>
                    </form>
                </div>
                <div class="col mb-4">
                    <div class="card">

                        <div class="card-body">
                            <div class="card-header">
                                <h2 class="card-title">Data Pengaduan</h2>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Judul :</b> <br>
                                    <?= $pengaduan['judul_laporan']; ?>
                                </li>
                                <li class="list-group-item"><b>Isi Pengaduan:</b> <br>
                                    <?= $pengaduan['isi_laporan']; ?></li>
                                <li class="list-group-item"><br>

                                    <h3 style="text-align: center;">Lampiran Foto</h3>
                                    <div class="col mb-2" style="margin: auto;">
                                        <img src="/img/<?= $pengaduan['foto']; ?>" class="card-img-top" alt="..." width="200px;">
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <br>

                </div>


            </div>


            <?= $this->endSection(); ?>
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
                                        <?php if ($pengaduan['status'] == 'Pengaduan Sedang Diverifikasi') :  ?>
                                            <p class="card-text btn btn-secondary">Status : <?= $pengaduan['status'] ?></p>
                                        <?php elseif ($pengaduan['status'] == 'Pengaduan Ditolak') : ?>
                                            <p class="card-text btn btn-danger">Status : <?= $pengaduan['status'] ?></p>
                                        <?php elseif ($pengaduan['status'] == 'Pengaduan Sedang Diproses') : ?>
                                            <p class="card-text btn btn-primary">Status : <?= $pengaduan['status'] ?></p>
                                        <?php elseif ($pengaduan['status'] == 'Pengaduan Selesai') : ?>
                                            <p class="card-text btn btn-success">Status : <?= $pengaduan['status'] ?></p>
                                        <?php endif; ?>

                                    </li>
                                </div>


                                <h3 class="mb-2" style="text-align: center;">Pilih Status Pengaduan</h3>



                                <!-- Update pake form -->
                                <form action="/petugas/update/<?= $pengaduan['id']; ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>

                                    <!-- Beking input hidden value yang nda mo rubah -->
                                    <input type="hidden" name="id" value="<?= $pengaduan['id']; ?>">
                                    <input type="hidden" name="nama" value="<?= $pengaduan['nama']; ?>">
                                    <input type="hidden" name="no_hp" value="<?= $pengaduan['no_hp']; ?>">
                                    <input type="hidden" name="email" value="<?= $pengaduan['email']; ?>">
                                    <input type="hidden" name="judul_laporan" value="<?= $pengaduan['judul_laporan']; ?>">
                                    <input type="hidden" name="isi_laporan" value="<?= $pengaduan['isi_laporan']; ?>">
                                    <input type="hidden" name="foto" value="<?= $pengaduan['foto']; ?>">
                                    <input type="hidden" name="foto2" value="<?= $pengaduan['foto2']; ?>">
                                    <input type="hidden" name="foto3" value="<?= $pengaduan['foto3']; ?>">
                                    <input type="hidden" name="created_at" value="<?= $pengaduan['created_at']; ?>">
                                    <input type="hidden" name="updated_at" value="<?= $pengaduan['updated_at']; ?>">
                                    <input type="hidden" name="kode" value="<?= $pengaduan['kode']; ?>">
                                    <input type="hidden" name="tujuan_pengaduan" value="<?= $pengaduan['tujuan_pengaduan']; ?>">


                                    <?php if ($pengaduan['status'] == "Pengaduan Sedang Diverifikasi") : ?>
                                        <input type="hidden" name="keterangan" value="-">
                                        <!-- Pengaduan ditolak -->
                                    <?php elseif ($pengaduan['status'] == "Pengaduan Ditolak") : ?>
                                        <input type="hidden" name="keterangan" value="-">
                                        <!-- Pengaduan selesai -->
                                    <?php elseif ($pengaduan['status'] == "Pengaduan Selesai") : ?>
                                        <input type="hidden" name="keterangan" value="-">

                                    <?php endif ?>

                                    <!-- Update Status -->
                                    <div class="form-check">
                                        <div class="col">
                                            <div class="col" style="text-align:center;">

                                                <!-- Pengaduan Sedang Diverifikasi -->
                                                <?php if ($pengaduan['status'] == "Pengaduan Sedang Diverifikasi") : ?>
                                                    <!--Proses -->
                                                    <input class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" type="radio" name="status" id="proses" value="Pengaduan Sedang Diproses">
                                                    <label class="btn btn-primary" for="proses" style="width: 160px;">Proses</label>


                                                    <!-- Pengaduan Sedang Diproses -->
                                                <?php elseif ($pengaduan['status'] == 'Pengaduan Sedang Diproses') : ?>
                                                    <!-- Tolak -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status" id="tolak" value="Pengaduan Ditolak">
                                                    <label class="btn btn-danger" for="tolak" style="width: 160px;">Tolak</label>

                                                    <br>
                                                    <!-- Selesai -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status" id="selesai" value="Pengaduan Selesai">
                                                    <label class="btn btn-success" for="selesai" style="width: 160px;">Selesai</label>

                                                    <!-- Pengaduan Selesai -->
                                                <?php elseif ($pengaduan['status'] == 'Pengaduan Selesai') : ?>
                                                    <!-- Selesai -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status" id="selesai" value="Pengaduan Selesai">
                                                    <label class="btn btn-success" for="selesai" style="width: 160px;">Selesai</label>

                                                    <!-- Pengaduan Ditolak -->
                                                <?php elseif ($pengaduan['status'] == 'Pengaduan Ditolak') : ?>
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" name="status" id="tolak" value="Pengaduan Ditolak">
                                                    <label class="btn btn-danger" for="tolak" style="width: 160px;">Tolak</label>

                                                <?php endif; ?>

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
                                    <!-- placeholder="Keterangan Petugas saat ini :&#10;?= $pengaduan
                                    ['keterangan']; ?>" -->


                                    <!-- Jika status sedang diverifikasi nda usah tampilkan keterangan -->

                                    <!-- Pengaduan Sedang Diverifikasi -->
                                    <?php if ($pengaduan['status'] == "Pengaduan Sedang Diverifikasi") : ?>
                                        <input type="hidden" name="keterangan" value="-">
                                        <input type="file" name="foto_petugas" hidden>

                                        <!-- Pengaduan Sedang sedang diproses -->
                                    <?php elseif ($pengaduan['status'] == "Pengaduan Sedang Diproses") : ?>

                                        <div class=" form-group my-3">
                                            <h5><label for="keterangan">Tanggapan</label></h5>
                                            <textarea type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" name="keterangan" rows="4" autofocus><?= old('keterangan'); ?></textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('keterangan'); ?>
                                            </div>

                                        </div>
                                        <!-- Lampiran 1 -->
                                        <div class="form-group">
                                            <label for="foto_petugas">Lampiran Foto 1</label>
                                            <div class="col-sm-4">
                                                <img src="/img/default.png" class="img-thumbnail foto_petugas-preview">
                                            </div>
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="foto_petugas">Pilih
                                                    <input type="file" class="custom-file-input <?= ($validation->hasError('foto_petugas')) ? 'is-invalid' : ''; ?>" id="foto_petugas" name="foto_petugas" onchange="fotoPetugas()">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('foto_petugas'); ?>
                                                    </div>
                                            </div>
                                        </div>

                                        <!-- Lampiran 2
                                        <div class="form-group">
                                            <label for="foto_petugas2">Lampiran Foto 2</label>
                                            <div class="col-sm-4">
                                                <img src="/img/default.png" for="foto_petugas2" class="img-thumbnail foto_petugas2-preview">
                                            </div>

                                            <div class="custom-file">
                                                <label class="custom-file-label mt-1" for="foto_petugas2">Pilih Gambar..</label>
                                                <input type="file" class="custom-file-input <?= ($validation->hasError('foto_petugas2')) ? 'is-invalid' : ''; ?>" id="foto_petugas2" name="foto_petugas2" onchange="fotoPetugas2()">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('foto_petugas2'); ?>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- Lampiran 3 -->
                                        <!-- 
                                        <div class="form-group">
                                            <label for="foto_petugas3">Lampiran Foto 3</label>
                                            <div class="col-sm-4">
                                                <img src="/img/default.png" class="img-thumbnail foto_petugas3-preview">
                                            </div>

                                            <div class="custom-file">
                                                <label class="custom-file-label mb-1" for="foto_petugas3">Pilih gambar..</label>
                                                <input type="file" class="form-control <?= ($validation->hasError('foto_petugas3')) ? 'is-invalid' : ''; ?>" id="foto_petugas3" name="foto_petugas3" onchange="fotoPetugas3()">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('foto_petugas3'); ?>
                                                </div>

                                            </div>

                                        </div> -->





                                        <!-- Pengaduan ditolak -->
                                    <?php elseif ($pengaduan['status'] == "Pengaduan Ditolak") : ?>

                                        <!-- Pengaduan selesai -->
                                    <?php elseif ($pengaduan['status'] == "Pengaduan Selesai") : ?>

                                    <?php endif; ?>

                                    <!-- <fieldset disabled>
                                        <div class="form-group my-3">
                                            <div class="form-group">
                                                <label for="disabledTextInput" style="font-style:italic;"><b>Keterangan Petugas Saat Ini</b></label>
                                                <textarea type="text" id="disabledTextInput" rows="10" class="form-control" placeholder=""> $pengaduan['keterangan']; ?></textarea>
                                            </div>
                                        </div>
                                    </fieldset> -->

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
                                    <div class="text-center col mb-2" style="margin: auto;">
                                        <img src="/img/<?= $pengaduan['foto']; ?>" class="rounded" style="width: 250px;" alt="..." onerror="this.style.display='none'">
                                        <br>
                                        <img src="/img/<?= $pengaduan['foto2']; ?>" class="rounded mt-3" style="width: 250px;" alt="..." onerror="this.style.display='none'">
                                        <br>
                                        <img src="/img/<?= $pengaduan['foto3']; ?>" class="rouded mt-3" style=" width: 250px;" alt="..." onerror="this.style.display='none'">
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <br>

                </div>


            </div>


            <?= $this->endSection(); ?>
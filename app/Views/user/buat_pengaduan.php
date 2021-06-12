<!-- Layout itu nama folder view -->
<!-- user_template itu nama file php -->
<?= $this->extend('layout/user_template'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">


            <h2 class="my-3">Tambah Data Pengaduan</h2>

            <form action="/user/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" class="form-control" id="status" name="status" value="Pengaduan Sedang Diverifikasi">
                <input type="hidden" class="form-control" id="kode" name="kode" value="<?= random_string('alnum', 6) ?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_hp">No Handphone</label>
                    <input type="text" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" value="<?= old('no_hp'); ?>">
                    <div class=" invalid-feedback">
                        <?= $validation->getError('no_hp'); ?>
                    </div>
                </div>
                <div class="form-group my-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                    <div class=" invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="form-group my-3">
                    <label for="judul_laporan">Judul Laporan</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul_laporan')) ? 'is-invalid' : ''; ?>" id="judul_laporan" name="judul_laporan" value="<?= old('judul_laporan'); ?>">
                    <div class=" invalid-feedback">
                        <?= $validation->getError('judul_laporan'); ?>
                    </div>
                </div>

                <!-- Tujuan Pengaduan -->
                <div class="form-group my-3">
                    <label for="inlineFormCustomSelect">Tujuan Pengaduan</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="tujuan_pengaduan">
                        <!-- Jaringan -->
                        <option name="tujuan_pengaduan" id="jaringan" value="Jaringan">Jaringan</option>
                        <!-- Server -->
                        <option name="tujuan_pengaduan" id="server" value="Server">Server</option>
                        <!-- Website UNIMA -->
                        <option name="tujuan_pengaduan" id="web_unima" value="Website UNIMA">Website UNIMA</option>
                        <!-- Sistem Informasi -->
                        <option name="tujuan_pengaduan" id="si" value="Sistem Informasi">Sistem Informasi</option>
                        <!-- LMS -->
                        <option name="tujuan_pengaduan" id="lms" value="LMS">LMS</option>
                    </select>

                </div>

                <div class="form-group my-3">
                    <label for="isi_laporan">Isi Laporan</label>
                    <textarea type="text" class="form-control <?= ($validation->hasError('isi_laporan')) ? 'is-invalid' : ''; ?>" name="isi_laporan" rows="7"><?= old('isi_laporan'); ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('isi_laporan'); ?>
                    </div>
                </div>


                <!-- Upload Gambar 1 -->
                <div class="form-group">
                    <label for="foto">Lampiran Foto 1</label>
                    <div class="col-sm-4">
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                    </div>

                    <div class="custom-file">
                        <label class="custom-file-label" for="foto">Pilih Gambar..</label>
                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Upload Gambar 2 -->
                <div class="form-group">
                    <label for="foto2">Lampiran Foto 2</label>
                    <div class="col-sm-4">
                        <img src="/img/default.png" class="img-thumbnail foto2-preview">
                    </div>

                    <div class="custom-file">
                        <label class="custom-file-label mt-1" for="foto2">Pilih Gambar..</label>
                        <input type="file" class="form-control <?= ($validation->hasError('foto2')) ? 'is-invalid' : ''; ?>" id="foto2" name="foto2" onchange="previewFoto2()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('foto2'); ?>
                        </div>

                    </div>

                </div>

                <!-- Upload Gambar 3 -->
                <div class="form-group">
                    <label for="foto3">Lampiran Foto 3</label>
                    <div class="col-sm-4">
                        <img src="/img/default.png" class="img-thumbnail foto3-preview">
                    </div>

                    <div class="custom-file">
                        <label class="custom-file-label mb-1" for="foto3">Pilih Gambar..</label>
                        <input type="file" class="form-control <?= ($validation->hasError('foto3')) ? 'is-invalid' : ''; ?>" id="foto3" name="foto3" onchange="previewFoto3()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('foto3'); ?>
                        </div>

                    </div>

                </div>


                <br>
                <hr style="color: black;">

                <!-- Tujuan Pengaduan
                <div class="form-group">
                    <h3 style="text-align: center;">Tujuan Pengaduan</h3>
                </div>
                <div class="form-check">
                    <div class="col">
                        <div class="col" style="text-align:center;">
                            Jaringan
                            <input class="btn-check ?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="jaringan" value="Jaringan">
                            <label class="btn btn-outline-primary" for="jaringan" style="width: 160px;">Jaringan</label>

                            <br>

                            Server
                            <input type="radio" class="btn-check?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="server" value="Server">
                            <label class="btn btn-outline-primary" for="server" style="width: 160px;">Server</label>
                            <br>

                            Website UNIMA
                            <input type="radio" class="btn-check?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="web_unima" value="Website UNIMA">
                            <label class="btn btn-outline-primary" for="web_unima" style="width: 160px;">Website UNIMA</label>
                            <br>

                            Sistem Informasi
                            <input type="radio" class="btn-check?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="si" value="Sistem Informasi">
                            <label class="btn btn-outline-primary" for="si" style="width: 160px;">Sistem Informasi</label>
                            <br>

                            LMS
                            <input type="radio" class="btn-check?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="lms" value="LMS">
                            <label class="btn btn-outline-primary" for="lms" style="width: 160px;">LMS</label>
                            <br>


                        </div>
                        Jika validasi Error tampilkan ini
                        <?php if ($validation->hasError('tujuan_pengaduan')) : { ?>
                                <div id="validationServer05Feedback" class="invalid-feedback btn btn-outline-danger" style="font-size: 20px; font-style:italic;">
                                    <?= $validation->getError('tujuan_pengaduan'); ?>
                                <?php } ?>

                                </div>

                            <?php endif; ?>
                        </div>
                    </div> -->
                <div class="form-group">

                    <hr style="color: black;">

                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Tambah Pengaduan</button>
                </div>

            </form>


            <br>
            <br><br><br>
            <br><br>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- <h1 class="mt-4">Dashboard</h1> -->
            <h1 class="mt-3 mb-3">Update Tujuan Pengaduan</h1>


            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">


                        <div class="card-body">

                            <ul class="list-group list-group-flush">
                                <div class="text-center">
                                    <li class="list-group-item">
                                        <p class="card-text btn btn-warning">Tujuan Pengaduan Saat Ini:</p>
                                        <br>
                                        <p class="card-text btn btn-primary"><?= $pengaduan['tujuan_pengaduan'] ?></p>

                                    </li>
                                </div>


                                <h3 class="mb-2 mt-2" style="text-align: center;">Pilih Tujuan Pengaduan</h3>



                                <!-- Update pake form -->
                                <form action="/tujuan/update/<?= $pengaduan['id']; ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>

                                    <!-- Beking input hidden value yang nda mo rubah -->
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
                                    <input type="hidden" name="status" value="<?= $pengaduan['status']; ?>">

                                    <!-- Update Status -->
                                    <div class="form-check">
                                        <div class="col">
                                            <div class="col" style="text-align:center;">

                                                <!-- Tujuan Pengaduan Jaringan-->
                                                <?php if ($pengaduan['tujuan_pengaduan'] == "Jaringan") : ?>
                                                    <!--Server -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="server" value="Server">
                                                    <label class="btn btn-outline-dark" for="server" style="width: 160px;">Server</label>

                                                    <br>
                                                    <!-- Sistem Informasi -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="sistem_informasi" value="Sistem Informasi">
                                                    <label class="btn btn-outline-dark" for="sistem_informasi" style="width: 160px;">Sistem Informasi</label>

                                                    <br>
                                                    <!-- Website UNIMA -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="website_unima" value="Website UNIMA">
                                                    <label class="btn btn-outline-dark" for="website_unima" style="width: 160px;">Website UNIMA</label>

                                                    <br>
                                                    <!-- LMS  -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="lms" value="LMS">
                                                    <label class="btn btn-outline-dark" for="lms" style="width: 160px;">LMS</label>



                                                    <!-- Tujuan Pengaduan Server -->
                                                <?php elseif ($pengaduan['tujuan_pengaduan'] == 'Server') : ?>
                                                    <!--Jaringan -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="jaringan" value="Jaringan">
                                                    <label class="btn btn-outline-dark" for="jaringan" style="width: 160px;">Jaringan</label>

                                                    <br>
                                                    <!-- Sistem Informasi -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="sistem_informasi" value="Sistem Informasi">
                                                    <label class="btn btn-outline-dark" for="sistem_informasi" style="width: 160px;">Sistem Informasi</label>

                                                    <br>
                                                    <!-- Website UNIMA -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="website_unima" value="Website UNIMA">
                                                    <label class="btn btn-outline-dark" for="website_unima" style="width: 160px;">Website UNIMA</label>

                                                    <br>
                                                    <!-- LMS  -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="lms" value="LMS">
                                                    <label class="btn btn-outline-dark" for="lms" style="width: 160px;">LMS</label>


                                                    <!-- Tujuan Pengaduan Sistem Informasi -->
                                                <?php elseif ($pengaduan['tujuan_pengaduan'] == 'Sistem Informasi') : ?>
                                                    <!--Jaringan -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="jaringan" value="Jaringan">
                                                    <label class="btn btn-outline-dark" for="jaringan" style="width: 160px;">Jaringan</label>

                                                    <br>
                                                    <!-- Server -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="server" value="Server">
                                                    <label class="btn btn-outline-dark" for="server" style="width: 160px;">Server</label>

                                                    <br>
                                                    <!-- Website UNIMA -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="website_unima" value="Website UNIMA">
                                                    <label class="btn btn-outline-dark" for="website_unima" style="width: 160px;">Website UNIMA</label>

                                                    <br>
                                                    <!-- LMS  -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="lms" value="LMS">
                                                    <label class="btn btn-outline-dark" for="lms" style="width: 160px;">LMS</label>

                                                    <!-- Tujuan Pengaduan Website UNIMA -->
                                                <?php elseif ($pengaduan['tujuan_pengaduan'] == 'Website UNIMA') : ?>
                                                    <!--Jaringan -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="jaringan" value="Jaringan">
                                                    <label class="btn btn-outline-dark" for="jaringan" style="width: 160px;">Jaringan</label>

                                                    <br>
                                                    <!-- Server -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="server" value="Server">
                                                    <label class="btn btn-outline-dark" for="server" style="width: 160px;">Server</label>

                                                    <br>
                                                    <!-- Sistem Informasi -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="sistem_informasi" value="Sistem Informasi">
                                                    <label class="btn btn-outline-dark" for="sistem_informasi" style="width: 160px;">Sistem Informasi</label>

                                                    <br>
                                                    <!-- LMS  -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="lms" value="LMS">
                                                    <label class="btn btn-outline-dark" for="lms" style="width: 160px;">LMS</label>

                                                    <!-- Tujuan Pengaduan LMS -->
                                                <?php elseif ($pengaduan['tujuan_pengaduan'] == 'LMS') : ?>
                                                    <!--Jaringan -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="jaringan" value="Jaringan">
                                                    <label class="btn btn-outline-dark" for="jaringan" style="width: 160px;">Jaringan</label>

                                                    <br>
                                                    <!-- Server -->
                                                    <input class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" type="radio" name="tujuan_pengaduan" id="server" value="Server">
                                                    <label class="btn btn-outline-dark" for="server" style="width: 160px;">Server</label>

                                                    <br>
                                                    <!-- Sistem Informasi -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="sistem_informasi" value="Sistem Informasi">
                                                    <label class="btn btn-outline-dark" for="sistem_informasi" style="width: 160px;">Sistem Informasi</label>

                                                    <br>
                                                    <!-- Website UNIMA -->
                                                    <input type="radio" class="btn-check <?= ($validation->hasError('tujuan_pengaduan')) ? 'is-invalid' : ''; ?>" name="tujuan_pengaduan" id="lms" value="Website UNIMA">
                                                    <label class="btn btn-outline-dark" for="lms" style="width: 160px;">Website UNIMA</label>


                                                <?php endif; ?>

                                                <!-- Jika validasi Error tampilkan ini -->
                                                <?php if ($validation->hasError('tujuan_pengaduan')) : { ?>
                                                        <div id="validationServer05Feedback" class="invalid-feedback btn btn-outline-danger" style="font-size: 20px; font-style:italic;">
                                                            <?= $validation->getError('tujuan_pengaduan'); ?>
                                                        <?php } ?>

                                                        </div>

                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                            </ul>
                        </div>


                    </div>
                    <div class="mt-3 float-right">
                        <button type="submit" class="btn btn-dark">Update</button>
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
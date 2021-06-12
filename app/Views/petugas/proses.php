<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <a href="/petugas/" class="btn btn-outline-primary mb-2" style="width: 75px;"><i class="fas fa-arrow-left" style="width: 50px;"></i></a>

            <div class="card mb-4 mt-4">
                <div class="card-header " style="font-size: 25px;">
                    <!-- <i class="fas fa-table mr-1"></i> -->
                    Daftar Pengaduan Diproses
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Ini dpe class asli -->
                        <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->

                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <!-- col itu ta cuman ada tambah nanti kalo kedepan ada error coba jo hapus sapa tau ta fix, penting yakin -->
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Judul Laporan</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status</th>
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
                                            <span class="badge badge-primary"><?= $p['status']; ?></span>
                                        </td>
                                        <td scope="col">
                                            <div class="d-inline ">
                                                <a href="/petugas/detail/<?= $p['id']; ?>" class=" btn btn-success mb-1"><i class="fas fa-info-circle"></i></a>
                                                <!-- Delete -->
                                                <!-- Nda pake delete -->
                                                <!-- <form action="/petugas/<= $p'id']; ?>" method="post">
                                                    <= csrf_field; ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?');"><i class="fas fa-trash-alt"></i></button>

                                                </form> -->
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
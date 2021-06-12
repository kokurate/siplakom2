<!-- Layout itu nama folder view -->
<!-- user_template itu nama file php -->
<?= $this->extend('layout/user_template'); ?>

<?= $this->Section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="mb-3">Daftar Pengaduan</h1>

            <!-- 
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                $(document).ready(function() {
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        swal({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            button: "Selesai",
                        });
                    <?php endif; ?>

                });
            </script> -->


            <!-- 
             sweet alert babang sandika
            <?php if (session()->getFlashdata('pesan')) { ?>
                <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
            <?php } ?> -->


            <!-- Set Flash Data nda dipake -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>


            <!-- <div class="card mb-4"> -->

            <!-- Card Header -->
            <!-- <div class="card-header " style="font-size: 25px;">
                    <i class="fas fa-table mr-1"></i> -->
            <!-- Daftar Pengaduan -->
            <!-- </div> -->

            <div class="card-body">
                <div class="table-responsive">
                    <!-- Ini dpe class asli -->
                    <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->

                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Judul Pengaduan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Kode</th>
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
                                    <td scope="col"><?= $p['status']; ?></td>
                                    <td scope="col"><?= $p['kode']; ?></td>

                                    <td scope="col">
                                        <a href="/user/<?= $p['id']; ?>" class=" btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- </div> -->
            </div>
            <!-- </div> -->

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
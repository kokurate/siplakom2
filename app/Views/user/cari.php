<?= $this->extend('layout/user_template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="px-4 py-4 my-5 text-center">
        <!-- Set flash data -->
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <h2 class="fw-bold mt-1"><strong>Pencarian Pengaduan</strong></h2>

        <form action="" method="post">
            <!-- mulai -->
            <div class="col-9 mx-auto">
                <p class="lead mb-1"> Silahkan Masukan Kode Pengaduan :</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Kode Pengaduan" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">Cari</button>
                    </div>
                </div>
            </div>
            <!-- akhir -->
        </form>
        <br>

        <!-- Table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Pengaduan</th>
                    <th scope="col">Detail</th>

                </tr>
            </thead>
            <tbody>
                <!-- Logic cuurent itu isi halaman -->
                <!-- 
                hal 1 = 1-1=0, 10*0=0, 1+0=1
                hal 2 = 2-1=1, 10*1=10, 1+10=11
                dst
             -->
                <?php $i = 1 + (10 * ($current - 1)); ?>
                <?php foreach ($pengaduan as $p) : ?>

                    <th scope="row"><?= $i++; ?></th>

                    <td><strong><?= $p['kode']; ?></strong></td>
                    <td scope="col">
                        <div class="d-inline">
                            <a href="/user/detail/<?= $p['id']; ?>" class=" btn btn-success mb-1"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </td>


            </tbody>
        <?php endforeach; ?>
        </table>
        <?= $pager->links('pengaduan', 'cari_paginasi'); ?>
        <!-- parameter pertama nama tabel, kadua nama file yang ada config
        tampilkan paginasi disini
        folder custom paginasi eps 14 menit 14.00 -->
    </div>

</div>

<?= $this->endSection(); ?>
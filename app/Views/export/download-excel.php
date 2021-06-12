<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font Awesome -->
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->


    <title>Export Data Pengaduan</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4 mb-4 ">Export Data Pengaduan</h1>
        <br>
        <a href="/petugas/" class="btn btn-outline-primary mb-2" style="width: 75px;"><img src="<?php base_url() ?>/img/back.png" alt="" width="35px"></a>
        <br>
        <span id="message"></span>


        <div class="btn btn-danger">
            <h4 class=" ">Export Laporan Disarankan Data Sudah Memiliki Minimal 10 data</h4>
        </div>
        <br>
        <br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">

                        <h2>Data Pengaduan Terbaru</h2>

                        <a href="/exportexcel/export" class="btn btn-warning mt-2">Export Semua</a>
                        <a href="/exportexcel/masuk" class="btn btn-secondary mt-2">Export Masuk</a>
                        <a href="/exportexcel/proses" class="btn btn-primary mt-2">Export Proses</a>
                        <a href="/exportexcel/tolak" class="btn btn-danger mt-2">Export Ditolak</a>
                        <a href="/exportexcel/selesai" class="btn btn-success mt-2">Export Selesai</a>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-md-center">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tujuan Pengaduan</th>
                                <th>Judul Pengaduan</th>
                                <th>Isi Pengaduan</th>
                                <th>Tanggapan Petugas</th>

                            </tr>
                            <?php
                            $i = 1;
                            foreach ($data as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row["kode"]; ?></td>
                                    <td><?php echo $row["nama"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                    <td><?php echo $row["tujuan_pengaduan"]; ?></td>
                                    <td><?php echo $row["judul_laporan"]; ?></td>
                                    <td><?php echo $row["isi_laporan"]; ?></td>
                                    <td><?php echo $row["keterangan"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
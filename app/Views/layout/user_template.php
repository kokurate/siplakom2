<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Template di folder userpage -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Template user page CSS -->
    <link href="<?= base_url(); ?>/userpage/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS Sweetalert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.cs">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $tittle; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">SIPLAKOM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- simbol "/" itu routes default cara mo lia itu pigi di config/routes  -->
                    <!-- Boleh juga pake base_url mar karena kita pake CI 4 jadi lebe gampang routes -->
                    <!-- <a class="nav-link active" href="/user">Cari Pengaduan </a> -->
                    <a class="nav-link active" href="/user/cari">Cari Pengaduan </a>
                    <a class="nav-link" href="/user/create">Buat Pengaduan </a>
                    <!-- <a class="nav-link" href="/user/about">Tentang SIPLAKOM</a>
                    <a class="nav-link" href="/user/contact">Hubungi Kami</a> -->

                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <!-- Template userpage Java script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/userpage/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/userpage/assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/userpage/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/userpage/assets/demo/datatables-demo.js"></script>

    <!-- Template JS image preview -->
    <script>
        // Lampiran foto 1
        function previewImg() {

            const foto = document.querySelector('#foto');
            const fotoLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            // for mo ganti url
            // ambil tulisan label
            fotoLabel.textContent = foto.files[0].name;

            // For mo ganti preview
            // ambil file yang diupload
            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        // Lampiran foto 2
        function previewFoto2() {

            const foto2 = document.querySelector('#foto2');
            const foto2Label = document.querySelector('.mt-1');
            const imgPreview = document.querySelector('.foto2-preview');

            // for mo ganti url
            // ambil tulisan label
            foto2Label.textContent = foto2.files[0].name;

            // For mo ganti preview
            // ambil file yang diupload
            const fileFoto2 = new FileReader();
            fileFoto2.readAsDataURL(foto2.files[0]);

            fileFoto2.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        // Lampiran foto 3
        function previewFoto3() {

            const foto3 = document.querySelector('#foto3');
            const foto3Label = document.querySelector('.mb-1');
            const imgPreview = document.querySelector('.foto3-preview');

            // for mo ganti url
            // ambil tulisan label
            foto3Label.textContent = foto3.files[0].name;

            // For mo ganti preview
            // ambil file yang diupload
            const fileFoto3 = new FileReader();
            fileFoto3.readAsDataURL(foto3.files[0]);

            fileFoto3.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

    <!-- Script Sweetalert2 -->
    <script src="<?= base_url(); ?>/js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

    <!-- My Script -->
    <script src="<?= base_url(); ?>/js/myscript.js"></script>

</body>

</html>
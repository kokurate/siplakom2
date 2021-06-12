<?= $this->extend('layout/petugas_template'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3">
            <h4 class="mb-3">Kirim Email Ke Petugas</h4>
            <a href="/petugas/<?= $pengaduan['id']; ?>" class="btn btn-outline-primary mb-2" style="width: 75px;"><i class="fas fa-arrow-left" style="width: 50px;"></i></a>
            <hr>
            <!-- <h3 class="btn btn-danger">Pesan Sudah Dibuatkan Otomatis Mohon Untuk Tidak Mengubah Isi Pesan</h3> -->
            <h3 class="btn btn-primary">Silahkan Klik Kirim Untuk Mengirim Email Ke Petugas</h3>
            <hr>
            <?php
            if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php }

            if (!empty(session()->getFlashdata('error'))) { ?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php }

            echo form_open('kirim_email/send/' . $pengaduan['id']); ?>

            <!-- Sistem Informasi -->
            <?php if ($pengaduan['tujuan_pengaduan'] == 'Sistem Informasi') : ?>
                <div class="form-group">
                    <?php
                    form_label('To');
                    $to = [
                        'type'  => 'email',
                        'type'  => 'hidden',
                        'name'  => 'to',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Email Tujuan',
                        'value' => 'sistem informasi'
                    ];
                    echo form_input($to);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    form_label('Subject');
                    $subject = [
                        'type'  => 'hidden',
                        'name'  => 'subject',
                        'class' => 'form-control',
                        'placeholder' => 'Subject',
                        'value' => 'Notifikasi SIPLAKOM'
                    ];
                    echo form_input($subject);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    form_label('Message');
                    $message = [
                        'type'  => 'hidden',
                        'name'  => 'message',
                        'class' => 'form-control',
                        'value' =>
                        '
<h1>Pengaduan Sistem Informasi</h1>
<p> Halo Indra, saat ini ada pengaduan tentang <strong><i>Sistem Informasi</i></strong></p>
<p>Silahkan buka Website SIPLAKOM untuk memproses pengaduan</p>
<p> http://localhost:8080/petugas/sistem_informasi</p>
                        '
                    ];
                    echo form_input($message);
                    ?>
                </div>


                <!-- Jaringan -->
            <?php elseif ($pengaduan['tujuan_pengaduan'] == 'Jaringan') : ?>

                <div class="form-group">
                    <?php
                    form_label('To');
                    $to = [
                        'type'  => 'email',
                        'type'  => 'hidden',
                        'name'  => 'to',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Email Tujuan',
                        'value' => 'ericksanger66@gmail.com'
                    ];
                    echo form_input($to);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    form_label('Subject');
                    $subject = [
                        'type'  => 'hidden',
                        'name'  => 'subject',
                        'class' => 'form-control',
                        'placeholder' => 'Subject',
                        'value' => 'Notifikasi SIPLAKOM'
                    ];
                    echo form_input($subject);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    form_label('Message');
                    $message = [
                        'type'  => 'hidden',

                        'name'  => 'message',
                        'class' => 'form-control',
                        'value' =>
                        '
 <h1>Pengaduan Jaringan</h1>
<p> Halo Christian Jimmy Watuseke, saat ini ada pengaduan tentang <strong><i>Jaringan</i></strong></p>
<p>Silahkan buka Website SIPLAKOM untuk memproses pengaduan</p>
<p> http://localhost:8080/petugas/jaringan</p>
                        '
                    ];
                    echo form_input($message);
                    ?>
                </div>

                <!-- Server -->
            <?php elseif ($pengaduan['tujuan_pengaduan'] == 'Server') : ?>

                <div class="form-group">
                    <?php
                    form_label('To');
                    $to = [
                        'type'  => 'email',
                        'type'  => 'hidden',
                        'name'  => 'to',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Email Tujuan',
                        'value' => 'server'
                    ];
                    echo form_input($to);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    form_label('Subject');
                    $subject = [
                        'type'  => 'hidden',
                        'name'  => 'subject',
                        'class' => 'form-control',
                        'placeholder' => 'Subject',
                        'value' => 'Notifikasi SIPLAKOM'
                    ];
                    echo form_input($subject);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    form_label('Message');
                    $message = [
                        'type'  => 'hidden',
                        'name'  => 'message',
                        'class' => 'form-control',
                        'value' =>
                        '
<h1>Pengaduan Sistem Informasi</h1>
<h3> Halo Feldy T, saat ini ada pengaduan tentang <strong><i>Server</i></strong></h3>
<p>Silahkan buka Website SIPLAKOM untuk memproses pengaduan</p>
<p> http://localhost:8080/petugas/server</p>
        '
                    ];
                    echo form_input($message);
                    ?>
                </div>

                <!-- Website UNIMA -->
            <?php elseif ($pengaduan['tujuan_pengaduan'] == 'Website UNIMA') : ?>

                <div class="form-group">
                    <?php
                    form_label('To');
                    $to = [
                        'type'  => 'email',
                        'type'  => 'hidden',
                        'name'  => 'to',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Email Tujuan',
                        'value' => 'website unima'
                    ];
                    echo form_input($to);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    form_label('Subject');
                    $subject = [
                        'type'  => 'hidden',
                        'name'  => 'subject',
                        'class' => 'form-control',
                        'placeholder' => 'Subject',
                        'value' => 'Notifikasi SIPLAKOM'
                    ];
                    echo form_input($subject);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    form_label('Message');
                    $message = [
                        'type'  => 'hidden',
                        'name'  => 'message',
                        'class' => 'form-control',
                        'value' =>
                        '
<h1>Pengaduan Sistem Informasi</h1>
<h3> Halo Jessica J, saat ini ada pengaduan tentang <strong><i>Website UNIMA</i></strong></h3>
<p>Silahkan buka Website SIPLAKOM untuk memproses pengaduan</p>
<p> http://localhost:8080/petugas/website_unima</p>
'
                    ];
                    echo form_input($message);
                    ?>
                </div>


                <!-- LMS -->
            <?php elseif ($pengaduan['tujuan_pengaduan'] == 'LMS') : ?>

                <div class="form-group">
                    <?php
                    form_label('To');
                    $to = [
                        'type'  => 'email',
                        'type'  => 'hidden',
                        'name'  => 'to',
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Email Tujuan',
                        'value' => 'LMS'
                    ];
                    echo form_input($to);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    form_label('Subject');
                    $subject = [
                        'type'  => 'hidden',
                        'name'  => 'subject',
                        'class' => 'form-control',
                        'placeholder' => 'Subject',
                        'value' => 'Notifikasi SIPLAKOM'
                    ];
                    echo form_input($subject);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    form_label('Message');
                    $message = [
                        'type'  => 'hidden',
                        'name'  => 'message',
                        'class' => 'form-control',
                        'value' =>
                        '
<h1>Pengaduan Sistem Informasi</h1>
<h3> Halo Vivi Rantung, saat ini ada pengaduan tentang <strong><i>Learning Management System</i></strong></h3>
<p>Silahkan buka Website SIPLAKOM untuk memproses pengaduan</p>
<p> http://localhost:8080/petugas/lms</p>
'
                    ];
                    echo form_input($message);
                    ?>
                </div>


            <?php endif; ?>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Kirim</button>
            </div>
            </form>
        </div>
        <?= $this->endSection(); ?>
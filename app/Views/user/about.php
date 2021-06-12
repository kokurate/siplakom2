<!-- Layout itu nama folder view -->
<!-- user_template itu nama file php -->
<?= $this->extend('layout/user_template'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ini About</h1>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>
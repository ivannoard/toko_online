<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1>Halo From Main</h1>
<p>
    <?php echo session()->get('username') ?>
</p>
<?= $this->endSection() ?>
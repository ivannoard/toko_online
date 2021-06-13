<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>


<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img src="<?= base_url('uploads/' . $barang->gambar) ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-6">
            <h1 class="text-primary"><?= $barang->nama ?></h1>
            <h3>Harga : <?= $barang->harga ?></h3>
            <h3>Stok : <?= $barang->stok ?></h3>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
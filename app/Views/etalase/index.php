<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <?php foreach ($barang as $b) : ?>
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-header">
                        <span class="text-primary"><strong><?= $b->nama ?></strong></span>
                    </div>
                </div>
                <div class="card-body">
                    <img class="img-thumbnail mx-auto d-block" style="max-height: 200px;" src="<?= base_url('uploads/' . $b->gambar) ?>" alt="<?= $b->gambar ?>">
                    <h5 class="mt-3 text-primary">
                        <?= 'Rp' . number_format($b->harga, 2, ',', ',') ?>
                    </h5>
                    <p class="text-info">
                        Stok: <?= $b->stok ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="<?= site_url('etalase/beli/' . $b->id) ?>" class="btn btn-primary" style="width: 100%;">Beli</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>
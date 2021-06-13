<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all bg-primary">
                        <span>Menu</span>
                    </div>
                    <ul>
                        <?php foreach ($barang as $b) : ?>
                            <li><a><?= $b->nama ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__item set-bg" style="background-color:rgba(0,0,0,0.3); position: relative;">
                    <div class="hero__text">
                        <span class="text-white">Cari Laptop Terbaik Disini!</span>
                        <h2>Laptop <br />100% Original</h2>
                        <p>Murah dan Terpercaya!</p>
                        <a href="<?= site_url('etalase/index') ?>" class="btn btn-primary">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
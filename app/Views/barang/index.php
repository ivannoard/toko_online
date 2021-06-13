<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>List Barang</h1>
    <table class="table">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php foreach ($barangs as $index => $barang) : ?>
                <tr>
                    <td><?= ($index + 1) ?></td>
                    <td><?= $barang->nama ?></td>
                    <td><img src="<?= base_url('uploads/' . $barang->gambar) ?>" alt="" class="img-fluid" width="200px"></td>
                    <td><?= $barang->harga ?></td>
                    <td><?= $barang->stok ?></td>
                    <td>
                        <a href="<?= site_url('barang/view/' . $barang->id) ?>" class="btn btn-primary">view</a>
                        <a href="<?= site_url('barang/update/' . $barang->id) ?>" class="btn btn-success">update</a>
                        <a href="<?= site_url('barang/delete/' . $barang->id) ?>" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
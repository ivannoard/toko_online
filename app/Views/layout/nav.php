<?php
$session = session();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Toko Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php if ($session->get('isLogin')) : ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('home/index') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Barang</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown1">
                        <a class="dropdown-item" href="<?= site_url('barang/index') ?>">List Barang</a>
                        <a class="dropdown-item" href="<?= site_url('barang/create') ?>">Tambah Barang</a>
                    </div>
                </li>
            </ul>
        <?php endif ?>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <?php if ($session->get('isLogin')) : ?>
                    <li class="nav-item active mx-1">
                        <a href="<?= site_url('auth/logout') ?>" class="btn btn-primary">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item active mx-1">
                        <a href="<?= site_url('auth/login') ?>" class="btn btn-primary">Login</a>
                    </li>
                    <li class="nav-item active mx-1">
                        <a href="<?= site_url('auth/register') ?>" class="btn btn-primary">Register</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
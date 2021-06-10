<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];
$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
$repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword',
    'class' => 'form-control'
];
$session = session();
$errors = $session->getFlashData('errors');
?>
<div class="container">
    <h1>Register Form</h1>
    <?php if ($errors != null) : ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">
                Terjadi Kesalahan
            </h4>
            <p class="mb-0">
                <?php foreach ($errors as $err) {
                    echo $err . "<br>";
                } ?>
            </p>
        </div>
    <?php endif; ?>
    <?= form_open('auth/register') ?>
    <div class="form-group">
        <?= form_label('Username', 'username') ?>
        <?= form_input($username) ?>
    </div>
    <div class="form-group">
        <?= form_label('Password', 'password') ?>
        <?= form_password($password) ?>
    </div>
    <div class="form-group">
        <?= form_label('Repeat Password', 'repeatPassword') ?>
        <?= form_password($repeatPassword) ?>
    </div>

    <div class="text-right">
        <?= form_submit('Submit', 'submit', ['class' => 'btn btn-primary']) ?>
    </div>


    <?= form_close() ?>
</div>
<?= $this->endSection() ?>
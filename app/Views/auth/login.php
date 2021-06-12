<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'placeholder' => 'Username',
    'value' => null,
    'class' => 'form-control'
];
$password = [
    'name' => 'password',
    'id' => 'password',
    'placeholder' => 'Password',
    'class' => 'form-control'
];
$repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword',
    'placeholder' => 'Repeat Password',
    'class' => 'form-control'
];
$session = session();
$errors = $session->getFlashData('errors');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>" />
    <title>Toko Online</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <?= form_open('auth/login', ['class' => 'sign-in-form']) ?>
                <h2 class="title">Sign in</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <?= form_input($username) ?>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <?= form_password($password) ?>
                </div>
                <div class="text-right">
                    <?= form_submit('Submit', 'submit', ['class' => 'btn solid']) ?>
                </div>
                <?= form_close() ?>

                <!-- Sign Up -->
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
                <?= form_open('auth/register', ['class' => 'sign-up-form']) ?>
                <h2 class="title">Sign up</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <?= form_input($username) ?>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <?= form_password($password) ?>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <?= form_password($repeatPassword) ?>
                </div>
                <div class="text-right">
                    <?= form_submit('Submit', 'submit', ['class' => 'btn solid']) ?>
                </div>
                <?= form_close() ?>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum Punya Akun ?</h3>
                    <p>
                        Daftar segera untuk berbelanja di toko kami!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                </div>
                <img src="<?= base_url('log.svg') ?>" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Punya Akun ?</h3>
                    <p>
                        Login dan belanja sepuasnya!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Login
                    </button>
                </div>
                <img src="<?= base_url('register.svg') ?>" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="<?= base_url('app.js') ?>"></script>
</body>

</html>
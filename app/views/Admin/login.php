<?php
$feedbackMsg = "";
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $user = $this->model('User_model')->getAllUsersByUsername($username);
    // jika user terdaftar
    if ($user) {
        // verifikasi password
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION["user"] = $user;
            header("Location: " . BASEURL . "/Admin");
        } else {
            $feedbackMsg = "Username/Password incorrect";
        }
    } else {
        $feedbackMsg = "Username/Password incorrect";
    }
}

date_default_timezone_set('Asia/Jakarta');
$time = date("H");
if ($time < "12") {
    $greet = "Good morning,";
} else if ($time >= "12" && $time < "17") {
    $greet = "Good afternoon,";
} else if ($time >= "17" && $time < "19") {
    $greet = "Good evening,";
} else if ($time >= "19") {
    $greet = "Good night,";
}

//kalo mau nambahin bole
$supportMsg = array(
    "Everything will be all right.",
    "Thank you so much for all your hard wor and support during this difficult time.",
    "Thank you for being our nation's guiding light in the face of this adversity",
    "Your humility, kindness, and strength are greatly appreciated."
);
try {
    $showMsg = $supportMsg[rand(0, count($supportMsg) - 1)];
} catch (Exception $e) {
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/admin_assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/admin_assets/css/components.css">
</head>

<body>
<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <a class="navbar-brand" href="<?= BASEURL; ?>/Home"><img
                                src="<?= BASEURL; ?>/assets/images/logo.png"
                                srcset="<?= BASEURL; ?>/assets/images/logo-2x.png 2x"
                                alt=""/></a>
                    <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Stisla</span>
                    </h4>
                    <p class="text-muted">Before you get started, you must login or register if you don't already have
                        an account.</p>
                    <form method="POST" class="needs-validation" novalidate="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" tabindex="1" required
                                   autofocus>
                            <div class="invalid-feedback">
                                Please fill in your username
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2"
                                   required>
                            <div class="invalid-feedback">
                                Please fill in your password
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                       id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <input type="submit" class="btn btn-primary btn-lg btn-icon btn-block" name="login"
                                   value="Login"/>
                            <p class="text-center"><?= $feedbackMsg; ?></p>
                        </div>

                        <div class="text-center mt-5 text-small">
                            Copyright &copy; Epidemic. Made with 💙 by Stisla
                            <div class="mt-2">
                                <a href="#">Privacy Policy</a>
                                <div class="bullet"></div>
                                <a href="#">Terms of Service</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                 data-background="<?= BASEURL; ?>/admin_assets/img/login-bg.jpg">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold"><?= $greet; ?></h1>
                            <h4 class="mb-5 display-7 font-weight-normal font-italic"><?= $showMsg; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= BASEURL; ?>/admin_assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="<?= BASEURL; ?>/admin_assets/js/scripts.js"></script>
<script src="<?= BASEURL; ?>/admin_assets/js/custom.js"></script>

<!-- Page Specific JS File -->
</body>
</html>

<?php
$feedbackMsg = "";
$required = array('name', 'email', 'phone_number', 'message');
$error = false;
if (isset($_POST['submit'])) {
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $error = true;
        }
    }
    if ($error) {
        $feedbackMsg = "Mohon lengkapi formulir terlebih dahulu";
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_VALIDATE_INT);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        $this->model('Message_model')->addMessage(
            $name,
            $email,
            $phone_number,
            $message
        );
        $feedbackMsg = "Permintaan berhasil dikirim";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="<?= BASEURL; ?>/assets/images/favicon.png" type="image/png"/>
    <title>COVID - 19</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/fontawesome/css/all.css"/>
    <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/linearicons/css/linearicons.css"/>
    <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/slick/slick.css"/>
    <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css"/>
    <link rel="stylesheet" href="<?= BASEURL; ?>/vendors/animate-css/animate.css"/>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css"/>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/responsive.css"/>
</head>
<body data-scroll-animation="true">
<div class="body_wrapper">

    <div class="preloader">
        <div class="three-bounce">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>
    </div>

    <div class="mobile_canvus_menu">
        <div class="close_btn">
            <img src="<?= BASEURL; ?>/assets/images/icon/close-dark.png" alt="">
        </div>
        <div class="menu_part_lux">
            <ul class="menu_list wd_scroll">
                <li><a href="<?= BASEURL; ?>/Home">Beranda</a></li>
                <li>
                    <a href="<?= BASEURL; ?>/Prevention">Pencegahan
                        <i class="linearicons-chevron-down"></i>
                    </a>
                    <ul class="list">
                        <li><a href="<?= BASEURL; ?>/Prevention/symptoms">Gejala Umum</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/symptom_checker">Periksa Gejala</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention">Pencegahan</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/virus_checker">Pemeriksaan Virus Corona</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/tracker">Tracker</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/faq">FAQS</a></li>
                    </ul>
                </li>
                <li><a href="<?= BASEURL; ?>/Appointment">Konsul Dokter</a></li>
                <li>
                    <a href="<?= BASEURL; ?>/Pages">Laman
                        <i class="linearicons-chevron-down"></i>
                    </a>
                    <ul class="list">
                        <li><a href="<?= BASEURL; ?>/Pages">Tentang</a></li>
                        <li><a href="<?= BASEURL; ?>/Pages/doctors">Dokter Kami</a></li>
                    </ul>
                </li>
                <li><a href="<?= BASEURL; ?>/Blog/1">Blog</a></li>
                <li><a href="<?= BASEURL; ?>/Contact">Kontak</a></li>
            </ul>
        </div>
        <div class="menu_btm">
            <a class="green_btn" href="<?= BASEURL; ?>/Prevention/symptom_checker"><i class="linearicons-pulse"></i>Cek
                Gejala</a>
        </div>
    </div>

    <div class="body_capture"></div>
    <section class="sidebar_widget scroll_body">
        <div class="info_sidebar_inner">
            <div class="close_btn">
                <img src="<?= BASEURL; ?>/assets/images/icon/close.png" alt="">
            </div>
            <ul class="nav info_social">
                <li>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                </li>
                <li>
                    <a href="https://www.vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                </li>
            </ul>
            <div class="info_title">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan, silakan isi kontak form di bawah ini.</p>
            </div>
            <form action="" class="appoinment_form js-form" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control" type="text" id="name" name="name" placeholder="" required/>
                            <label><i class="linearicons-user"></i>Nama Anda</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control" type="email" id="email" name="email" placeholder="" required/>
                            <label><i class="linearicons-envelope-open"></i>Alamat Email</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="form-control" type="tel" id="number" name="phone_number" placeholder=""
                                   required/>
                            <label><i class="linearicons-telephone"></i>Nomor HP</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                      required></textarea>
                            <label><i class="linearicons-document"></i>Pesan Anda</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group checkbox_field">
                            <div class="checkbox">
                                <input type="checkbox" value="None" id="squared2" name="check"/>
                                <label class="l_text" for="squared2">Saya menyetujui
                                    <span>Kebijakan Privasi</span></label>
                            </div>
                            <input type="submit" class="green_btn" name="submit" d="appoinment" value="Kirim"
                                   data-value="appoinment"/>
                        </div>
                    </div>
                    <label class="success-message"><?= $feedbackMsg; ?></label>
                </div>
            </form>
            <div class="info_footer">
                <p>© Copyright
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Epidemic Organisation Ltd.
                </p>
                <h6>
                    Designed with <i class="linearicons-heart"></i>
                    by <span>creakits</span>
                </h6>
            </div>
        </div>
    </section>

    <header class="header_area">
        <ul class="nav menu_social flex-column">
            <li>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?= BASEURL; ?>/Home"><img
                                src="<?= BASEURL; ?>/assets/images/logo.png"
                                srcset="<?= BASEURL; ?>/assets/images/logo-2x.png 2x"
                                alt=""/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li><a href="<?= BASEURL; ?>/Home">Beranda</a></li>
                            <li class="dropdown submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="<?= BASEURL; ?>/Prevention"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false">Pencegahan </a>
                                <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                   data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li class="dropdown submenu">
                                        <a class="dropdown-toggle" data-toggle="dropdown"
                                           href="<?= BASEURL; ?>/Prevention/symptoms"
                                           role="button" aria-haspopup="true" aria-expanded="false">Gejala
                                            <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                               data-toggle="dropdown"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= BASEURL; ?>/Prevention/symptoms">Gejala Umum</a></li>
                                            <li><a href="<?= BASEURL; ?>/Prevention/symptom_checker">Periksa Gejala</a>
                                            </li>
                                            <li><a href="<?= BASEURL; ?>/Prevention/">Pencegahan</a></li>
                                            <li><a href="<?= BASEURL; ?>/Prevention/virus_checker">Pemeriksaan Virus
                                                    Corona</a></li>
                                            <li><a href="<?= BASEURL; ?>/Prevention/tracker">Tracker</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= BASEURL; ?>/Prevention/faq">FAQS</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= BASEURL; ?>/Appointment">Konsul Dokter</a></li>
                            <li class="dropdown submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="true" aria-expanded="false">Laman</a>
                                <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                   data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= BASEURL; ?>/Pages">Tentang</a></li>
                                    <li><a href="<?= BASEURL; ?>/Pages/doctors">Dokter Kami</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= BASEURL; ?>/Blog/1">Blog</a></li>
                            <li><a href="<?= BASEURL; ?>/Contact">Kontak Kami</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="checker_btn">
                                <a href="<?= BASEURL; ?>/Prevention/symptom_checker"><i class="linearicons-pulse"></i>
                                    Cek Gejala</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="right_burger">
                <ul class="nav">
                    <li>
                        <div class="menu_btn">
                            <img src="<?= BASEURL; ?>/assets/images/icon/burger.png" alt=""/>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?= BASEURL; ?>/assets/images/favicon.png" type="image/png" />
    <title>COVID - 19</title>

    <link rel="stylesheet" href="css/bootstrap.css"/>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>
<div class="body_wrapper">

    <div class="preloader">
        <div class="three-bounce">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>
    </div>


    <div class="canvus_menu_area full_canvus">
        <div class="logo_part d-flex justify-content-end">
            <div class="right">
                <div class="close_btn">
                    <img src="<?= BASEURL; ?>/assets/images/icon/close-white.png" alt="">
                </div>
            </div>
        </div>
        <div class="menu_part_lux">
            <ul class="menu_list wd_scroll">
                <li><a href="index.php">Home</a></li>
                <li class="active">
                    <a href="index.php">Prevention
                        <i class="linearicons-chevron-down"></i>
                    </a>
                    <ul class="list">
                        <li><a href="symptom.html">Typical Symptoms</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/symptom_checker">Symptom Checker</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention">Prevention</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/virus_checker">Coronavirus Checker</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/tracker">Tracker</a></li>
                        <li><a href="maintenance.php">Maintenance</a></li>
                        <li><a href="<?= BASEURL; ?>/Prevention/faq">Faqs</a></li>
                    </ul>
                </li>
                <li><a href="<?= BASEURL; ?>/Appointment">Appointment</a></li>
                <li class="active">
                    <a href="#">Pages
                        <i class="linearicons-chevron-down"></i>
                    </a>
                    <ul class="list">
                        <li><a href="<?= BASEURL; ?>/Pages">About</a></li>
                        <li><a href="<?= BASEURL; ?>/Pages/doctors">Doctors</a></li>
                        <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
                        <li><a href="typography.html">Typhography</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li><a href="search-nothing.html">Not Found</a></li>
                        <li><a href="comingsoon.html">Coming Soon</a></li>
                        <li><a href="404.html">Error</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.php">Blog
                        <i class="linearicons-chevron-down"></i>
                    </a>
                    <ul class="list">
                        <li><a href="<?= BASEURL; ?>/Blog">Blog</a></li>
                        <li><a href="<?= BASEURL; ?>/Blog/single_blog">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="<?= BASEURL; ?>/Contact">Contact</a></li>
            </ul>
        </div>
    </div>


    <header class="header_area menu_tow just_burger_menu">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end">
                        <li class="menu_btn">
                            <img src="<?= BASEURL; ?>/assets/images/icon/burger-white.png" alt="">
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="coming_soon_area maintenece_area">
        <div class="overlay_bg" style="background: url(assets/images/maintenece_bg_map.png);background-position: center 0;"></div>
        <div class="container">
            <div class="coming_soon_content">
                <h2>Maintenance Mode</h2>
                <p>Our site currently under construction, we're creating something fantastic.</p>
                <h5>We'll let you know when we start</h5>
                <form action="#" class="mail_box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder=" Enter your email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="linearicons-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-right maintence_img">
                    <img src="<?= BASEURL; ?>/assets/images/maintenece_mood.png" alt="">
                </div>
                <div class="footer_copyright coming_soon_footer">
                    <ul class="nav">
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                        </li>
                    </ul>
                    <p>© Copyright
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Epidemic Organisation Ltd.
                    </p>
                    <h6>
                        Designed with <i class="linearicons-heart"></i>
                        by <span>creakits</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <img src="<?= BASEURL; ?>/assets/images/icon/close-white.png" alt="">
    </button>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="linearicons-magnifier"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.js"></script>

</body>

</html>
<section class="breadcrumb_area">
    <div class="container">
        <div class="breadcrumb_text">
            <h6 class="wow fadeInUp">From the Blog</h6>
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Recent updates</h3>
            <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="index.php">Home</a></li>
                <li><a href="<?= BASEURL; ?>/Blog/1">Blog</a></li>
            </ul>
        </div>
    </div>
</section>


<section class="blog_area">
    <div class="container">
        <div class="blog_menu">
            <div class="g_fillter">
                <ul class="nav justify-content-center">
                    <li class="active" data-filter="*">
                        <a href="#"><i class="linearicons-icons"></i></a>
                    </li>
                    <li data-filter=".comm"><a href="#">Political News</a></li>
                    <li data-filter=".medi"><a href="#">Medicine</a></li>
                    <li data-filter=".eff"><a href="#">Economic Effects </a></li>
                    <li data-filter=".pre"><a href="#">Prevention</a></li>
                    <li data-filter=".edu"><a href="#">Education</a></li>
                    <li data-filter=".quarantine"><a href="#">Quarantine</a></li>
                    <li data-filter=".health"><a href="#">Health</a></li>
                    <li data-filter=".travel"><a href="#">Travel</a></li>
                </ul>
            </div>
        </div>
        <div class="row blog_item_inner">

            <!--ngetes pake db-->
            <!--            --><? //=data['pages']?>
            <?php foreach ($data['blogs'] as $blog) : ?>
                <?php
                $date = date('j F Y', strtotime(str_replace("-", "/", $blog['date'])));
                $data['users'] = $this->model('User_model')->getAllUsersNameById($blog['authId']);
                $author_name = $data['users']['full_name'];
                ?>
                <div class="col-lg-6 comm travel edu quarantine">
                    <div class="big_l_blog_item">
                        <div class="l_blog_img">
                            <img class="img-fluid" src="<?= BASEURL; ?>/assets/storage/images/blog/default.jpg"
                                 alt=""/>
                        </div>
                        <div class="l_blog_text">
                            <div class="date">
                                <a><i class="linearicons-calendar-full"></i>
                                    <?= $date ?>
                                </a>
                                <a><i class="linearicons-bubbles"></i> 22</a>
                            </div>
                            <div class="blog_btm_text">
                                <div class="tag"><?= $blog['category'] ?></div>
                                <div class="author">
                                    <a>by <?= $author_name ?></a>
                                    <a><i class="linearicons-radio-button"></i> 4 min read</a>
                                </div>
                                <a href="<?= BASEURL; ?>/Blog/single_blog/<?= $blog['id'] ?>">
                                    <h3><?= $blog['title'] ?></h3>
                                </a>
                                <a class="text_btn" href="<?= BASEURL; ?>/Blog/single_blog/<?= $blog['id'] ?>">Read more
                                    <i class="linearicons-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!--end of ngetes pake db-->

        <div class="row blog_pagination">
            <div class="col-md-2">
                <?php if ($data['current_page'] > 1) { ?>
                    <a class="pagi_btn prev" href="<?= BASEURL; ?>/Blog/1"><i
                                class="linearicons-arrow-left"></i> Newest posts</a>
                <?php } ?>
            </div>
            <div class="col-md-8">
                <nav class="navigation" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">

                        <?php
                        if ($data['pages'] >= 0 && $data['pages'] <= 4) {
                            for ($i = 1; $i <= $data['pages']; $i++) {
                                if ($i == $data['current_page']) {
                                    ?>
                                    <li class="page-item active"><a class="page-link"
                                                                    href="<?= BASEURL; ?>/Blog/<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php } else { ?>
                                    <li class="page-item"><a class="page-link"
                                                             href="<?= BASEURL; ?>/Blog/<?= $i ?>"><?= $i ?></a></li>
                                <?php }
                            }
                        } else if ($data['pages'] > 4) {
                        if ($data['current_page'] == 1) { ?>
                        <li class="page-item active"><a class="page-link"
                                                        href="<?= BASEURL; ?>/Blog/1">1</a>
                        <li class="page-item"><a class="page-link"
                                                 href="<?= BASEURL; ?>/Blog/2">2</a>
                        <li class="page-item"><a class="page-link"
                                                 href="<?= BASEURL; ?>/Blog/3">3</a>
                            <?php } else if ($data['current_page'] == $data['pages']) { ?>
                        <li class="page-item"><a class="page-link"
                                                 href="<?= BASEURL; ?>/Blog/<?= $data['current_page'] - 2 ?>"><?= $data['current_page'] - 2 ?></a>
                        <li class="page-item"><a class="page-link"
                                                 href="<?= BASEURL; ?>/Blog/<?= $data['current_page'] - 1 ?>"><?= $data['current_page'] - 1 ?></a>
                        <li class="page-item active"><a class="page-link"
                                                        href="<?= BASEURL; ?>/Blog/<?= $data['current_page'] ?>"><?= $data['current_page'] ?></a>
                            <?php } else { ?>
                        <li class="page-item"><a class="page-link"
                                                 href="<?= BASEURL; ?>/Blog/<?= $data['current_page'] - 1 ?>"><?= $data['current_page'] - 1 ?></a>
                        <li class="page-item"><a class="page-link"
                                                 href="<?= BASEURL; ?>/Blog/<?= $data['current_page'] ?>"><?= $data['current_page'] ?></a>
                        <li class="page-item active"><a class="page-link"
                                                        href="<?= BASEURL; ?>/Blog/<?= $data['current_page'] + 1 ?>"><?= $data['current_page'] + 1 ?></a>
                            <?php }

                            } ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2 text-right">
                <?php if ($data['current_page'] < $data['pages']) { ?>
                    <a class="pagi_btn next" href="<?= BASEURL; ?>/Blog/<?= $data['pages'] ?>">Oldest posts <i
                                class="linearicons-arrow-right"></i></a>
                <?php } ?>
            </div>
        </div>
</section>


<section class="check_now_area check_now_box full_widget_check">
    <div class="container">
        <div class="row m-0 justify-content-between">
            <div class="left">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/check-4.png" alt="">
                        <img src="<?= BASEURL; ?>/assets/images/check-5.png" alt="">
                        <img src="<?= BASEURL; ?>/assets/images/check-6.png" alt="">
                    </div>
                    <div class="media-body">
                        <h4>Think you might be affected?</h4>
                        <p>
                            Try our simple coronavirus checker to find out what you need
                            to do.
                        </p>
                    </div>
                </div>
            </div>
            <div class="right">
                <a class="icon_btn" href="#">Check now <i class="linearicons-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="app_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="app_text">
                    <h2>Get <span>epidemic</span> app!</h2>
                    <p>
                        Download our app now, track Coronavirus cases real-time and
                        follow instant updates.
                    </p>
                    <a href="#"><img src="<?= BASEURL; ?>/assets/images/apple-btn.png" alt=""/></a>
                    <a href="#"><img src="<?= BASEURL; ?>/assets/images/google-btn.png" alt=""/></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="app_mobile">
                    <div class="mobile_image">
                        <img src="<?= BASEURL; ?>/assets/images/mobile-1.png" alt=""/>
                        <img src="<?= BASEURL; ?>/assets/images/mobile-2.png" alt=""/>
                    </div>
                    <ul class="corona_img nav">
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-1.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-2.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-3.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-4.png" alt=""/>
                        </li>
                        <li data-parallax='{"y": 100}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-5.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-6.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-7.png" alt=""/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
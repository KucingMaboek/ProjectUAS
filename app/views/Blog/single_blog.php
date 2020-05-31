<section class="single_blog_img">
    <div class="container">
        <div class="single_blog_text">
            <a class="tag" href="#"><?= $data['blog']['category'] ?></a>
            <h2><?= $data['blog']['title'] ?></h2>
            <ul class="nav">
                <?php
                $date = date('j F Y', strtotime(str_replace("-", "/", $data['blog']['date'])));
                $data['users'] = $this->model('User_model')->getAllUsersNameById($data['blog']['authId']);
                $author_name = $data['users']['full_name'];
                ?>
                <li><a href="#"><i class="linearicons-calendar-full"></i><?= $date ?></a></li>
                <li><a href="#"><i class="linearicons-bubbles"></i>22</a></li>
                <li><a href="#">by <?= $author_name ?></a></li>
                <li><a href="#"><i class="linearicons-radio-button" style="color: #01cfbe;"></i>4 min
                        read</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="single_blog_area">
    <div class="container">
        <div class="row single_blog_inner">
            <div class="col-lg-9">
                <div class="single_blog_text_inner">
                    <?= $data['blog']['content'] ?>
                    <!--default blog content-->

                    <!--                    <div class="single_first_text">-->
                    <!--                        <h6>Medical experts around the world are working around the clock to develop a vaccine-->
                    <!--                            for COVID-19 as it continues to spread around the globe. But how are vaccines made-->
                    <!--                            and-->
                    <!--                            when are we likely to have one for coronavirus? We all know that vaccines exist for-->
                    <!--                            other-->
                    <!--                            viruses, like flu, but COVID-19 is a new illness that experts haven't seen before.-->
                    <!--                        </h6>-->
                    <!--                        <div class="media">-->
                    <!--                            <div class="d-flex">-->
                    <!--                                <span>D</span>-->
                    <!--                            </div>-->
                    <!--                            <div class="media-body">-->
                    <!--                                <p>r Diana Gall of Doctor 4 U, and Mr Parvinder Sagoo, pharmacist and clinical-->
                    <!--                                    advisor at Vaxxy, explain how vaccines are made, how coronavirus is being-->
                    <!--                                    mapped and when we will see a vaccine for Coronavirus COVID-19.-->
                    <!--                                </p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <p>A huge amount of misinformation about vaccines is often shared on social media,-->
                    <!--                            causing unnecessary concern around their safety. Myths about vaccines causing autism-->
                    <!--                            or containing heavy metals that can poison the body are scientifically unfounded.-->
                    <!--                            Vaccines are safe and the best way we can protect the population from disease.-->
                    <!--                            That's why the creation of a coronavirus vaccine is so important to control the-->
                    <!--                            pandemic.-->
                    <!--                        </p>-->
                    <!--                    </div>-->
                    <!--                    <div class="secand_part">-->
                    <!--                        <h4>How are vaccines made?</h4>-->
                    <!--                        <p>The most common way to make a vaccine involves using the virus antigen itself, Dr-->
                    <!--                            Gall explains. "In any vaccine, the strain of virus that needs an immunisation must-->
                    <!--                            be identified before anything can be done. However, once the strain is identified,-->
                    <!--                            the antigen is isolated and either weakened or made inactive through a chemical-->
                    <!--                            process," she-->
                    <!--                        </p>-->
                    <!--                        <h5>Virus proteins that are used to create vaccines are sometimes grown in cells that-->
                    <!--                            come from chicken embryos, or alternatively, they can be grown in a bioreactor like-->
                    <!--                            a Petri dish.-->
                    <!--                        </h5>-->
                    <!--                        <p>When a virus is weakened or inactive, it can't reproduce in order to cause illness,-->
                    <!--                            but the body's immune system can still create antibodies to fight it off. That way,-->
                    <!--                            if you do come into contact with an active form of the virus, your body should be-->
                    <!--                            equipped to fight it before it makes you ill.-->
                    <!--                        </p>-->
                    <!--                    </div>-->
                    <!--                    <div class="secand_part">-->
                    <!--                        <h4>Vaccines in an outbreak</h4>-->
                    <!--                        <p>During unprecedented times, like the current coronavirus outbreak, vaccines must-->
                    <!--                            still go through the same process, but because the demand is higher a fast-tracked-->
                    <!--                            process is usually possible.-->
                    <!--                        </p>-->
                    <!--                        <p>"Right now, health professionals around the globe are racing against the clock to get-->
                    <!--                            a vaccine for this virus. However, the issue is that creating a vaccine takes time.-->
                    <!--                            However, the fact that all efforts from health professionals around the globe will-->
                    <!--                            be focused on getting a vaccine could quicken the process," Mr Sagoo says.-->
                    <!--                        </p>-->
                    <!--                        <p>But in order to do this, scientists need to identify the exact strain of the virus-->
                    <!--                            causing the pandemic.-->
                    <!--                        </p>-->
                    <!--                        <p>"Before any vaccine can be produced, the exact strain causing the epidemic or-->
                    <!--                            pandemic must be identified and isolated, as with any other vaccine production," Dr-->
                    <!--                            Gall explains.-->
                    <!--                        </p>-->
                    <!--                        <img class="img-fluid" src="-->
                    <? //= BASEURL; ?><!--/assets/images/blog/single-blog-1.jpg" alt="">-->
                    <!--                        <p class="source">Source: The Guardian</p>-->
                    <!--                        <p>"Unfortunately, even in cases where an immunisation is desperately needed, it can-->
                    <!--                            take a long time to create one, and certain processes can only be accelerated so-->
                    <!--                            much before safety is compromised.-->
                    <!--                        </p>-->
                    <!--                        <p>"Any vaccine, including those made for a mass outbreak, are produced in the same-->
                    <!--                            ways. However, Moderna, the company behind one of the current vaccines being-->
                    <!--                            trialled for COVID-19, uses mRNA technology - a faster method than traditional-->
                    <!--                            vaccines."-->
                    <!--                        </p>-->
                    <!--                        <p>Messenger RNA (mRNA) is a molecule found in cells which carries DNA codes from the-->
                    <!--                            nucleus to the cytoplasm, where a process called protein synthesis is carried out.-->
                    <!--                        </p>-->
                    <!--                        <p>"The DNA sequence of the virus is transcribed into mRNA, meaning that the actual-->
                    <!--                            antigen of the virus itself isn't included in the vaccine,. Despite that, it still-->
                    <!--                            contains everything that the body needs to create specific antibodies to fight off-->
                    <!--                            the virus."-->
                    <!--                        </p>-->
                    <!--                    </div>-->

                    <!--end of default page content-->

                    <div class="single_blog_bottom">
                        <div class="row m-0 justify-content-between">
                            <div class="left">
                                <ul class="nav">
                                    <li><a href="#">vaccine</a></li>
                                    <li><a href="#">medicine</a></li>
                                    <li><a href="#">coronavirus</a></li>
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fas fa-envelope-open-text"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post_navigation row">
                        <div class="col-6">
                            <?php
                            $total = count($this->model('Blog_model')->getAllBlogs());
                            if ($data['blog']['id'] != 1) {
                                $data['previous_blog'] = $this->model('Blog_model')->getAllBlogsById($data['blog']['id'] - 1); ?>
                                <a href="<?= BASEURL; ?>/Blog/single_blog/<?=$data['blog']['id']-1?>"><i class="linearicons-arrow-left"></i> Previous post</a>
                                <h4><?= $data['previous_blog']['title'] ?></h4>
                            <?php } ?>
                        </div>
                        <div class="col-6 text-right">
                            <?php
                            if ($data['blog']['id'] != $total) {
                                $data['next_blog'] = $this->model('Blog_model')->getAllBlogsById($data['blog']['id'] + 1); ?>
                                <a href="<?= BASEURL; ?>/Blog/single_blog/<?=$data['blog']['id']+1?>">Next post <i class="linearicons-arrow-right"></i></a>
                                <h4><?= $data['next_blog']['title'] ?></h4>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="post_author">
                        <div class="media">
                            <div class="d-flex">
                                <img class="rounded-circle" src="<?= BASEURL; ?>/assets/images/author.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Sheryl Smith</h4>
                                <h6>Pharmaceutical expert</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ullam corporis
                                    suscipit laboriosam, nisi ut aliquid exam.
                                </p>
                                <a class="post" href="#"><i class="linearicons-papers"></i> Articles</a>
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-medium-m"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="s_comment_list">
                        <h3 class="cm_title_br">5 Comments</h3>
                        <div class="s_comment_list_inner">
                            <div class="media">
                                <div class="d-flex">
                                    <img class="rounded-circle"
                                         src="<?= BASEURL; ?>/assets/images/comment/comment-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h4>Rebecca Sterling</h4>
                                    </a>
                                    <p>
                                        Similique sunt in culpa qui officia deserunt mollitia animi, id est
                                        laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
                                        distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                                        cumque nihil impedit quo minus id quod maxime placeat.
                                    </p>
                                    <h6><i class="linearicons-clock3"></i> 3 hours ago</h6>
                                    <a class="text_btn" href="#">Reply <i class="linearicons-arrow-right"></i></a>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                 src="<?= BASEURL; ?>/assets/images/comment/comment-2.png"
                                                 alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>Robert Kane</h4>
                                            </a>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                dolores et quas molestias excepturi sint occaecati cupiditate
                                                non provident.
                                            </p>
                                            <h6><i class="linearicons-clock3"></i> 22 mins ago</h6>
                                            <a class="text_btn" href="#">Reply
                                                <i class="linearicons-arrow-right"></i>
                                            </a>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img class="rounded-circle"
                                                         src="<?= BASEURL; ?>/assets/images/comment/comment-3.png"
                                                         alt="">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4>Liu Jackson</h4>
                                                    </a>
                                                    <p>
                                                        Similique sunt in culpa qui officia deserunt mollitia
                                                        animi...
                                                    </p>
                                                    <h6><i class="linearicons-clock3"></i> 8 mins ago</h6>
                                                    <a class="text_btn" href="#">Reply <i
                                                                class="linearicons-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img class="rounded-circle"
                                         src="<?= BASEURL; ?>/assets/images/comment/comment-4.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h4>Ian Gorkovszkij</h4>
                                    </a>
                                    <p>
                                        Harum quidem rerum facilis est et expedita distinctio. Nam libero
                                        tempore, cum soluta nobis est eligendi optio cumque nihil impedit.
                                        Temporibus autem quibusdam et aut officiis debitis aut rerum
                                        necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                        molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente
                                        delectus, ut aut reiciendis voluptatibus.
                                    </p>
                                    <h6><i class="linearicons-clock3"></i> 1 day ago</h6>
                                    <a class="text_btn" href="#">Reply <i class="linearicons-arrow-right"></i></a>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="rounded-circle"
                                                 src="<?= BASEURL; ?>/assets/images/comment/comment-5.png"
                                                 alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>Naomi Hill</h4>
                                            </a>
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligendi optio...
                                            </p>
                                            <h6><i class="linearicons-clock3"></i> 3 hours ago</h6>
                                            <a class="text_btn" href="#">Reply
                                                <i class="linearicons-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment_box">
                        <h3 class="cm_title_br">Leave your reply</h3>
                        <form class="row contact_us_form appoinment_form"
                              action="http://paul-themes.com/html/covid-19/contact_process.php" id="contactForm"
                              novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="name" name="name" placeholder=""/>
                                    <label><i class="linearicons-user"></i>Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="email" name="email" placeholder=""/>
                                    <label><i class="linearicons-envelope-open"></i>Your Email
                                        Address</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="subject" name="subject"
                                           placeholder=""/>
                                    <label><i class="linearicons-document"></i>
                                        Subject</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                                  class="form-control"></textarea>
                                    <label><i class="linearicons-pencil4"></i>Your Message</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group checkbox_field">
                                    <div class="checkbox">
                                        <input type="checkbox" value="None" id="policy" name="check"/>
                                        <label class="l_text" for="policy">Save my name, email, and website in
                                            this browser for the next time I comment.</label>
                                    </div>
                                    <button type="submit" class="green_btn">
                                        Post Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right_sidebar">
                    <aside class="right_widget ct_widget">
                        <div class="r_wd_title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="nav flex-column">
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Political News
                                    <span>(17)</span></a></li>
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Medicine
                                    <span>(29)</span></a></li>
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Economic Effects
                                    <span>(8)</span></a></li>
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Prevention
                                    <span>(33)</span></a></li>
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Education
                                    <span>(27)</span></a></li>
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Quarantine
                                    <span>(9)</span></a></li>
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Health <span>(18)</span></a>
                            </li>
                            <li><a href="#"><i class="linearicons-arrow-right"></i>Travel <span>(5)</span></a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="right_widget subs_widget">
                        <img src="<?= BASEURL; ?>/assets/images/subscribe-widget-bg.jpg" alt="">
                        <div class="subs_text">
                            <i class="linearicons-envelope-open"></i>
                            <h4>Stay updated</h4>
                            <p>Join our subscribers list to get latest news</p>
                            <a class="subs_btn" href="#">Subscribe</a>
                        </div>
                    </aside>
                    <aside class="right_widget post_widget">
                        <div class="r_wd_title">
                            <h3>Trending Posts</h3>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="<?= BASEURL; ?>/assets/images/blog/tranding-post/post-1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>What is shielding and who needs it?</h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="<?= BASEURL; ?>/assets/images/blog/tranding-post/post-2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>What to do if you need to see a GP or get medication?</h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="<?= BASEURL; ?>/assets/images/blog/tranding-post/post-3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Do you need to disinfect your home?</h4>
                            </div>
                        </div>
                    </aside>
                    <aside class="right_widget tag_widget">
                        <div class="r_wd_title">
                            <h3>Popular Tags</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">vaccine</a></li>
                            <li><a href="#">coronavirus</a></li>
                            <li><a href="#">covid</a></li>
                            <li><a href="#">sars ncov</a></li>
                            <li><a href="#">elderly</a></li>
                            <li><a href="#">senior</a></li>
                            <li><a href="#">pregnancy</a></li>
                            <li><a href="#">economical</a></li>
                            <li><a href="#">c19</a></li>
                            <li><a href="#">stayathome</a></li>
                            <li><a href="#">school</a></li>
                        </ul>
                    </aside>
                    <aside class="right_widget wash_widget">
                        <h6>Hand washing process</h6>
                        <h3>How to wash your hands properly</h3>
                        <p>Are you washing your hands properly? Most of us know how important it is to practise
                            good hand hygiene. But just because you're washing your hands often, doesn't mean
                            that you're washing them well.
                        </p>
                        <a class="text_btn" href="#">View more <i class="linearicons-arrow-right"></i></a>
                    </aside>
                    <aside class="right_widget archive_widget ct_widget">
                        <div class="r_wd_title">
                            <h3>Archive</h3>
                        </div>
                        <ul class="nav flex-column">
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Apr 2020
                                    <span>(49)</span></a></li>
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Marc 2020
                                    <span>(40)</span></a></li>
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Feb 2020
                                    <span>(32)</span></a></li>
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Jan 2020
                                    <span>(26)</span></a></li>
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Dec 2019
                                    <span>(7)</span></a></li>
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Nov 2019
                                    <span>(0)</span></a></li>
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Oct 2019
                                    <span>(0)</span></a></li>
                            <li><a href="#"><i class="linearicons-calendar-text"></i>Sept 2019
                                    <span>(0)</span></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="related_posts_area">
    <div class="container">
        <div class="main_title text-center">
            <h5>Related posts</h5>
            <h2>You may also like</h2>
        </div>
        <div class="row related_post_inner">
            <div class="col-lg-4 col-md-6">
                <div class="small_l_blog_item">
                    <div class="l_blog_img">
                        <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/blog/related-post/post-1.jpg" alt="">
                    </div>
                    <div class="l_blog_text">
                        <div class="date">
                            <a href="#"><i class="linearicons-calendar-full"></i> Apr 11, 2020</a>
                            <a href="#"><i class="linearicons-bubbles"></i> 39</a>
                        </div>
                        <a href="#">
                            <h3>What is an underlying health condition?</h3>
                        </a>
                        <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="small_l_blog_item">
                    <div class="l_blog_img">
                        <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/blog/related-post/post-2.jpg" alt="">
                    </div>
                    <div class="l_blog_text">
                        <div class="date">
                            <a href="#"><i class="linearicons-calendar-full"></i> Apr 11, 2020</a>
                            <a href="#"><i class="linearicons-bubbles"></i> 39</a>
                        </div>
                        <a href="#">
                            <h3>What is an underlying health condition?</h3>
                        </a>
                        <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="small_l_blog_item">
                    <div class="l_blog_img">
                        <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/blog/related-post/post-3.jpg" alt="">
                    </div>
                    <div class="l_blog_text">
                        <div class="date">
                            <a href="#"><i class="linearicons-calendar-full"></i> Apr 11, 2020</a>
                            <a href="#"><i class="linearicons-bubbles"></i> 39</a>
                        </div>
                        <a href="#">
                            <h3>What is an underlying health condition?</h3>
                        </a>
                        <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                    </div>
                </div>
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
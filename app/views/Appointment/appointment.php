<section class="breadcrumb_area boi_breadcrumb">
    <div class="container">
        <div class="breadcrumb_text">
            <h6 class="wow fadeInUp">Consult our epidemiological experts</h6>
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Online Skype Consultation</h3>
            <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="index.php">Home</a></li>
                <li><a href="<?= BASEURL; ?>/Pages/doctors">Appointment</a></li>
            </ul>
        </div>
        <div class="row appointment_box">
            <div class="col-lg-4 appoinment_features">
                <div class="shape one" data-parallax='{"y": 100}'>
                    <img src="<?= BASEURL; ?>/assets/images/appoinment/a_img1.png" alt=""/>
                </div>
                <div class="shape two">
                    <img src="<?= BASEURL; ?>/assets/images/appoinment/a_img2.png" alt=""/>
                </div>
                <div class="shape three">
                    <img src="<?= BASEURL; ?>/assets/images/appoinment/a_img3.png" alt=""/>
                </div>
                <div class="shape four" data-parallax='{"x": 30}'>
                    <img src="<?= BASEURL; ?>/assets/images/appoinment/a_img4.png" alt=""/>
                </div>
                <div class="shape five">
                    <img src="<?= BASEURL; ?>/assets/images/appoinment/a_img5.png" alt=""/>
                </div>
                <div class="shape six" data-parallax='{"y": 50}'>
                    <img src="<?= BASEURL; ?>/assets/images/appoinment/a_img6.png" alt=""/>
                </div>
                <h2>Make an appointment</h2>
                <p>
                    Fill out the form to request an online appointment and our staff
                    will contact you immediately.
                </p>
                <div class="media appoinment_features_item">
                    <i class="linearicons-medal-empty"></i>
                    <div class="media-body">
                        <h6>Reputable experts</h6>
                        <p>Our doctors are world famous</p>
                    </div>
                </div>
                <div class="media appoinment_features_item">
                    <i class="linearicons-clipboard-check"></i>
                    <div class="media-body">
                        <h6>Smart advice</h6>
                        <p>We’ll give you useful tips</p>
                    </div>
                </div>
                <div class="media appoinment_features_item">
                    <i class="linearicons-tags"></i>
                    <div class="media-body">
                        <h6>100% FREE</h6>
                        <p>Don’ worry about the cost</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form action="#" class="appoinment_form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_name" name="a_name" placeholder=""/>
                                <label><i class="linearicons-user"></i>Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_email" name="a_email" placeholder=""/>
                                <label><i class="linearicons-envelope-open"></i>Your Email
                                    Address</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="skype" name="skype" placeholder=""/>
                                <label><i class="fab fa-skype"></i>Your Skype ID</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_number" name="a_number"
                                       placeholder=""/>
                                <label><i class="linearicons-telephone"></i>Your Phone
                                    Number</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group input-group date" id="datetimepicker3"
                                 data-target-input="nearest">
                                <div class="input-group-append" data-target="#datetimepicker3"
                                     data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <i class="linearicons-calendar-text"></i>
                                    </div>
                                </div>
                                <div class="text_div">
                                    Choose date
                                </div>
                                <input type="text" class="form-control datetimepicker-input"
                                       data-target="#datetimepicker3" data-toggle="datetimepicker"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group input-group date" id="datetimepicker4"
                                 data-target-input="nearest">
                                <div class="input-group-append" data-target="#datetimepicker4"
                                     data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <i class="linearicons-alarm2"></i>
                                    </div>
                                </div>
                                <div class="text_div">
                                    Choose time
                                </div>
                                <input type="text" class="form-control datetimepicker-input"
                                       data-target="#datetimepicker4" data-toggle="datetimepicker"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="subject" name="subject" placeholder=""/>
                                <label><i class="linearicons-document"></i>Add your
                                    subject</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group select_conversation_inner">
                                <h6>Choose method of conversation</h6>
                                <div class="select_conversation">
                                    <input type="radio" name="conversation" id="voice" value="voice"/>
                                    <label for="voice">Voice</label>
                                </div>
                                <div class="select_conversation">
                                    <input type="radio" name="conversation" id="video" value="video"/>
                                    <label for="video">Video</label>
                                </div>
                                <div class="select_conversation">
                                    <input type="radio" name="conversation" id="chat" value="chat"/>
                                    <label for="chat">Chat</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <textarea name="a_message" id="a_message" cols="30" rows="10"
                                              class="form-control"></textarea>
                                <label><i class="linearicons-pencil4"></i>Your Message</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <div class="checkbox">
                                    <input type="checkbox" value="None" id="squared2" name="check"/>
                                    <label class="l_text" for="squared2">I accept the <span>Privacy Policy</span>
                                        and the
                                        <span>Term of Use.</span></label>
                                </div>
                                <button type="submit" class="green_btn" value="appoinment" data-value="appoinment">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="work_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="work_content">
                    <div class="main_title">
                        <h5>It’s so simple</h5>
                        <h2>How it works?</h2>
                    </div>
                    <ol class="work_list">
                        <li class="wow fadeInUp" data-wow-delay="0.1s">Enter your contact details so we can add you
                            on Skype
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.2s">Select date and time, when we can call you
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s">Select method of conversation</li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s">Add your subject, that we will talk about on
                            consulting
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.5s">Describe briefly how we can help you</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img data-wow-delay="400ms" class="img-fluid wow fadeInRight"
                     src="<?= BASEURL; ?>/assets/images/appoinment/works.png" alt="">
            </div>
        </div>
    </div>
</section>


<section class="client_logo_area pad_top">
    <div class="container">
        <div class="client_slider">
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-1.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-2.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-3.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-4.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-5.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-6.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-1.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-2.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-3.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-4.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-5.png" alt=""/>
            </div>
            <div class="item">
                <img src="<?= BASEURL; ?>/assets/images/client-logo/client-logo-6.png" alt=""/>
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
                        <img src="<?= BASEURL; ?>/assets/images/check-4.png" alt=""/>
                        <img src="<?= BASEURL; ?>/assets/images/check-5.png" alt=""/>
                        <img src="<?= BASEURL; ?>/assets/images/check-6.png" alt=""/>
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
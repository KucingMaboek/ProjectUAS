<section class="breadcrumb_area">
    <div class="container">
        <div class="breadcrumb_text">
            <h6 class="wow fadeInUp">Kontak Kami</h6>
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Hubungi Kami</h3>
            <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="<?= BASEURL; ?>/Contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</section>


<section class="contact_area">
    <div class="container">
        <div class="row contact_details">
            <!-- <div class="col-lg-3 col-6">
                <div class="contact_details_item wow fadeInLeft" data-wow-delay="0.2s">
                    <i class="linearicons-map-marker"></i>
                    <h4>Address</h4>
                    <p>78-66 State Route 33, Brighton VIC 3186, AUSTRALIA</p>
                </div>
            </div> -->
            <!-- <div class="col-lg-3 col-6">
                <div class="contact_details_item  wow fadeInLeft" data-wow-delay="0.3s">
                    <i class="linearicons-home4"></i>
                    <h4>Our Office</h4>
                    <p>Level 13, 2 Elizabeth St., Melbourne, VIC 3000, AUSTRALIA</p>
                </div>
            </div> -->
            <div class="col-lg-3 col-6">
                <div class="contact_details_item  wow fadeInLeft" data-wow-delay="0.4s">
                    <i class="linearicons-telephone"></i>
                    <h4>COVID-19 HOTLINE</h4>
                    <a href="tel:+8801676790690">
                        <h6>911</h6>
                    </a>
                    <!-- <a href="tel:+8801676790690">
                        <h6>Service: +61 (3) 7734 7857</h6>
                    </a> -->
                </div>
            </div>
            <!-- <div class="col-lg-3 col-6">
                <div class="contact_details_item  wow fadeInLeft" data-wow-delay="0.5s">
                    <i class="linearicons-envelope-open"></i>
                    <h4>Email</h4>
                    <a href="http://paul-themes.com/cdn-cgi/l/email-protection#9ceef3fff7e5fef8ada5a5a9dcfbf1fdf5f0b2fff3f1">
                        <h6><span class="__cf_email__" data-cfemail="56252326263924221633263f32333b3f3578392431">[email&#160;protected]</span>
                        </h6>
                    </a>
                    <a href="http://paul-themes.com/cdn-cgi/l/email-protection#a3d1ccc0c8dac1c7929a9a96e3c4cec2cacf8dc0ccce">
                        <h6><span class="__cf_email__" data-cfemail="a6cecfe6c3d6cfc2c3cbcfc588c9d4c1">[email&#160;protected]</span>
                        </h6>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="contact_form_inner">
            <form class="row contact_us_form appoinment_form js-form">
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" id="name" name="name" placeholder="" required/>
                        <label class="top_text"><i class="linearicons-user"></i>Nama Anda</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" id="email" name="email" placeholder="" required/>
                        <label class="top_text"><i class="linearicons-envelope-open"></i>Alamat Email</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" id="number" name="number" placeholder="" required/>
                        <label class="top_text"><i class="linearicons-telephone"></i>Nomor HP</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                      required></textarea>
                        <label class="top_text"><i class="linearicons-pencil4"></i>Isi Pesan</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group checkbox_field">
                        <div class="checkbox">
                            <input type="checkbox" value="None" id="policy" name="check"/>
                            <label class="l_text" for="policy">Saya menyetujui <span>Kebijakan Privasi</span>
                                dan
                                <span>Syarat Penggunaan.</span></label>
                        </div>
                        <button type="submit" value="submit" class="green_btn">
                            Kirim Pesan
                        </button>
                    </div>
                </div>
                <div class="success-message">
                    <i class="fa fa-check text-primary"></i> Terima kasih! Pesan Anda berhasil terkirim...
                </div>
                <div class="error-message">Maaf, ada sedikit kesalahan</div>
            </form>
        </div>
    </div>
</section>


<!-- <section class="map_area">
    <div id="mapBox" class="mapBox row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12"
         data-marker="<?= BASEURL; ?>/assets/images/map-marker.png" data-info="54B, Tailstoi Town 5238 La city, IA 522364"
         data-mlat="40.701083" data-mlon="-74.1522848">
    </div>
</section>


<section class="subscribe_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="linearicons-mailbox-full"></i>
                    </div>
                    <div class="media-body">
                        <h4>Subscribe our newsletter</h4>
                        <p>
                            Join our subscribers list to get latest news and updates
                            about COVID-19 delivered directly in your inbox.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mail_box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="&#xe997; Enter your email"
                               aria-label="Recipient's username" aria-describedby="button-addon2"/>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="linearicons-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <label class="container-checkbox">I accept the <span>Privacy Policy.</span>
                        <input type="checkbox"/>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</section> -->

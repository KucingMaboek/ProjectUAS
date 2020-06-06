<section class="home_banner_area">
    <div class="container">
        <div class="row home_banner_inner">
            <div class="col-sm-7">
                <h5 class="wow fadeInUp" data-wow-delay="300ms">Stop COVID-19</h5>
                <h3 class="wow fadeInUp" data-wow-delay="500ms">Bagaimana kita dapat melawan Virus Corona bersama?
                </h3>
                <p class="wow fadeInUp" data-wow-delay="400ms">
                    Sebagai masyarakat global kita memiliki peran untuk
                    <br/>bersama-sama menghentikan penyebaran virus corona<br/>
                    yang secara resmi telah mencapai titik pandemi.
                </p>
                <a class="main_btn wow fadeInLeft" data-wow-delay="300ms" href="#">Yuk, cegah bersama!</a>
                <div class="row home_option">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="300ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-shield-check"></i>
                            </div>
                            <div class="media-body">
                                <h4>Perlindungan</h4>
                                <p>Lindungi diri dan keluarga</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-pulse"></i>
                            </div>
                            <div class="media-body">
                                <h4>Gejala</h4>
                                <p>Kenali gejala dasar COVID</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="500ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-bubbles"></i>
                            </div>
                            <div class="media-body">
                                <h4>Konsul Dokter</h4>
                                <p>Dapatkan konsultasi online</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="600ms">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-document2"></i>
                            </div>
                            <div class="media-body">
                                <h4>Terkait COVID-19</h4>
                                <p>Pelajari lebih lanjut virus corona</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <img class="img-fluid wow fadeInRight" data-wow-delay="400ms"
                     src="<?= BASEURL; ?>/assets/images/svg/home-banner-cleaner.svg" alt=""/>
            </div>
        </div>
    </div>
</section>


<section class="check_now_area">
    <div class="container">
        <div class="row m-0 justify-content-between">
            <div class="left">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/check-1.png" alt=""/>
                        <img src="<?= BASEURL; ?>/assets/images/check-2.png" alt=""/>
                        <img src="<?= BASEURL; ?>/assets/images/check-3.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h4>Apakah Anda terinfeksi?</h4>
                        <p>
                            Cek gejala COVID disini untuk mengetahui langkah lanjut yang harus Anda lakukan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="right">
                <a class="icon_btn wow fadeInRight" data-wow-delay="400ms" href="#">Cek Sekarang <i
                            class="linearicons-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="home_about_corona">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="home_ab_img wow fadeInUp" data-wow-delay="400ms">
                    <img src="<?= BASEURL; ?>/assets/images/home-ab-img.png" alt=""/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home_ab_text">
                    <div class="home_ab_text_inner">
                        <div class="home_ab_item">
                            <h6>Penyakit COVID-19</h6>
                            <h4>Terkait Virus Corona</h4>
                            <p>
                                Virus Corona atau Severe Acute Respiratory Syndrome Coronavirus 2
                                <br>(SARS-CoV-2) adalah virus yang menyerang sistem pernapasan.
                                Dapat menyebabkan gangguan ringan pada sistem pernapasan, infeksi
                                paru-paru berat hingga kematian.
                                Penyakit ini pertama kali ditemukan tahun 2019 di Wuhan, Ibukota Hubei,
                                China dan menyebar secara global menjadi pandemi 2019-2020.
                            </p>
                        </div>
                        <div class="home_ab_item">
                            <h4>Apa itu COVID-19?</h4>
                            <p>
                                COVID-19 adalah jenis baru coronavirus yang belum pernah
                                diidentifikasi pada manusia. Ini pertama kali diidentifikasi
                                di Wuhan, Provinsi Hubei, Cina, di mana telah menyebabkan
                                wabah besar dan berkelanjutan. Sejak itu menyebar lebih luas di Cina.
                            </p>
                            <a class="text_btn" href="#">Read more about <i class="linearicons-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="world_wide_tracker pad_top">
    <div class="container">
        <img class="tracker_map" src="<?= BASEURL; ?>/assets/images/tracker-map-bg.png" alt=""/>
        <div class="tracker_text">
            <h5>Worldwide Tracker</h5>
            <h2>Kasus COVID Terkonfirmasi</h2>
            <p>Update Terakhir: <?= date("j M Y") ?></p>
        </div>
        <div class="row tracker_inner">
            <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="300">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-red-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="total_cases"></h2>
                        <p>Total Kasus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="400">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-black-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="total_deaths"></h2>
                        <p>Total Kematian</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="500">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-green-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="total_recovered"></h2>
                        <p>Sembuh</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="600">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-yellow-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="new_cases"></h2>
                        <p>Kasus Baru</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="tracker_btn">
            <a class="green_btn wow fadeInUp" data-wow-delay="500" href="#"><i class="linearicons-earth-lock"></i>
                See
                Live
                Track</a>
        </div> -->
    </div>
</section>


<section class="symptoms_area">
    <div class="container">
        <ul class="nav image_list">
            <li><img src="<?= BASEURL; ?>/assets/images/symptoms-user/sm-1.png" alt=""></li>
            <li><img src="<?= BASEURL; ?>/assets/images/symptoms-user/sm-2.png" alt=""></li>
            <li><img src="<?= BASEURL; ?>/assets/images/symptoms-user/sm-3.png" alt=""></li>
        </ul>
        <div class="title_text wow fadeInUp" data-wow-delay="400ms">
            <h5>Gejala COVID-19</h5>
            <h2>Apa saja gejala dasarnya?</h2>
        </div>
        <div class="row symptoms_inner">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="<?= BASEURL; ?>/assets/images/symptoms-user/symptoms-1.png" alt=""/>
                        </div>
                        <div class="media-body">
                            <h4>Demam Tinggi</h4>
                            <p>
                                Menurut para ahli, demam adalah gejala utama.
                                Termasuk demam jika suhu tubuh setidaknya mencapa 39°C.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="<?= BASEURL; ?>/assets/images/symptoms-user/symptoms-2.png" alt=""/>
                        </div>
                        <div class="media-body">
                            <h4>Sesak Napas</h4>
                            <p>
                                Anda merasakan panas saat menyentuh dada maupun punggung.
                                Hal ini menrupakan gejala umum dan akan muncul dalam 2-10 hari jika Anda terinfeksi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="<?= BASEURL; ?>/assets/images/symptoms-user/symptoms-3.png" alt=""/>
                        </div>
                        <div class="media-body">
                            <h4>Batuk Kering</h4>
                            <p>
                                Batuk merupakan gejala utama lainnya, tetapi bukan sembarang batuk.
                                Hal ini berupa batuk kering yang sangat terasa di dada.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="700ms">
                <div class="symptoms_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="<?= BASEURL; ?>/assets/images/symptoms-user/symptoms-4.png" alt=""/>
                        </div>
                        <div class="media-body">
                            <h4>Sakit Kepala</h4>
                            <p>
                                Sekitar 1 dari 6 orang yang terkena COVID-19 akan mengalami
                                sakit parah dan kesulitan bernapas atau sesak napas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="protect_yourself_area p_100">
    <div class="container">
        <div class="main_title text-center">
            <h5>Apa yang harus anda lakukan</h5>
            <h2>Untuk melindungi diri anda?</h2>
        </div>
        <div class="row protect_inner">
            <div class="col-lg-6">
                <div class="row protect_list_inner">
                    <div class="col-6">
                        <div class="protect_list_item">
                            <div class="protect_list_title">
                                <h3>Lakukan</h3>
                                <h6>Pastikan untuk melakukannya!</h6>
                            </div>
                            <ul class="nav flex-column">
                                <li>
                                    <a><i class="linearicons-home4"></i>Dirumah saja</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-desk-tape"></i>Gunakan masker</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-tissue"></i>Selalu gunakan tisu</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-couch"></i>Desinfektan rumah anda</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-rain"></i>Rutin membersihkan tangan</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-thermometer"></i>Isolasi mandiri</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-bottle"></i>Makan makanan dengan gizi seimbang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="protect_list_item red">
                            <div class="protect_list_title">
                                <h3>Hindari</h3>
                                <h6>Hal-hal yang harus dihindari</h6>
                            </div>
                            <ul class="nav flex-column">
                                <li>
                                    <a><i class="linearicons-man-woman"></i>Jaga jarak</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-paw"></i>Hindari binatang</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-woman"></i>Jangan menyentuh wajah</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-hand"></i>Hindari berjabat tangan</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-chair"></i>Hidari menyentuh permukaan yang terinfeksi</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-drop-crossed"></i>Berkerumun</a>
                                </li>
                                <li>
                                    <a><i class="linearicons-plane-crossed"></i>Berpergian</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="protect_self_text">
                    <h3>Apa yang melibatkan isolasi mandiri?</h3>
                    <p>
                        Jika Anda perlu melakukan isolasi mandiri, Anda harus segera bertindak.
                        Tetaplah di dalam rumah dan hindari semua kontak langsung dengan orang lain.
                    </p>
                    <a class="text_btn" href="#">Bagaimana cara lain untuk melindungi diri Anda?
                        <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="protect_img text-center apps_craft_animation">
                    <img class="img-fluid wow fadeIn" data-wow-delay="500ms"
                         src="<?= BASEURL; ?>/assets/images/protect-img.png"
                         alt=""/>
                    <ul class="nav">
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-1.png" alt=""></li>
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-2.png" alt=""></li>
                        <li><img class="layer layer2" data-depth="0.5"
                                 src="<?= BASEURL; ?>/assets/images/icon/project-virus-3.png"
                                 alt=""></li>
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-4.png" alt=""></li>
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-5.png" alt=""></li>
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-6.png" alt=""></li>
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-7.png" alt=""></li>
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-8.png" alt=""></li>
                        <li><img class="layer layer2" data-depth="0.5"
                                 src="<?= BASEURL; ?>/assets/images/icon/project-virus-9.png"
                                 alt=""></li>
                        <li><img src="<?= BASEURL; ?>/assets/images/icon/project-virus-10.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="washing_process_area pad_btm">
    <div class="container">
        <div class="main_title text-center white">
            <h5>Proses Cuci Tangan</h5>
            <h2>Yuk, Cuci Tangan yang Baik dan Benar!</h2>
        </div>
        <div class="washing_process_inner row">
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="400ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="<?= BASEURL; ?>/assets/images/icon/washing-1.png" alt=""/>
                        <div class="number">
                            1
                        </div>
                    </div>
                    <p><span>Gunakan sabun</span> dan aplikasikan ke kedua tangan</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="500ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="<?= BASEURL; ?>/assets/images/icon/washing-2.png" alt=""/>
                        <div class="number">
                            2
                        </div>
                    </div>
                    <p>
                        <span>Gunakan satu tangan</span> untuk menggosok punggung tangan lainnya dan lakukan bergantian
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="600ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="<?= BASEURL; ?>/assets/images/icon/washing-3.png" alt=""/>
                        <div class="number">
                            3
                        </div>
                    </div>
                    <p>
                        <span>Gosok tanganmu</span> bersamaan dan bersihkan sela-sela jari
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="700ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="<?= BASEURL; ?>/assets/images/icon/washing-4.png" alt=""/>
                        <div class="number">
                            4
                        </div>
                    </div>
                    <p>
                        <span>Gosok punggung jari</span> dengan telapak tangan lainnya
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="800ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="<?= BASEURL; ?>/assets/images/icon/washing-5.png" alt=""/>
                        <div class="number">
                            5
                        </div>
                    </div>
                    <p>
                        <span>Gosok jempol</span> menggunakan tangan lainnya dan lakukan bergantian
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="900ms">
                <div class="washing_item">
                    <div class="icon">
                        <img src="<?= BASEURL; ?>/assets/images/icon/washing-6.png" alt=""/>
                        <div class="number">
                            6
                        </div>
                    </div>
                    <p>
                        <span>Gosok kuku jari</span> dengan telapak tangan dan lakukan bergantian
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="prevent_area">
    <div class="container">
        <div class="row prevent_inner">
            <div class="col-lg-6">
                <div class="prevent_item_inner row">
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/prevent/prevent-1.png"
                                     alt=""/>
                            </div>
                            <div class="prevent_text">
                                <h4>Di rumah saja</h4>
                                <p>
                                    Tetaplah di rumah jika Anda merasakan gejala dan
                                    lakukan konsultasi dengan dokter melalui telepon.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/prevent/prevent-2.png"
                                     alt=""/>
                            </div>
                            <div class="prevent_text">
                                <h4>Cuci tangan sesering mungkin</h4>
                                <p>
                                    Bersihkan tangan dengan pembersih beralkohol atau cuci
                                    tangan dengan sabun minimal 20 detik.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/prevent/prevent-3.png"
                                     alt=""/>
                            </div>
                            <div class="prevent_text">
                                <h4>Tetap jaga jarak</h4>
                                <p>
                                    Jaga jarak minimal 2 meter dengan orang lain.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="prevent_item">
                            <div class="prevent_img">
                                <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/prevent/prevent-4.png"
                                     alt=""/>
                            </div>
                            <div class="prevent_text">
                                <h4>Gunakan Masker</h4>
                                <p>
                                    Saat berada di sekitar orang lain demi melindungi diri sendiri maupun orang lain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="prevent_details">
                    <div class="prevent_details_text">
                        <h5>Apa yang harus dilakukan</h5>
                        <h2>Untuk mencegah Virus Corona?</h2>
                        <p>
                            Beberapa detail tentang bagaimana penyakit ini menyebar tidak diketahui
                            dan sedang dipastikan. WHO dan CDC menyatakan bahwa penyakit ini
                            menyebar terutama saat kontak dekat dan dari tetesan pernapasan yang
                            dihasilkan ketika orang batuk atau bersin dengan kontak dekat berada
                            dalam 1 hingga 2 meter (3 hingga 6 kaki). Sebuah penelitian di Singapura
                            menemukan bahwa batuk yang tidak ditutup dapat menyebabkan tetesan
                            menyebar hingga 4,5 meter (15 kaki).
                        </p>
                        <p>
                            Tetesan pernapasan juga dapat dihasilkan selama bernafas,
                            termasuk ketika berbicara, meskipun virus pada umumnya tidak mengudara.
                            Tetesan ini dapat mendarat di mulut atau hidung orang yang berada
                            di dekatnya atau mungkin terhirup ke dalam paru-paru.
                            Beberapa prosedur medis seperti intubasi dan ...
                        </p>
                        <a class="green_btn" href="#"><i class="linearicons-shield-check"></i> Baca Lebih Lanjut terkait Pencegahan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home_latest_blog_area">
    <div class="container">
        <div class="main_title text-center">
            <h5>Post Terakhir</h5>
            <h2>Informasi Terupdate</h2>
            <p>
                Update informasi yang Anda butuh tentang pencegahan, isolasi,
                dan cara menghadapi COVID-19.
            </p>
        </div>
        <div class="row l_blog_inner">
            <div class="col-lg-8">
                <div class="big_l_blog_item">
                    <div class="l_blog_img">
                        <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/blog/latest-blog/l-blog.jpg" alt=""/>
                    </div>
                    <div class="l_blog_text">
                        <div class="date">
                            <a href="#"><i class="linearicons-calendar-full"></i> Apr 12, 2020</a>
                            <a href="#"><i class="linearicons-bubbles"></i> 22</a>
                        </div>
                        <div class="blog_btm_text">
                            <div class="tag">Quarantine</div>
                            <div class="author">
                                <a href="#">by Sheryl Smith</a>
                                <a href="#"><i class="linearicons-radio-button"></i> 4 min read</a>
                            </div>
                            <a href="#">
                                <h3>How to treat COVID-19 <br/>coronavirus at home?</h3>
                            </a>
                            <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="small_l_blog_item">
                    <div class="l_blog_img">
                        <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/blog/latest-blog/l-blog-2.jpg"
                             alt=""/>
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
                <div class="small_l_blog_item">
                    <div class="l_blog_img">
                        <img class="img-fluid" src="<?= BASEURL; ?>/assets/images/blog/latest-blog/l-blog-3.jpg"
                             alt=""/>
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

<!-- <section class="client_logo_area">
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
                    <a class="wow fadeIn" data-wow-delay="400" href="#"><img src="<?= BASEURL; ?>/assets/images/apple-btn.png"
                                                                             alt=""/></a>
                    <a class="wow fadeIn" data-wow-delay="500" href="#"><img src="<?= BASEURL; ?>/assets/images/google-btn.png"
                                                                             alt=""/></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="app_mobile">
                    <div class="mobile_image">
                        <img src="<?= BASEURL; ?>/assets/images/mobile-1.png" alt=""/>
                        <img class="wow fadeInUp" data-wow-delay="500ms" src="<?= BASEURL; ?>/assets/images/mobile-2.png" alt=""/>
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
                        <li data-parallax='{"y": -100}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-4.png" alt=""/>
                        </li>
                        <li data-parallax='{"y": 100}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-5.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-6.png" alt=""/>
                        </li>
                        <li data-parallax='{"y": -200}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-7.png" alt=""/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="subscribe_area apps_craft_animation">
    <ul class="nav">
        <li><img class="layer layer2" data-depth="0.5" src="<?= BASEURL; ?>/assets/images/icon/subs-1.png" alt=""></li>
        <li><img src="<?= BASEURL; ?>/assets/images/icon/subs-2.png" alt=""></li>
        <li><img src="<?= BASEURL; ?>/assets/images/icon/subs-3.png" alt=""></li>
    </ul>
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

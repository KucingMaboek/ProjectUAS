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
        header("Location: " . BASEURL . "/Admin");
        $feedbackMsg = "Permintaan berhasil dikirim";
    }
}

?>


<section class="breadcrumb_area">
    <div class="container">
        <div class="breadcrumb_text">
            <h6 class="wow fadeInUp">Kontak Kami</h6>
            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Hubungi Kami</h3>
            <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="<?= BASEURL; ?>/Home">Beranda</a></li>
                <li><a href="<?= BASEURL; ?>/Contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</section>


<section class="contact_area">
    <div class="container">
        <div class="row contact_details">
            <div class="col-lg-3 col-6">
                <div class="contact_details_item  wow fadeInLeft" data-wow-delay="0.4s">
                    <i class="linearicons-telephone"></i>
                    <h4>COVID-19 HOTLINE</h4>
                    <a href="tel:+8801676790690">
                        <h6>911</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="contact_form_inner">
            <form class="row contact_us_form appoinment_form js-form" method="post">
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" id="name" name="name" placeholder="" required/>
                        <label class="top_text"><i class="linearicons-user"></i>Nama Anda</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="email" id="email" name="email" placeholder="" required/>
                        <label class="top_text"><i class="linearicons-envelope-open"></i>Alamat Email</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="tel" id="number" name="phone_number" placeholder="" required/>
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
                        <input type="submit" class="green_btn" name="submit" id="appoinment" value="Kirim Pesan"
                               data-value="appoinment"/>
                    </div>
                </div>
                <p><?= $feedbackMsg; ?></p>
            </form>
        </div>
    </div>
</section>
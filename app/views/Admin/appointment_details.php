<script type="text/javascript" src="<?= BASEURL; ?>/admin_assets/ckeditor/ckeditor.js"></script>

<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Appointment Details</h6>
        </div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name"
                               value="<?= $data['appointments']['name']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control" name="email"
                               value="<?= $data['appointments']['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Skype ID</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="skype_id"
                               value="<?= $data['appointments']['skype_id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Number</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="tel" class="form-control" name="phone_number"
                               value="<?= $data['appointments']['phone_number']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="date"
                               value="<?= $data['appointments']['date']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="time" class="form-control" name="time"
                               value="<?= $data['appointments']['time']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="subject"
                               value="<?= $data['appointments']['subject']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Conversation</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="conversation"
                               value="<?= $data['appointments']['conversation']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Message</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea class="ckeditor" id="ckedtor" name="message"
                                  readonly><?= $data['appointments']['message']; ?></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
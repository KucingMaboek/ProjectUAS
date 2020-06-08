<?php
$feedbackMsg = "";
$required = array('title', 'category', 'content');
$error = false;

if (isset($_POST['submit'])) {
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $error = true;
        }
    }
    if ($error) {
        $feedbackMsg = "Please complete the form first";
    } else {

        // filter data yang diinputkan
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
        $content = $_POST['content'];

        $this->model('Blog_model')->addBlog(
            $_SESSION["user"]["id"],
            $title,
            $category,
            $content
        );
        $feedbackMsg = "Blog added successfully";
    }
}

?>

<script type="text/javascript" src="<?= BASEURL; ?>/admin_assets/ckeditor/ckeditor.js"></script>

<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Blog</h6>
        </div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" value="">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="category">
                            <option value="" selected disabled hidden>Choose category</option>
                            <option value="Political News">Political News</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Economic Effect">Economic Effect</option>
                            <option value="Prevention">Prevention</option>
                            <option value="Education">Education</option>
                            <option value="Quarantine">Quarantine</option>
                            <option value="Health">Health</option>
                            <option value="Travel">Travel</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea class="ckeditor" id="ckedtor" name="content"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <input type="submit" class="btn btn-success btn-block" name="submit" value="Add"/>
                        <p class="text-center"><?= $feedbackMsg; ?></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


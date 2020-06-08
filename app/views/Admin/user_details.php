<?php
$feedbackMsg = "";
$required = array('username', 'password', 'role', 'full_name', 'birth_date', 'address', 'email', 'phone');
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
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
        $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
        $birth_date = preg_replace("([^0-9/])", "", $_POST['birth_date']);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);

        $temp = $this->model('User_model')->getAllUsersByUsername($username);
        if (!empty($temp)) {
            if ($temp['id'] == $data['users']['id']) {
                $this->model('User_model')->updateUser(
                    $username,
                    $password,
                    $role,
                    $full_name,
                    $birth_date,
                    $address,
                    $email,
                    $phone,
                    $data['users']['id']
                );
                $feedbackMsg = "User " . $username . " updated successfully";
            } else {
                $feedbackMsg = "Username has been taken by someone else, try another one";
            }
        }
    }
}

?>

<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
        </div>
        <form action="" method="POST">
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="username"
                               value="<?= $data['users']['username']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="password" class="form-control" name="password" value="">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Role</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="role">
                            <option value="" selected disabled hidden>Choose role</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Author/Content Writer">Author/Content Writer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Full Name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="full_name"
                               value="<?= $data['users']['full_name']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Birth Date</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="birth_date"
                               value="<?= $data['users']['birth_date']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="address"
                               value="<?= $data['users']['address']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control" name="email" value="<?= $data['users']['email']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Number</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="tel" class="form-control" name="phone"
                               value="+<?= $data['users']['phone_number']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <input type="submit" class="btn btn-info btn-block" name="submit" value="Update"/>
                        <p class="text-center"><?= $feedbackMsg; ?></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


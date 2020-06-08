<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- User Datatable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Birth Date</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['users'] as $user) : ?>
                        <?php
                        $birth_date = date('j F Y', strtotime(str_replace("-", "/", $user['birth_date'])));
                        ?>
                        <tr>
                            <td class="text-center"><?= $user['id']; ?></td>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['role']; ?></td>
                            <td><?= $user['full_name']; ?></td>
                            <td><?= $birth_date; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td class="nav-item dropdown no-arrow text-center">
                                <a class=" dropdown-toggle" href="#" id="userDropdown"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?= BASEURL; ?>/Admin/user_details/<?= $user['id']; ?>"
                                       data-toggle="editmodal"
                                       data-target="#editModal">
                                        <i class="">Edit</i>
                                    </a>
                                    <a class="dropdown-item" href="<?=BASEURL;?>/Admin/deleteUser/<?=$user['id'];?>"
                                       data-toggle="deletemodal"
                                       data-target="#deleteModal">
                                        <i class="">Delete</i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript">
    jsFunction(){
        alert("hehe");
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- User Datatable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Message Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['messages'] as $message) : ?>
                        <tr>
                            <td class="text-center"><?= $message['id']; ?></td>
                            <td><?= $message['name']; ?></td>
                            <td><?= $message['email']; ?></td>
                            <td><?= $message['phone_number']; ?></td>
                            <td class="nav-item dropdown no-arrow text-center">
                                <a class=" dropdown-toggle" href="#" id="userDropdown"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?= BASEURL; ?>/Admin/message_details/<?= $message['id']; ?>"
                                       data-toggle="editmodal"
                                       data-target="#editModal">
                                        <i class="">Details</i>
                                    </a>
                                    <a class="dropdown-item" href="<?=BASEURL;?>/Admin/deleteMessage/<?=$message['id'];?>"
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
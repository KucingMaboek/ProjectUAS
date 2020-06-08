<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- User Datatable -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Author</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['blogs'] as $blog) : ?>
                        <?php
                        $date = date('j F Y', strtotime(str_replace("-", "/", $blog['date'])));
                        $data['users'] = $this->model('User_model')->getAllUsersNameById($blog['authId']);
                        $author_name = $data['users']['full_name'];
                        ?>
                        <tr>
                            <td class="text-center"><?= $blog['id']; ?></td>
                            <td><?= $author_name; ?></td>
                            <td><?= $blog['title']; ?></td>
                            <td><?= $blog['category']; ?></td>
                            <td><?= $date; ?></td>
                            <td class="nav-item dropdown no-arrow text-center">
                                <a class=" dropdown-toggle" href="#" id="userDropdown"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?= BASEURL; ?>/Admin/blog_details/<?= $blog['id']; ?>"
                                       data-toggle="editmodal"
                                       data-target="#editModal">
                                        <i class="">Edit</i>
                                    </a>
                                    <a class="dropdown-item" href="<?=BASEURL;?>/Admin/deleteBlog/<?=$blog['id'];?>"
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
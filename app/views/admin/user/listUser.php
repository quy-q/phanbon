<?php
require_once "app/views/admin/layout/header.php";
require_once "app/models/connect.php";
require_once "app/models/productAdmin.php";

?><div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Tài Khoản</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">danh sách tài khoản</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <?php if (isset($_SESSION['failed'])) : ?>
        <div class="col-md-12">
            <div class="alert alert-danger mx-auto">
                <p><?= $_SESSION['failed'] ?></p>
            </div>
        </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])) : ?>
        <div class="col-md-12">
            <div class="alert alert-success mx-auto">
                <p><?= $_SESSION['success'] ?></p>
            </div>
        </div>
        <?php endif; ?>
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">gender</th>
                        <th scope="col">avatar</th>
                        <th scope="col">role</th>
                        <th scope="col">chức năng</th>
                    </tr>
                </thead>
                <?php
                $listUser = new listproduct();
                $list = $listUser->listUser();
                $num = 1;
                ?>
                <?php foreach ($list as $show) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $num++ ?></th>
                        <td><?= $show['name'] ?></td>
                        <td><?= $show['email'] ?></td>
                        <td><?php if ($show['gender'] == 1) {
                                    echo 'nam';
                                } else {
                                    echo 'nữ';
                                }
                                ?> </td>
                        <td><?= $show['avatar'] ?></td>
                        <td><?php if ($show['id_role'] == 1) {
                                    echo 'admin';
                                } else {
                                    echo 'user';
                                }
                                ?>
                        </td>
                        <td>
                            <a href="/mvc/admin/fixUser/<?= $show['id'] ?>">fix</a>
                            <a href="/mvc/admin/eraseUser/<?= $show['id'] ?>">erase</a>
                        </td>

                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
    <?php
    require_once "app/views/admin/layout/footer.php";
    ?>
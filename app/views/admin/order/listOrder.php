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
                    <h1 class="m-0">Danh Sách Đơn Hàng</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">danh sách đơn hàng</li>
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

        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">phone</th>
                        <th scope="col">note</th>
                        <th scope="col">created</th>
                        <th scope="col">chức năng</th>
                    </tr>
                </thead>
                <?php
                $listOrder = new listproduct();
                $list = $listOrder->listOrder();
                $num = 1;
                ?>

                <?php foreach ($list as $show) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $num++ ?></th>
                        <td><?= $show['name'] ?></td>
                        <td><?= $show['email'] ?></td>
                        <td><?= $show['address'] ?></td>
                        <td><?= $show['phone'] ?></td>
                        <td><?= $show['note'] ?></td>
                        <td><?= $show['created_at'] ?></td>
                        <td>
                            <a href="/mvc/admin/orderDetail/<?= $show['id'] ?>">fix</a>

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
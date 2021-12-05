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
                    <h1 class="m-0">Danh Sách Sản Phẩm</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Danh Sách Sản Phẩm</li>
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
    <!--đay-->
        <?php if (isset($_SESSION['failed'])) : ?>
        <div class="col-md-12">
            <div class="alert alert-primary mx-auto">
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
        <!--đay-->
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <?php
                $listProduct = new listproduct();
                $list = $listProduct->listproduct();
                $num = 1;
                ?>
                <?php foreach ($list as $show) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $num++ ?></th>
                        <td><?= $show['name'] ?></td>
                        <td><img style="width:80px; height:90px;" src="/mvc/public/images/product/<?= $show['image']?>" alt=""></td>
                        <td><?= $show['quantity'] ?></td>
                        <td><?= $show['price'] ?></td>
                        <td><?php if ($show['status'] == 1) {
                                    echo 'còn hàng';
                                } else {
                                    echo 'hết hàng';
                                }
                                ?> </td>
                        <td>
                            <a href="/mvc/admin/fixProduct/<?= $show['id'] ?>">Sửa</a>
                            <a href="/mvc/admin/erase/<?= $show['id'] ?>">Xóa</a>
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
<?php
require_once "app/views/admin/layout/header.php";
require_once "app/models/connect.php";
require_once "app/models/productAdmin.php";
require_once "app/models/categoryProduct.php";
?>
<header>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
    button#singlebutton {
        margin-left: 131%;
    }
    </style>
</header>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Tài Khoản</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Thêm Tài Khoản</li>
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

            <!------ Include the above in your HEAD tag ---------->

            <form class="form-horizontal" action="addUser" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <!-- Form Name -->
                    <legend></legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Tên</label>
                        <div class="col-md-4">
                            <input id="product_name" name="name" placeholder="Nhập Họ Tên..." class="form-control input-md"
                                required="" type="text">

                        </div>
                    </div>
                    <!-- Select Basic -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Email</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="email" placeholder="Nhập Email..."
                                class="form-control input-md" required="" type="email">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Mật Khẩu</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="pass" placeholder="Mật khẩu..."
                                class="form-control input-md" required="" type="text">

                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">SĐT</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" id="product_description"
                                placeholder="Nhập Số Điện Thoại..." name="phone" required=""></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Giới Tính</label>
                        <div class="col-md-4">
                            <select class="form-control" type="text" id="product_description" required="" name="gender">
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <!-- Textarea -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Quyền</label>
                        <?php
                        $role = new categoryProduct();
                        $roles = $role->getAllRole();
                        ?>

                        <div class="col-md-4">
                            <select class="form-control" type="text" id="product_description"
                                placeholder="Giới thiệu sane phẩm..." required="" name="role">
                                <?php foreach ($roles as $shows) : ?>
                                <option value="<?= $shows['id'] ?>"><?= $shows['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description"></label>
                        <div class="col-md-4">
                            <!-- File Button -->

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Ảnh</label>
                                <div class="col-md-4">
                                    <input id="filebutton" name="filebutton" class="input-file" type="file" required="">
                                </div>
                            </div>
                            <!-- File Button -->


                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button id="singlebutton" name="btn" class="btn btn-primary">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </section>

    <?php
    require_once "app/views/admin/layout/footer.php";
    ?>
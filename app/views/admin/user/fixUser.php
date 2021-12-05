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
                    <h1 class="m-0">Sửa Tài Khoản</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">sửa tài khoản</li>
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
                    <?php
                    $listUser = new listproduct();
                    $list = $listUser->getInfoUserById($param)
                    ?>
                    <?php foreach ($list as $show) : ?>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description"></label>
                        <div class="col-md-4">
                            <input id="product_name" name="id" hidden class="form-control input-md" required=""
                                type="text" value="<?= $show['id'] ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">name</label>
                        <div class="col-md-4">
                            <input id="product_name" name="name" class="form-control input-md" required="" type="text"
                                value="<?= $show['name'] ?>">

                        </div>
                    </div>
                    <!-- Select Basic -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">email</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="email" class="form-control input-md" required=""
                                type="email" value="<?= $show['email'] ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">password</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="pass" class="form-control input-md" required=""
                                type="text" value="<?= $show['pass'] ?>">

                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">phone</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" id="product_description" name="phone" required=""
                                value="<?= $show['phone'] ?>"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">gender</label>
                        <div class="col-md-4">
                            <select class="form-control" type="text" id="product_description" required="" name="gender">
                                <option value="1">nam</option>
                                <option value="2">nữ</option>
                            </select>
                        </div>
                    </div>
                    <!-- Textarea -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">role</label>
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
                                <label class="col-md-4 control-label" for="filebutton">image</label>
                                <div class="col-md-4">
                                    <input id="filebutton" name="filebutton" class="input-file" type="file" required="">
                                </div>
                            </div>
                            <!-- File Button -->


                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button id="singlebutton" name="btn" class="btn btn-primary">ADD</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </fieldset>
            </form>

        </div>
    </section>

    <?php
    require_once "app/views/admin/layout/footer.php";
    ?>
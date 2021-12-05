<?php
require_once "app/views/admin/layout/header.php";
require_once "app/models/connect.php";
require_once "app/models/productAdmin.php";
require_once "app/models/categoryProduct.php";
?>
<script src="mvc/public/ckeditor_4.16.1_standard/ckeditor/ckeditor.js" type="text/javascript"></script>
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
                    <h1 class="m-0">Thêm Sản Phẩm</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
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

            <form class="form-horizontal" action="addProduct" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <!-- Form Name -->
                    <legend></legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Tên</label>
                        <div class="col-md-4">
                            <input id="product_name" name="product_name" placeholder="Tên sản phẩm..."
                                class="form-control input-md" required="" type="text">

                        </div>
                    </div>
                    <!-- Select Basic -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Giá</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="price" placeholder="Giá sản phẩm..."
                                class="form-control input-md" required="" type="number">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Số Lượng</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="quantity" placeholder="Số lượng sản phẩm..."
                                class="form-control input-md" required="" type="number">

                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Mô Tả</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" id="product_description"
                                placeholder="Giới thiệu sản phẩm..." name="description" required=""></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Loại</label>
                        <?php
                        $categoryProduct = new categoryProduct();
                        $cate = $categoryProduct->getAllCategory();
                        ?>

                        <div class="col-md-4">
                            <select class="form-control" type="text" id="product_description"
                                placeholder="Giới thiệu sane phẩm..." required="" name="category">
                                <?php foreach ($cate as $shows) : ?>
                                <option value="<?= $shows['id'] ?>"><?= $shows['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_name_fr">Chi Tiết</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="detail" name="detail"></textarea>
                                <script>
                                            CKEDITOR.replace('detail');
                                </script>
                        </div> 
                    </div>
                    <!-- Text input-->

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
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Ảnh</label>
                                <div class="col-md-4">
                                    <input id="filebutton" name="filesbutton" class="input-file" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="product_description"></label>
                                <div class="col-md-4">
                                    <input type="number" hidden name="status" value="1">
                                </div>
                            </div>
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
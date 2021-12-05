<?php
require_once "app/views/admin/layout/header.php";
require_once "app/models/connect.php";
require_once "app/models/productAdmin.php";

?>
<header>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
    button#singlebutton {
        margin-left: 124%;
    }
    </style>
</header>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sửa Đơn Hàng</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">sửa đơn hàng</li>
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

            <form class="form-horizontal" action="fixProduct" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <?php
                    $fixOrder = new listproduct();
                    $fix = $fixOrder->getIdOrderDetail($param);
                    ?>
                    <?php foreach ($fix as $show) : ?>
                    <!-- Form Name -->
                    <legend></legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description"></label>
                        <div class="col-md-4">
                            <input id="product_name" hidden name="id" class="form-control input-md" required=""
                                type="text" value="<?= $show['id'] ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Orderid</label>
                        <div class="col-md-4">
                            <input id="product_name" name="product_name" class="form-control input-md" required=""
                                type="text" value="<?= $show['id_order'] ?>">

                        </div>
                    </div>
                    <!-- Select Basic -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">Productid</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="price" class="form-control input-md" required=""
                                type="text" value="<?= $show['id_product'] ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">quantity</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="quantity" class="form-control input-md" required=""
                                type="text" value="<?= $show['quantity'] ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">price</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="quantity" class="form-control input-md" required=""
                                type="text" value="<?= $show['price'] ?>">

                        </div>
                    </div>
                    <!-- Textarea -->


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description">status</label>
                        <div class="col-md-4">
                            <select class="form-control" type="text" id="product_description" name="status" required="">
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>
                            </select>
                        </div>
                    </div>
                    <!-- Textarea -->

                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_description"></label>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button id="singlebutton" name="btn" class="btn btn-primary">Change</button>
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
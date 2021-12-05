<?php
require_once 'app/views/layout/header.php';
//print_r($_SESSION['cart']);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<header>
    <style>
    a {
        color: black;
        text-decoration: none;
    }

    .right {
        margin-left: 47%;
    }

    ul {
        list-style: none;
    }

    button.btn {
        margin-left: 16%;
        background-color: orange;
    }

    a.btn {
        background-color: chocolate;
        margin: 15px 10px 0px 35px;
    }

    li.active {
        margin-left: -2%;
        margin-top: 10%;
    }

    tr.main-hading {
        background-color: orange;
    }

    td.price {
        text-align: center;
    }

    td.total-amount {
        text-align: center;
    }

    td.action {
        text-align: center;
    }

    input.input-number {
        text-align: center;
    }

    .shopping-cart.section {
        padding: 5%;
    }
    </style>
</header>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <form action="http://localhost/mvc/home/order" method="POST">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                                <th>Hình</th>
                                <th class="name">Tên</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Tổng</th>
                                <th class="text-center"><img src="/mvc/public/images/icon/trash-2.svg" alt=""></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_SESSION['cart'])) :
                                $totalCounter = 0;
                            ?>
                            <?php foreach ($_SESSION['cart'] as $item) :
                                    $totalPrice = $item['quantity'] * $item['price'];
                                    $totalCounter += $totalPrice;

                                ?>
                            <tr>
                                <td class="image" data-title="No">
                                    <img src="/mvc/public/images/product/<?= $item['image'] ?>" style="width: 150px;"
                                        alt="">
                                </td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#"><?= $item['name'] ?></a></p>

                                </td>
                                <td class="price" data-title="Price"><span><?= $item['price'] ?>.000 VNĐ</span></td>
                                <td class="qty text-center" data-title="Qty" style="width:50px">
                                    <!-- Input Order -->
                                    <div class="input-group">

                                        <input type="text" name="quantity" class="input-number" data-min="1"
                                            data-max="100" value=<?= $item['quantity'] ?>>

                                    </div>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total">
                                    <span><?= $totalPrice . '.000 VNĐ' ?></span>
                                </td>
                                <td class="action" data-title="Remove"><a
                                        href="http://localhost/mvc/home/deleteCart/<?= $item['id'] ?>">Xoá</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <!--/ End Shopping Summery -->
                </div>
            </div>
            <div class=" row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">

                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Tổng
                                            <span>
                                                <?php
                                                if (isset($totalCounter)) {
                                                    $_SESSION['totalCounter'] = $totalCounter;

                                                    echo $totalCounter . ' .000 VNĐ';
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="button5">
                                        <button href="http://localhost/mvc/home/order" class="btn" type="submit">Đặt
                                            hàng</button>
                                        <a href="http://localhost/mvc/home/index" class="btn">Tiếp tục mua hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </form>
    </div>
</div>
<!--/ End Shopping Cart -->
<script>
localStorage.setItem("totalCounter", <?= $_SESSION['totalCounter'] ?>);
</script>
<?php require_once 'app/views/layout/footer.php'; ?>
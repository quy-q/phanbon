<?php
require_once 'app/views/layout/header.php';
require_once 'app/models/connect.php';
require_once 'app/models/detailProductModels.php';
?>
<link rel="stylesheet" href="/mvc/public/css/cssDetailProduct.css">
<?php
$detail = new detailModels();
$showDetail = $detail->getDetailProduct($params);
?>
<?php foreach ($showDetail as $show) : ?>
<section class="text-top-header">
    <div class="text-top">
        <p class="name-product"><?= $show['name'] ?></p>
    </div>
</section>
<hr>
<section class="product-content-detail">
    <div class="image-product">
        <img src="/mvc/public/images/product/<?= $show['image'] ?>" alt="">
    </div>
    <div class="info-product">
        <div class="text">
            <h1 class="text-name">
                <?= $show['name'] ?>
            </h1>
        </div>
        <form action="/mvc/home/addToCart" method="POST">
            <input type="hidden" value="<?= $show['id'] ?>" name="product_id">
            <div class="price"> <?= $show['price'] ?>.000 VNĐ</div>
            <div class="quantity">
                <input type="number" class="input-quantity" name="quantity" value="1">
            </div>
            <div class="buy-product">
                <button class="button" type="submit">Mua</button>
            </div>
        </form>
    </div>
</section>
<hr style="width: 750px;">
<section class="detail-product">

    <div class="text-info">
        <h3>Thông Tin Sản Phẩm</h3>
    </div>

    <div class="text">
        <p><?= $show['detail'] ?></p>
    </div>
</section>
<?php endforeach; ?>
<?php
require_once 'app/views/layout/footer.php';
?>
<?php
require_once 'app/views/layout/header.php';
require_once 'app/models/connect.php';
require_once 'app/models/pvcModels.php';
?>
<style>
.content-ipad-home{
    border:3px solid #CCCCCC;
    text-align:center;
    margin:5px;
}
</style>
<link rel="stylesheet" href="/mvc/public/css/cssPvc.css">
<section class="banner-ipad">
    <div class="banner-ipad-home">
        <img style="margin-left:20%;" src="/mvc/public/images/banner/2.PNG" alt="">
    </div>
</section>
<section class="ipad-content">
    <?php
    $pvc = new pvcModels();
    $showPvc = $pvc->getAllIpad();
    ?>
    <?php foreach ($showPvc as $show) : ?>
    <div class="content-ipad-home">
        <div class="ipad-pro">
            <div class="info-first">
                <div class="info-pro-first">
                    <img src="/mvc/public/images/product/<?= $show['image'] ?>" class="image-ipad" alt="">
                </div>
                <div class="info-text-second">
                    <h3 class="name-ipad-pro"><?= $show['name'] ?></h3>
                    <p class="price-ipad-pro"><?= $show['price'] ?>.000 VNĐ</p>
                </div>
            </div>
            <div class="info-text-second">
                <a href="/mvc/detail/detailProduct/<?= $show['id'] ?>">
                    <button class="button">Mua</button>
                </a>
            </div>
            <div class="info-second">
                <img src="/mvc/public/images/product/<?= $show['image_detail'] ?>" alt="">
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
<?php
require_once 'app/views/layout/footer.php';
?>
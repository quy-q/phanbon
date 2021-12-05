<?php
require_once 'app/views/layout/header.php';
require_once 'app/models/connect.php';
require_once 'app/models/npkModels.php';
?>
<link rel="stylesheet" href="/mvc/public/css/cssNpk.css">
<section class="banner-iphone">
    <a href="#">
        <div class="banner-iphone-home">
            <img style="margin-left:20%;" src="/mvc/public/images/banner/2.PNG" alt="">
        </div>
    </a>
</section>
<style>
.content-iphone-home{
    border:3px solid #CCCCCC;
    text-align:center;
    margin:5px;
}
</style>
<section class="iphone-content">
    <?php
    $npk = new npkModels();
    $showNpk = $npk->getAllIphone();
    ?>
    <?php foreach ($showNpk as $show) : ?>
    <div class="content-iphone-home">
        <div class="iphone-1">
            <div class="info-iphone-first">
                <div class="info-iphone-first">
                    <img src="/mvc/public/images/product/<?= $show['image'] ?>" class="image-iphone" alt="">
                </div>
            </div>
            <div class="info-iphone-second">
                <h3 class="name-iphone"><?= $show['name'] ?></h3>
                <p class="price-iphone">Mua <?= $show['price'] ?>.000 VNĐ</p>
            </div>
        </div>
        <hr width="250px">
        <div class="info-iphone-second">
            <a href="/mvc/detail/detailProduct/<?= $show['id'] ?>">
                <button class="button">Mua</button>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</section>

<?php
require_once 'app/views/layout/footer.php';
?>
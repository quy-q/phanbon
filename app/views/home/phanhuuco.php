<?php
require_once 'app/views/layout/header.php';
require_once 'app/models/connect.php';
require_once 'app/models/phcModels.php';
?>
<style>
.price-macbook{
    background-color:#99CC00;
}
.content-mac-home{
    border:3px solid #CCCCCC;
    text-align:center;
    margin:5px;
}
.content-macbook-home{
    border:3px solid #CCCCCC;
    text-align:center;
    margin:5px;
}
</style>
<link rel="stylesheet" href="/mvc/public/css/cssMac.css">
<section class="banner-mac">
    <div class="banner-mac-home" >
        <img style="margin-left:20%;" src="/mvc/public/images/banner/2.PNG" alt="">
    </div>
</section>
<section class="macbook-content">
    <?php
    $phc = new phcModels();
    $showphc = $phc->getAllMacbook();
    ?>
    <?php foreach ($showphc as $show) : ?>
    <div class="content-macbook-home">
        <div class="macBook-1">
            <div class="info-macbook-first">
                <div class="info-macbook-first">
                    <img src="/mvc/public/images/product/<?= $show['image'] ?>" class="image-macbook" alt="">

                </div>
            </div>
            <div class="info-macbook-second">
                <h3 class="name-macbook"><?= $show['name'] ?></h3>
                <p class="price-macbook"><?= $show['price'] ?>.000 VNĐ</p>
            </div>
        </div>
        <hr width="250px">
        <div class="info-macbook-second">
            <a href="/mvc/detail/detailProduct/<?= $show['id'] ?>">
                <button class="button">Mua</button>&ensp;<button class="button">Chi Tiết</button>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</section>
<section class=" macbook-content">
    <?php
    $phcc = new phcModels();
    $showphcc = $phcc->getAllMac();
    ?>
    <?php foreach ($showphcc as $show) : ?>
    <div class="content-mac-home">
        <div class="mac-1">
            <div class="info-mac-first">
                <div class="info-mac-first">
                    <img src="/mvc/public/images/product/<?= $show['image'] ?>" class="image-mac" alt="">
                </div>
            </div>
            <div class="info-macbook-second">
                <h3 class="name-macbook"><?= $show['name'] ?></h3>
                <p class="price-macbook"><?= $show['price'] ?>.000 VNĐ</p>
            </div>
        </div>
        <hr width="250px">
        <div class="info-macbook-second">
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
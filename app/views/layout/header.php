<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc/public/css/cssHeader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
</head>
<style>
.searchs{
    background-color:#33FF33;
    height:22px;
   
}
.top-search{

    overflow: hidden;
  background-color: #e9e9e9;
  height:20px;
  border:2px solid black;


}

</style>
<body>
    <header>
        <section class="nav-bar">
            <div class="nav-top">
                <div class="home">
                    <a href="http://localhost/mvc/home/index"><img src="/mvc/public/images/icon/home.svg" alt=""></a>
                </div>
                <div class="products-mac">
                    <a href="http://localhost/mvc/home/phanhuuco">Phân Hữu Cơ</a>
                </div>
                <div class="products-ipad">
                    <a href="http://localhost/mvc/home/phanvoco">Phân Vô Cơ</a>
                </div>
                <div class="products-iphone">
                    <a href="http://localhost/mvc/home/npk">Phân NPK</a>
                </div>

                <div class="shopping-bag">
                    <a href="http://localhost/mvc/home/cart"><img src="/mvc/public/images/icon/shopping-bag.svg" alt="">
                        <span class="total-count">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $number = $_SESSION['cart'];
                                echo count($number);
                            } else {
                                echo 0;
                            }
                            ?>
                        </span>
                    </a>
                </div>

                <div class="search">
                    <form action="http://localhost/mvc/home/search" method="GET">
                        <input class="top-search" type="text" name="search" placeholder="Tìm Kiếm...">
                        <button class="searchs" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="shopping-bag">
                    <a href="http://localhost/mvc/admin/login">
                        <img src="/mvc/public/images/icon/log-in.svg" style="width: 17px;margin-top: 4px;" alt="">
                    </a>
                </div>
            </div>
        </section>

    </header>
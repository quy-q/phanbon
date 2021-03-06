<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/mvc/public/cssLogin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/mvc/public/cssLogin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/mvc/public/cssLogin/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/mvc/public/cssLogin/css/style.css">

    <title>Login</title>
</head>

<body>
    <?php
// đây này th    $myusername = "";
    $mypassword = "";
    if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
        $myusername = $_COOKIE["user"];
        $mypassword = $_COOKIE["pass"];
    }
    ?>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('/mvc/public/images/users/1.gif');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Đăng Nhập</h3>
                        </div>
                        <form action="checklogin" method="post">
                            <div class="form-group first">
                                <label for="username">Tên Đăng Nhập</label>
                                <input type="text" class="form-control" value="<?php echo $myusername ?>" name="user"
                                    id="username">

                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Mật Khẩu</label>
                                <input type="password" class="form-control" name="pass"
                                    value="<?php echo $mypassword ?>" id="password">

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" name="rember" value="1" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Quên Mật Khẩu</a></span>
                            </div>

                            <input type="submit" value="Log In" name="dangnhap" class="btn btn-block btn-primary">

                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/mvc/public/cssLogin/js/jquery-3.3.1.min.js"></script>
    <script src="/mvc/public/cssLogin/js/popper.min.js"></script>
    <script src="/mvc/public/cssLogin/js/bootstrap.min.js"></script>
    <script src="/mvc/public/cssLogin/js/main.js"></script>
</body>

</html>
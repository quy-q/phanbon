<?php
ob_start();
session_start();
require_once 'app/models/userModels.php';
require_once 'app/models/productAdmin.php';
require_once 'app/models/connect.php';
class admin extends Core
{
    public function __construct()
    {
    }

    public function login()
    {
        require_once 'app/views/admin/login.php';
    }
    public function dashboard()
    {
        require_once 'app/views/admin/dashboard.php';
    }
    public function checklogin()
    {
        $myusername = $_POST['user'];
        $mypassword = $_POST['pass'];
        $user = new userModels();
        if (isset($_POST['rember'])) {
            setcookie("user", $myusername);
            setcookie("pass", $mypassword);
        }
        $rows = $user->checkLogin($myusername,$mypassword);
        $count = mysqli_fetch_row($rows);
        if (count($count)) {
            $_SESSION['login'] = $count;
            header("location:http://localhost/mvc/admin/dashboard");
        } else {
            header("location:http://localhost/mvc/admin/login");
        }
    }
    public function logout()
    {
        require_once 'app/views/admin/logout.php';
    }
    public function listproduct()
    {
        require_once "app/views/admin/product/listProducts.php";
    }
    //product
    public function addProduct()
    {
        if (isset($_POST['btn'])) {
            $name = $_POST['product_name'];

            $price = $_POST['price'];

            $quan = $_POST['quantity'];

            $des = $_POST['description'];

            $cate = $_POST['category'];

            $status = $_POST['status'];

            $detail = $_POST['detail'];

            $created = date('m/d/Y h:i:s');
            $updated = date('m/d/Y h:i:s');
            $img = $_FILES['filebutton']['name'];
            $duong_dan_anh = '../mvc/public/images/product/' . $img;
            move_uploaded_file($_FILES['filebutton']['tmp_name'], $duong_dan_anh);
            $images = $_FILES['filesbutton']['name'];
            $all_anh = '../mvc/public/images/auxiliaryImage/' . $images;
            move_uploaded_file($_FILES['filesbutton']['tmp_name'], $all_anh);
            $add = new listproduct();
            $change = $add->addProduct($name, $img, $images, $quan, $price,  $des, $detail,  $status, $cate,  $created, $updated);
            if ($change == true) {
                $_SESSION['success'] = "Thêm Thành Công";
                header("Location: http://localhost/mvc/admin/listproduct");
            } else {

                $_SESSION['failed'] = "Thêm Thất Bại";
            }
        }
        require_once "app/views/admin/product/add.php";
    }

    public function fixProduct($param)
    {

        if (isset($_POST['btn'])) {
            $id = $_POST['id'];
            $name = $_POST['product_name'];
            $price = $_POST['price'];
            $quan = $_POST['quantity'];
            $des = $_POST['description'];
            $cate = $_POST['category'];
            $status = $_POST['status'];
            $detail = $_POST['detail'];
            $created = $_POST['created_date'];
            $updated = date('m/d/Y h:i:s');
            $img = $_FILES['filebutton']['name'];
            $duong_dan_anh = '../mvc/public/images/product/' . $img;
            move_uploaded_file($_FILES['filebutton']['tmp_name'], $duong_dan_anh);
            $images = $_FILES['filesbutton']['name'];
            $all_anh = '../mvc/public/images/auxiliaryImage/' . $images;
            move_uploaded_file($_FILES['filesbutton']['tmp_name'], $all_anh);
            $fix = new listproduct();
            $change = $fix->fixProduct($id, $name, $price, $quan, $des, $cate, $status, $detail, $created, $updated, $img, $images);

            if ($change == true) {
                $_SESSION['success'] = "Sửa Thành Công";
                header("Location: http://localhost/mvc/admin/listproduct");
            } else {
                session_start();
                $_SESSION['failed'] = "Sửa Thất Bại";
            }
        }
        require_once "app/views/admin/product/fixProduct.php";
    }
    public function erase($param)
    {
        $d = new listproduct;
        $rows = $d->erase($param);
        if ($rows == 1) {
            $_SESSION['success'] = "Xoá Thành Công";
            header("Location: http://localhost/mvc/admin/listproduct");
        } else {
            session_start();
            $_SESSION['failed'] = "Xoá Thất Bại";;
        }
    }
    //user
    public function listUser()
    {
        require_once "app/views/admin/user/listUser.php";
    }
    public function addUser()
    {
        if (isset($_POST['btn'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $role = $_POST['role'];
            $created = date('m/d/Y h:i:s');
            $updated = date('m/d/Y h:i:s');
            $img = $_FILES['filebutton']['name'];
            $duong_dan_anh = '../mvc/public/images/users/' . $img;
            move_uploaded_file($_FILES['filebutton']['tmp_name'], $duong_dan_anh);
            $pass = md5($pass);
            $user = new listproduct();
            $addUser = $user->addUser($name, $email, $pass, $gender, $img, $phone, $role, $created, $updated);
            if ($addUser == true) {
                $_SESSION['success'] = "Thêm Thành Công";
                header("Location: http://localhost/mvc/admin/listUser");
            } else {
                session_start();
                $_SESSION['failed'] = "Thêm Thất Bại";
                header("Location: http://localhost/mvc/admin/listUser");
            }
        }

        require_once "app/views/admin/user/addUser.php";
    }
    public function fixUser($param)
    {
        if (isset($_POST['btn'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $role = $_POST['role'];
            $created = date('m/d/Y h:i:s');
            $updated = date('m/d/Y h:i:s');
            $img = $_FILES['filebutton']['name'];
            $duong_dan_anh = '../mvc/public/images/users/' . $img;
            move_uploaded_file($_FILES['filebutton']['tmp_name'], $duong_dan_anh);
            $pass = md5($pass);
            $user = new listproduct();
            $fixUser = $user->fixUser($id, $name, $email, $pass, $gender, $img, $phone, $role, $created, $updated);
            if ($fixUser == true) {
                $_SESSION['success'] = "Sửa Thành Công";
                header("Location: http://localhost/mvc/admin/listUser");
            } else {
                session_start();
                $_SESSION['failed'] = "Sửa Thất Bại";
                header("Location: http://localhost/mvc/admin/listUser");
            }
        }

        require_once "app/views/admin/user/fixUser.php";
    }
    public function eraseUser($param)
    {
        $d = new listproduct;
        $rows = $d->eraseUser($param);
        if ($rows == 1) {
            $_SESSION['success'] = "Xoá Thành Công";
            header("Location: http://localhost/mvc/admin/listUser");
        } else {
            session_start();
            $_SESSION['failed'] = "Xoá Thất Bại";;
            header("Location: http://localhost/mvc/admin/listUser");
        }
    }
    public function listOrder()
    {
        require_once "app/views/admin/order/listOrder.php";
    }

    public function orderDetail($param)
    {
        require_once "app/views/admin/order/orderDetail.php";
    }
}
<?php
session_start();

class home extends controller
{
    public function __construct()
    {
    }

    public function index()
    {
        require_once 'app/views/home/home.php';
    }
    public function phanhuuco()
    {
        require_once 'app/views/home/phanhuuco.php';
    }
    public function phanvoco()
    {
        require_once 'app/views/home/phanvoco.php';
    }
    public function npk()
    {
        require_once 'app/views/home/npk.php';
    }
    public function cart()
    {
        require_once 'app/views/home/cart.php';
    }
    public function addToCart()
    {

        $productId = $_POST['product_id'];
        print_r($productId);
        $quantity = $_POST['quantity'];
        print_r($quantity);
        require_once "app/models/productModels.php";
        $producModels = new ProductModels();
        $product = $producModels->getProductById($productId);
        if ($product && $quantity > 0) {
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                if (array_key_exists($productId, $_SESSION['cart'])) {
                    $_SESSION['cart'][$productId]['quantity'] = $quantity;
                } else {
                    $_SESSION['cart'][$productId] = $product;
                    $_SESSION['cart'][$productId]['quantity'] = $quantity;
                }
            } else {
                $_SESSION['cart'][$productId] = $product;
            }
        }

        header('location: http://localhost/mvc/home/cart');
    }
    public function deleteCart($id)
    {
        unset($_SESSION['cart'][$id]);
        header("Location: http://localhost/mvc/home/cart");
    }
    public function order()
    {
        require_once 'app/views/home/order.php';
    }
    public function search()
    {
    }
    public function payment()
    {
        $name = $_POST['firstname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $created = date('m/d/Y h:i:s');
        $updated = date('m/d/Y h:i:s');
        require_once "app/models/productModels.php";
        $pay = new ProductModels();
        $payment = $pay->orderById($name, $email, $phone, $address, $note, $created, $updated);
    }
}
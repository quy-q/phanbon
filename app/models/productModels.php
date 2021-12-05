<?php
require_once 'app/models/connect.php';
class ProductModels extends dbh
{
    public function __construct()
    {
    }
    public function getProductById($productId)
    {
        $sql = "select * from product where id ='$productId'";
        $rows = $this->connect()->query($sql);
        $result = $rows->fetch_array();
        return $result;
    }
    public function orderById($name, $email, $phone, $address, $note, $created, $updated)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'asm_php');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $sql = "INSERT INTO `order` (name,email,address,phone,note,created_at,updated_at)  VALUES('$name','$email','$address','$phone','$note','$created','$updated')";


        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);

            $i = 0;
            foreach ($_SESSION['cart'] as $item) {
                $i++;
                $productId = $item['id'];
                $quantity = $item['quantity'];
                $price = $item['price'];
                $status = 0;

                $total = $item['quantity'] * $item['price'];
                $query = "INSERT INTO order_detail(id_order, id_product, quantity, price, status, updated_at) 
                VALUES ('$last_id','$productId','$quantity','$price','$status',now())";
                if (mysqli_query($conn, $query)) {
                    unset($_SESSION['cart']);
                    require_once "app/views/home/success.php";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
            }
        }
    }
}
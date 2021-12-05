<?php
require_once "app/models/connect.php";
class listproduct extends dbh
{
    public function __construct()
    {
    }
    public function listproduct()
    {
        $sql = "select * from product";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function erase($param)
    {
        $sql = "DELETE FROM product WHERE id ='$param'";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function getInfoById($param)
    {
        $sql = "select * from product where id = '$param' ";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function fixProduct($id, $name, $price, $quan, $des, $cate, $status, $detail, $created, $updated, $img, $images)
    {
        $sql = "update product set
          name ='$name', image ='$img', image_detail ='$images', quantity ='$quan', price ='$price', description ='$des', detail ='$detail', status ='$status', id_category ='$cate', created_at ='$created', updated_at ='$updated' where id ='$id' ";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function addProduct($name, $img, $images, $quan, $price,  $des, $detail,  $status, $cate,  $created, $updated)
    {
        $sql = "INSERT INTO product(name, image, image_detail, quantity, price, description, detail, status, id_category, created_at, updated_at)
         VALUES ('$name','$img','$images','$quan','$price','$des','$detail','$status','$cate','$created','$updated')";
        print_r($sql);
        $rows = $this->connect()->query($sql);
        var_dump($rows);
        return $rows;
    }
    // user
    public function listUser()
    {
        $sql = "select * from user ";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function addUser($name, $email, $pass, $gender, $img, $phone, $role, $created, $updated)
    {
        $sql = "INSERT INTO user(name, email,pass, gender, avatar, phone, id_role, created_at, updated_at)
         VALUES ('$name','$email','$pass','$gender','$img','$phone','$role','$created','$updated')";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function getInfoUserById($param)
    {
        $sql = "select * from user where id = '$param' ";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function fixUser($id, $name, $email, $pass, $gender, $img, $phone, $role, $created, $updated)
    {
        $sql = "UPDATE user SET name='$name',email='$email',pass='$pass',gender='$gender',avatar='$img',phone='$phone',id_role='$role',created_at='$created',updated_at='$updated' WHERE id ='$id'";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function eraseUser($param)
    {
        $sql = "DELETE FROM user WHERE id ='$param'";
        $rows = $this->connect()->query($sql);
        return $rows;
      
    }
    public function listOrder()
    {
        $sql = "SELECT * FROM `order`";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function getIdOrderDetail($param)
    {

        $sql = "SELECT * FROM order_detail WHERE id = '$param'";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
}
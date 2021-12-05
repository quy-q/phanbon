<?php
require_once "app/models/connect.php";
class categoryProduct extends dbh
{
    public function __construct()
    {
    }

    public function getAllCategory()
    {
        $sql = "select * from product_category";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function getAllRole()
    {
        $sql = "select * from role";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
}
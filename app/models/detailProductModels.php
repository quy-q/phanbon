<?php
require_once 'app/models/connect.php';
class detailModels extends dbh
{
    public function __construct()
    {
    }
    public function getDetailProduct($params)
    {
        $sql = "select * from product where id = '$params'";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
}
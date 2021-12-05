<?php
require_once 'app/models/connect.php';
class pvcModels extends dbh
{
    public function __construct()
    {
    }
    public function getAllIpad()
    {
        $sql = "select * from product where id_category = 3";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
}

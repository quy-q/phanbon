<?php
require_once 'app/models/connect.php';
class phcModels extends dbh
{
    public function __construct()
    {
    }
    public function getAllMacbook()
    {
        $sql = "select * from product where id_category = 1";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function getAllMac()
    {
        $sql = "select * from product where id_category = 4";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
}

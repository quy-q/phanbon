<?php
require_once 'app/models/connect.php';
class npkModels extends dbh
{
    public function __construct()
    {
    }
    public function getAllIphone()
    {
        $sql = "select * from product where id_category = 2";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
}

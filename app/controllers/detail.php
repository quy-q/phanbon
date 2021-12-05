<?php
require_once 'app/models/detailProductModels.php';
require_once 'app/models/connect.php';
class detail extends Core
{
    public function __construct()
    {
    }
    public function detailProduct($params)
    {
        require_once 'app/views/home/detail_product.php';
    }
}
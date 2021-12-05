<?php
require_once 'app/models/connect.php';
class userModels extends dbh
{
    public function __construct()
    {
    }
    public function checkLogin($myusername, $mypassword)
    { // cach 1
        /*$conns = new dbh;
        $user = $conns->connect();
        $rows = mysqli_query($user, "
            select * from user where email = '$myusername' and pass = '$mypassword'
        ");*/

        //cach 2
        $sql = "select * from user where email = '$myusername' and pass = '$mypassword'";
        $rows = $this->connect()->query($sql);
        return $rows;
    }
    public function getUserId($count)
    {
        $sql = "select * from user where id ='$count' ";
        $name = $this->connect()->query($sql);
        return $name;
    }
}
<?php
class dbh
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public function connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "asm_php";


        $conn = new mysqli($this->servername, $this->username, $this->password,  $this->dbname);


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        return $conn;
    }
}
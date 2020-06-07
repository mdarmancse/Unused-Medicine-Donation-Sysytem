<?php
class DB{


    public $conn;

    public function __construct()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=umds", $username, $password);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }


    }




}
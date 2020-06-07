<?php


require_once 'DB.php';
class Message extends DB {


    public function store($data){


        $sql="INSERT INTO `send_mail`(name, email, subject,msg) VALUES ('$data[name]','$data[email]','$data[subject]','$data[msg]')";

        $sth = $this->conn->exec($sql);
    }






}
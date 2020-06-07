<?php

require_once 'DB.php';

class UserController extends DB{


    public function user(){

        $sql="SELECT * FROM tbl_users";
        $sth = $this->conn->query($sql);
        $sth = $sth->fetchAll(PDO::FETCH_OBJ);

        if ($sth) {

            return $sth;
        } else {

        }




    }
    public function view($id){
        //
        $sql="SELECT * FROM tbl_users WHERE id=$id";
        $sth = $this->conn->query($sql);
        $user = $sth->fetch(PDO::FETCH_OBJ);

        if ($user) {

            return $user;
        } else {

        }



    }
    public function delete($id){

        $sql="DELETE FROM `donation_form` WHERE id=$id";
        $sth = $this->conn->exec($sql);

    }



}
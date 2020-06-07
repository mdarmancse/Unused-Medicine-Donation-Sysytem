<?php

require_once 'DB.php';

class DonarController extends DB{


    public function donar(){

        $sql="SELECT * FROM donation_form";
        $sth = $this->conn->query($sql);
        $sth = $sth->fetchAll(PDO::FETCH_OBJ);

        if ($sth) {

            return $sth;
        } else {

        }




    }
    public function view($id){
        //
        $sql="SELECT * FROM donation_form WHERE id=$id";
        $sth = $this->conn->query($sql);
        $donar = $sth->fetch(PDO::FETCH_OBJ);

        if ($donar) {

            return $donar;
        } else {

        }



    }
    public function delete($id){

        $sql="DELETE FROM `donation_form` WHERE id=$id";
        $sth = $this->conn->exec($sql);

    }
    public function edit(){




    }


}
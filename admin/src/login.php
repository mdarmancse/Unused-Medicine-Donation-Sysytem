<?php

require_once 'DB.php';

class Login extends DB
{

    public function login_check($data)
    {

        $password = md5($data['password']);
        $sql = "SELECT * FROM admin_login WHERE email_address='$data[email_address]' AND password='$password'";
        $sth = $this->conn->query($sql);
        $user_info = $sth->fetch(PDO::FETCH_OBJ);


//        echo "<pre>";
//        print_r($user_info);
//        die();
//


        if ($user_info) {
            session_start();
            $_SESSION['id'] = $user_info->id;
            $_SESSION['name'] = $user_info->name;
            //     for details
            $_SESSION['email_address'] = $user_info->email_address;

            $_SESSION['phone_number'] = $user_info->phone_number;
            $_SESSION['password'] = $user_info->password;


/////////////////////////////////////////////////////////////////////////////////////////
            header("Location:donar.php");

        } else {

            $message = "user id or password not valid";
            return $message;
            //header("Location:login.php");
        }

        echo "<pre>";
        print_r($user_info);
    }

    public function user_logout()
    {

        unset($_SESSION['id']);
        unset($_SESSION['name']);

        unset($_SESSION['phone_number']);
        /////////////
        unset($_SESSION['password']);



        ////////
        header("Location:login.php");

    }

    public function registration($data)
    {
        $password = md5($data['password']);
        $sql = "INSERT INTO admin_login (name, email_address,phone_number,password) VALUES ('$data[name]', '$data[email_address]', '$data[phone_number]', '$password')";
        $sth = $this->conn->exec($sql);
        if ($sth) {
           /* $message = "Insert Successfully";
            return $message; */

            header("Location:donar.php");

        } else {


        }
    }


}
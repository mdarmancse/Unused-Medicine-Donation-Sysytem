<?php

require_once 'DB.php';

class Login extends DB
{

    public function login_check($data)
    {

        $password = md5($data['password']);
        $sql = "SELECT * FROM tbl_users WHERE email_address='$data[email_address]' AND password='$password'";
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
            $_SESSION['password'] = $user_info->password;
            $_SESSION['phone_number'] = $user_info->phone_number;
            $_SESSION['district'] = $user_info->district;
            $_SESSION['dob'] = $user_info->dob;
            $_SESSION['gender'] = $user_info->gender;
            $_SESSION['profile_picture'] = $user_info->profile_picture;
/////////////////////////////////////////////////////////////////////////////////////////
            header("Location:../views/template.php");

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
        /////////////
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
        unset($_SESSION['district']);
        unset($_SESSION['dob']);
        unset($_SESSION['gender']);
        unset($_SESSION['profile_picture']);

        ////////
        header("Location:../views/login.php");

    }

    public function registration($data)
    {
        $password = md5($data['password']);
        $sql = "INSERT INTO tbl_users (name, email_address,password,phone_number,district,dob,gender,profile_picture) VALUES ('$data[name]', '$data[email_address]', '$password', '$data[phone_number]', '$data[district]',' $data[dob]',' $data[gender]','$data[profile_picture]')";
        $sth = $this->conn->exec($sql);
        if ($sth) {
           /* $message = "Insert Successfully";
            return $message; */

            header("Location:../views/template.php");

        } else {


        }
    }


}
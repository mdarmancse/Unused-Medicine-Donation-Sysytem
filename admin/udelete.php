<?php
require_once 'src/UserController.php';


$obj=new UserController();
$obj->delete($_GET['id']);
header('Location:user.php');

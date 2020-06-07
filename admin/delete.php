<?php
require_once 'src/DonarController.php';


$obj=new DonarController();
$obj->delete($_GET['id']);
header('Location:donar.php');

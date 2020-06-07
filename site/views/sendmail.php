<?php

require_once '../src/Message.php';

$obj=new Message();


$obj->store($_POST);
header('Location:index.php');


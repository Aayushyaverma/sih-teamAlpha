<?php

require_once 'error.php';

$con = new mysqli('127.0.0.1','localhost@root','root','medicine');

if($con->connect_error){
    die('connection failed'.$con->connect_errno);
}

?>

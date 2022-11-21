<?php session_start();


//unset($_SESSION['initial']);
session_unset();
session_destroy();
//$_SESSION = array();

header('location:../index.html');
?>
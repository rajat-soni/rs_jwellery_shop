<?php require 'configDb/config.php';
     require '../function/function.inc.php';
   
    session_start();
    unset($_SESSION['ADMIN_LOGIN']);
    unset($_SESSION['ADMIN_ID']);
    unset($_SESSION['ADMIN_USER']);
    header("location:adminLogin.php");
  
    die();
?>
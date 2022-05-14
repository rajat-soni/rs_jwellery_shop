<?php require 'admin/configDb/config.php';
    require 'function.inc.php';
    session_start();
    unset($_SESSION['USER_LOGIN']);
    unset($_SESSION['USER_ID']);
    unset($_SESSION['USER_NAME']);
    header("location:login.inc.php");
    die;

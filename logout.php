<?php

session_start();
if (isset($_SESSION['last_name'])){
    unset($_SESSION['last_name']);
    header("location:login.php");
}
else{
    header("location:login.php");
}
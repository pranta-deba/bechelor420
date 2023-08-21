<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
 };
 require "dbConfig.php";

 if(isset($_POST['submit'])){
    $phone = $_POST['subscribe-number'];
    header("location:../index.php?xyz=$phone&m=Please Login!");
 };
?>
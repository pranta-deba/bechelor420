<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
 };

 if(isset($_POST['submit'])){
    require "dbConfig.php";

    $phone = $_POST['number'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE phone='$phone' limit 1";
    $record = $db->query($query);

    if($record->num_rows > 0){
        $result = $record->fetch_assoc();

        if($password == $result['password']){
            $_SESSION['userid'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['loggedin'] = true;
            $_SESSION['role'] = $result['role'];
            if($result['role'] == "unknown" || $result['role'] == "member"){
                header("location:../index.php");
            };
            if($result['role'] == "admin" || $result['role'] == "leader"){
                header("location:../admin/index.php");
            };
        }else{
            header("location:../index.php?xyz=$phone&m=Password not match");
        }
    }else{
        header("location:../signup.php?m=Please Signup now!");
    };
}else{
    header("HTTP/1.1 401 Unauthorized");
    exit;
};

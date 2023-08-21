<?php 
if(session_status() === PHP_SESSION_NONE){
  session_start();
};
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] && $_SESSION['role'] == "admin"){

  }elseif(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] && $_SESSION['role'] == "leader"){

  }else{
    // header("HTTP/1.1 401 Unauthorized");
    header("location: ../index.php");
  };
?>
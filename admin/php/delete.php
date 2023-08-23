<?php
// check admin
require "adminLeader.php";

if(isset($_GET['id'])){
    require "../../php/dbConfig.php";

    $id = $_GET['id'];
    $q = "delete from users where id='{$id}' limit 1";
    $db->query($q);
    if($db->affected_rows){
        header("location: ../usersaccess.php");
    }     
}elseif(isset($_GET['id2'])){
    require "../../php/dbConfig.php";
    $id2 = $_GET['id2'];
    $q2 = "delete from chats where id='{$id2}' limit 1";
    $db->query($q2);
    if($db->affected_rows){
        header("location: ../massage.php");
    }    
}elseif(isset($_GET['id3'])){
    require "../../php/dbConfig.php";
    $id3 = $_GET['id3'];
    $q3 = "delete from contacts where id='{$id3}' limit 1";
    $db->query($q3);
    if($db->affected_rows){
        header("location: ../contactmail.php");
    }    
}else{
    header("HTTP/1.1 401 Unauthorized");
    exit;
};
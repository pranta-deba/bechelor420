<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "dbConfig.php";

if (isset($_POST['chats'])) {

    $id = $_POST['id'];
    if ($id == "") {
        header("Location: ../index.php?m=Please Sign in!");
    } else {
        $chatsmgs = $db->escape_string($_POST['chatsmgs']);
        // var_dump($id,$chatsmgs);
        $insertQuery = "INSERT INTO chats values(null,'" . $id . "','" . $chatsmgs . "',null)";
        $db->query($insertQuery);
        if ($db->affected_rows) {
            header("Location: ../index.php#section_3");
        };
    }
};

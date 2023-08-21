<?php
if (isset($_POST['submitMassage'])) {

    require "dbConfig.php";

    $name = $db->escape_string($_POST['name']);
    $phone = $_POST['Phone'];
    $subject = $db->escape_string($_POST['subject']);
    $message = $db->escape_string($_POST['message']);



    if (strlen($phone) < 11 || strlen($phone) > 11) {
        header("location: ../index.php?contactValid=Please 11 digit number!");
    } else {
        $insertQuery = "INSERT INTO contacts values(null,'" . $name . "','" . $phone . "','" . $subject . "','" . $message . "',null)";
        $db->query($insertQuery);
        if ($db->affected_rows) {
            header("Location: ../index.php?contactName=$name");
        };
    }
};

<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// };
// require "dbConfig.php";

// if (isset($_POST['Changes'])) {
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $phone = $_POST['number'];
//     $title = $_POST['title'];
//     $image = $_POST['image'];



//     $update = "UPDATE `users` SET `id`='" . $id . "',`name`='" . $name . "',`phone`='" . $phone . "',`title`='" . $title . "',`sku`='" . $sku . "' WHERE id='" . $id . "'";

//     $db->query($update);
//     if ($conn->affected_rows) {
//         header("location: ../pofile.php");
//     };
// };
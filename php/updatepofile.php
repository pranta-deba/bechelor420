<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "dbConfig.php";

if (isset($_POST['Changes'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['number'];
    $title = $_POST['title'];

    if ($name == "") {
        header("location: ../pofile.php?id=$id&abc=Field is required!");
    } else {
        if ($phone == "") {
            header("location: ../pofile.php?id=$id&abc=Field is required!");
        } else {
            if ($title == "") {
                header("location: ../pofile.php?id=$id&abc=Field is required!");
            } else {

                $update = "UPDATE `users` SET `id`='" . $id . "',`name`='" . $name . "',`phone`='" . $phone . "',`title`='" . $title . "' WHERE id='" . $id . "'";
                $db->query($update);
                if ($db->affected_rows) {
                    session_unset();
                    session_destroy();
                    header("Location:../index.php?mgs=Successfully.Now you can login");
                };
            };
        };
    };
}else{
    header("HTTP/1.1 401 Unauthorized");
    exit;
};



if (isset($_POST['passimg'])) {

    $id = $_POST['id'];
    $image = $_POST['image'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $image = null;

    $q = "select * from users where id='" . $id . "' limit 1";
    $r = $db->query($q);
    if (!$r->num_rows) {
        exit;
    }
    $row = $r->fetch_assoc();
    if ($oldpassword == "") {
        header("location: ../pofile.php?id=$id&abc=Password is required!!");
    } else {
        if ($newpassword == "") {
            header("location: ../pofile.php?id=$id&abc=Password is required!!");
        } else {
            if ($row['password'] == $oldpassword) {

                if (isset($_FILES['image'])) {
                    if (!file_exists($_FILES["image"]["tmp_name"])) {
                        header("Location:../signup.php?id=$id&abcd=Choose image file to upload.!");
                    } else {
                        $image = uniqid() . ".png";
                        move_uploaded_file($_FILES['image']['tmp_name'], "../images/" . $image);
                    };
                };

                $update2 = "UPDATE `users` SET `id`='" . $id . "',`password`='" . $newpassword . "',`image`='" . $image . "' WHERE id='" . $id . "'";
                $db->query($update2);
                if ($db->affected_rows) {
                    session_unset();
                    session_destroy();
                    header("Location:../index.php?mgs=Successfully.Now you can login");
                };

            } else {
                header("location: ../pofile.php?id=$id&abcd=Old Password Not Match!!");
            };
        };
    };
}else{
    header("HTTP/1.1 401 Unauthorized");
    exit;
};

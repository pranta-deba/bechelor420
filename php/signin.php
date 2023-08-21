<?php

if (isset($_POST['submit'])) {


    require "dbConfig.php";

    $name = $db->escape_string($_POST['name']);
    $phone = $db->escape_string($_POST['number']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $title = $db->escape_string($_POST['education']);
    $role = $_POST['role'];
    $image = null;
    $error = false;

    if ($name !== "") {

        if (strlen($phone) < 11 || strlen($phone) > 11) {
            $error = true;
            header("Location:../signup.php?m=Please 11 digit number!");
        } else {
            if ($password !== "" || $cpassword !== "") {
                if ($password !== $cpassword) {
                    $error = true;
                    header("Location:../signup.php?m=Password Not Match!");
                } else {
                    if ($title !== "") {

                        if (isset($_FILES['image'])) {
                            if (!file_exists($_FILES["image"]["tmp_name"])) {
                                $error = true;
                                header("Location:../signup.php?m=Choose image file to upload.!");
                            } else {
                                $image = uniqid() . ".png";
                                move_uploaded_file($_FILES['image']['tmp_name'], "../images/" . $image);
                            };
                        };
                        if ($role == "member" || $role == "unknown") {



                            $insertQuery = "INSERT INTO users values(null,'" . $name . "','" . $phone . "','" . $password . "','" . $title . "','" . $image . "','". $role ."',null)";
                            $db->query($insertQuery);
                            if ($db->affected_rows) {
                                header("Location: ../index.php?xyz=$phone&mgs=Successfully.Now you can login");
                            };



                        } else {
                            $error = true;
                            header("Location:../signup.php?m=This select field is required!");
                        };
                    } else {
                        $error = true;
                        header("Location:../signup.php?m=This title field is required!");
                    };
                };
            } else {
                $error = true;
                header("Location:../signup.php?m=This password field is required!");
            };
        };
    } else {
        $error = true;
        header("Location:../signup.php?m=This name field is required!");
    };
};

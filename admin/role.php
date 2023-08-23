<?php
require "php/adminLeader.php";
require "../php/dbConfig.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = "SELECT * FROM users WHERE id='" . $id . "' limit 1";
    $r = $db->query($q);
    $row = $r->fetch_assoc();
} elseif (isset($_POST['roleUpdate']) && isset($_GET['id2'])) {
    $newRole = $_POST['rolee'];
    $usersId = $_GET['id2'];

    $uq = "update users set role='" . $newRole . "' where id='" . $usersId . "' ";
    $db->query($uq);
    $message = "Role updated.";
    header("location: usersaccess.php?roleUpdateMgs=$message");
} else {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/templatemo-topic-listing.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/customize.css">

</head>

<body class="topics-listing-page" id="top">

    <main id="main-content2">

        <!-- loading ani start -->
        <div class="anima" id="anima">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
            <div class="five"></div>
        </div>
        <!-- loading ani end -->

        <!-- navbar  -->
        <?php include "component/navbar.php"; ?>
        <!-- navbar  -->

        <header class="site-header2 d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Change Role</li>
                            </ol>
                        </nav>

                        <h2 class="text-white"><?= $row['name'] ?></h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="section-padding section-bg">
            <div class="container">
                <div class="row">


                    <form action="role.php?id2=<?= $id ?>" method="post" style="width: 80%; display: block; margin: 0 auto;">
                        <select class="form-select" name="rolee" aria-label="Default select example">
                            <option value="admin" <?= $row['role'] == "admin" ? "selected" : ""; ?>>Admin</option>
                            <option value="leader" <?= $row['role'] == "leader" ? "selected" : ""; ?>>Leader</option>
                            <option value="member" <?= $row['role'] == "member" ? "selected" : ""; ?>>Member</option>
                        </select>
                        <div class="text-center">
                            <button type="submit" name="roleUpdate" class="m-4 text-white bg-danger" style="outline: none; border: none; padding: 5px 10px;">Update Role</button>
                        </div>
                    </form>


                </div>
            </div>
        </section>


    </main>

    <!-- footer start -->
    <?php include "component/footer.php" ?>
    <!-- footer end -->

    <!-- JAVASCRIPT FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/loadinganima.js"></script>
    <script src="../js/custom.js"></script>

</body>

</html>
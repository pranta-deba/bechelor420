<?php 
require "php/adminLeader.php";
require "../php/dbConfig.php";
$adminS = "SELECT * FROM users WHERE `role`='admin'";
$AdminQ = $db->query($adminS);

$leaderS = "SELECT * FROM users WHERE `role`='leader'";
$leaderQ = $db->query($leaderS);

$memberS = "SELECT * FROM users WHERE `role`='member'";
$memberQ = $db->query($memberS);

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

</head>

<body class="topics-listing-page" id="top">

    <main>

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

                                <li class="breadcrumb-item active" aria-current="page">Member</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">All Member</h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="section-padding section-bg">
            <div class="container">
                <div class="row" style="width: 100%; overflow: scroll;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Role</th>
                                <th scope="col">image</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                             while ($adminRow = $AdminQ->fetch_assoc()) {
                                echo '<tr>
                                <th scope="row">' . $adminRow['id'] . '</th>
                                <td>' . $adminRow['name'] . '</td>
                                <td>' . $adminRow['phone'] . '</td>
                                <td>' . $adminRow['role'] . '</td>
                                <td> <img src="../images/' . $adminRow['image'] . '" class="img-fluid" alt="" style="display: block;width: 100px;height: 100px;object-fit: cover;"></td>
                            </tr>';
                            }
                             while ($leaderRow = $leaderQ->fetch_assoc()) {
                                echo '<tr>
                                <th scope="row">' . $leaderRow['id'] . '</th>
                                <td>' . $leaderRow['name'] . '</td>
                                <td>' . $leaderRow['phone'] . '</td>
                                <td>' . $leaderRow['role'] . '</td>
                                <td> <img src="../images/' . $leaderRow['image'] . '" class="img-fluid" alt="" style="display: block;width: 100px;height: 100px;object-fit: cover;"></td>
                            </tr>';
                            }
                             while ($memberRow = $memberQ->fetch_assoc()) {
                                echo '<tr>
                                <th scope="row">' . $memberRow['id'] . '</th>
                                <td>' . $memberRow['name'] . '</td>
                                <td>' . $memberRow['phone'] . '</td>
                                <td>' . $memberRow['role'] . '</td>
                                <td> <img src="../images/' . $memberRow['image'] . '" class="img-fluid" alt="" style="display: block;width: 100px;height: 100px;object-fit: cover;"></td>
                            </tr>';
                            }
                            ?>
                        </tbody>
                    </table>

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
    <script src="../js/custom.js"></script>

</body>

</html>
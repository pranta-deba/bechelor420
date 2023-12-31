<?php
require "php/adminLeader.php";
require "../php/dbConfig.php";


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

                                <li class="breadcrumb-item active" aria-current="page">Massage</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Change</h2>
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
                                <th scope="col">User Id</th>
                                <th scope="col">Massage</th>
                                <th scope="col">Time</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectChats = "SELECT * FROM chats WHERE 1";
                            $ChatsQuery = $db->query($selectChats);
                            while ($row = $ChatsQuery->fetch_assoc()) {
                                echo "<tr>
                                <th scope='row'>".$row['id']."</th>
                                <td>".$row['users_id']."</td>
                                <td>".$row['massage']."</td>
                                <td>".$row['created_at']."</td>
                                <td><a onclick=\"return confirm('Are you sure want to delete this?');\" href='php/delete.php?id2={$row['id']}' class='btn btn-sm btn-danger text-white'>Delete</a></td>
                            </tr>";
                            };
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
    <script src="../js/loadinganima.js"></script>
    <script src="../js/custom.js"></script>

</body>

</html>
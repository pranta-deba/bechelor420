<?php
require "php/adminLeader.php";
require "../php/dbConfig.php";
$q = "SELECT count(*) AS total FROM users WHERE `role`='admin' OR `role`='leader' OR `role`='member'";
$r = $db->query($q);
$totalMessMember = $r->fetch_assoc();


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
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
                                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Participent</h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h3 class="mb-2"></h3>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 m-auto mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="member.php">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Total Mes Member : <?= $totalMessMember['total'] ?></h5>

                                        <p class="mb-0">There are <?= $totalMessMember['total'] ?> members here.</p>
                                    </div>

                                    <span class="badge bg-finance rounded-pill ms-auto"><?= $totalMessMember['total'] ?></span>
                                </div>

                                <div class="row d-flex justify-content-center">
                                    <?php
                                    $q2 = "SELECT * FROM users WHERE `role`='admin' OR `role`='leader' OR `role`='member'";
                                    $r2 = $db->query($q2);
                                    while ($img = $r2->fetch_assoc()) {
                                        echo '<div class="col-lg-4 col-sm-12 col-md-6"><img src="../images/' . $img['image'] . '" class="img-fluid" alt="" width="70px" style="display: block;width: 50%;height: 100px;object-fit: cover;margin-top: 35px; margin-left:35px;"></div>';
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                    </div>
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
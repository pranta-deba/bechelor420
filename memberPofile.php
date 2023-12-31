<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "php/dbConfig.php";

if (empty($_GET['id'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit;
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = "select * from users where id='" . $id . "' limit 1";
    $r = $db->query($q);
    if (!$r->num_rows) {
        exit;
    }
    $row = $r->fetch_assoc();
    // var_dump($row);
};

if (isset($_SESSION['loggedin'])  && $_SESSION['loggedin'] == true) {
    $meeid = $_SESSION['loggedin'];
};

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Membar Pofile</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
</head>

<body id="top">

    <main>

        <!-- navbar strat -->
        <?php include "components/navbarmore.php"; ?>
        <!-- navbar end -->

        <!-- pofile -->
        <header class="site-header2 d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Pofile</li>
                            </ol>
                        </nav>
                        <h2 class="text-white"><?= $row['name'] ?></h2>
                    </div>

                </div>
            </div>
        </header>
        <section class="section-padding section-bg">

            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-4 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div style="position: relative;width: 200px;height: 200px;overflow: hidden;border-radius: 50%;">
                                            <img src="images/<?= $row['image'] ?>" alt="Admin" class="p-1 bg-primary" style="width: 100%;height: auto;">
                                        </div>
                                        <div class="mt-3">
                                            <h4><?= $row['name'] ?></h4>
                                            <p class="text-secondary mb-1"><?= $row['title'] ?></p>
                                            <p class="text-muted font-size-sm"><a href="tel: 01825406189" class="site-footer-link">
                                                    <?= $row['phone'] ?>
                                                </a></p>
                                            <button class="btn" style="background-color: aquamarine;">Follow</button>
                                            <button class="btn">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- pofile -->


        <!-- subscribe -->
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        } else { ?>
            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12">
                            <img src="images/rear-view-young-college-student.jpg" class="newsletter-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                            <form class="custom-form subscribe-form" action="php/subscribe.php" method="post" role="form">
                                <h4 class="mb-4 pb-2">Get Newsletter</h4>

                                <input type="number" name="subscribe-number" id="subscribe-number" class="form-control" placeholder="Enter your 11 digit phone number" required="">

                                <div class="col-lg-12 col-12">
                                    <button type="submit" name="submit" class="form-control">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

        <?php }; ?>
        <!-- subscribe -->
    </main>


    <!-- footer start -->
    <?php include "components/footermore.php"; ?>
    <!-- footer end -->

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
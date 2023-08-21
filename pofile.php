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


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Yours Pofile</title>
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
                        <h2 class="text-white"><?= $row['name'] ?>'s Pofile</h2>
                    </div>

                </div>
            </div>
        </header>
        <section class="section-padding section-bg">

            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div style="position: relative;width: 200px;height: 200px;overflow: hidden;border-radius: 50%;">
                                            <img src="images/<?= $row['image'] ?>" alt="Admin" class="p-1 bg-primary" style="width: 100%;height: auto;">
                                        </div>
                                        <div class="mt-3">
                                            <h4><?= $row['name'] ?></h4>
                                            <p class="text-secondary mb-1"><?= $row['title'] ?></p>
                                            <p class="text-muted font-size-sm"><?= $row['phone'] ?></p>
                                            <button class="btn" style="background-color: aquamarine;">Follow</button>
                                            <button class="btn">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-8" id="form2">
                            <div class="card">
                                <div class="card-body">
                                    <p class="fw-bold text-info text-decoration-underline">Edit Pofile :</p>
                                    <p class="text-center text-danger"><?php echo $_GET['abc'] ?? ""; ?></p>

                                    <form action="php/updatepofile.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone Number</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="number" name="number" class="form-control" value="<?= $row['phone'] ?>" placeholder="Enter 11 digit phone number" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Education / Job Title</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="title" class="form-control" value="<?= $row['title'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary ">
                                                <input type="submit" style="background-color: aquamarine;" name="Changes" class="btn px-4" value="Save Changes">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary d-flax m-auto">
                                                <a href="javascript:void(0);" onclick="showform();" class="text-secondary text-decoration-underline my-4">Change password & image?</a>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8" id="form1">
                            <div class="card">
                                <div class="card-body">
                                    <button class="previous rounded display-5 fw-bold text-info" style="border: none; background: none;" onclick="showform2()">&#8249;</button>
                                
                                    <p class="fw-bold text-info text-decoration-underline">Password & Images Change</p>
                                    <p class="text-center text-danger"><?php echo $_GET['abcd'] ?? ""; ?></p>

                                    <form action="php/updatepofile.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Change Image</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" class="form-control" name="image" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Old Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control" name="oldpassword" value="<?= $row['password'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">New Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control" name="newpassword" required>
                                            </div>
                                        </div>                                        
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary d-flax m-auto">
                                                <a href="php/forgotpass.php" class="text-secondary text-decoration-underline mb-4">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="row d-flex">
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" style="background-color: aquamarine;" name="passimg" class="btn px-4" value="Save Changes">
                                            </div>
                                            <div class="col-sm-3"></div>
                                        </div>
                                    </form>

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
    <script src="js/hideshow.js"></script>

</body>

</html>
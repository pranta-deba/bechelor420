<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
require "php/dbConfig.php";



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign up</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
</head>

<body class="topics-listing-page" id="top">
    <main>

       <!-- navbar strat -->
       <?php include "components/navbarmore.php"; ?>
        <!-- navbar end -->

        <!-- form -->
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Sign up</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Registration Form</h2>
                    </div>

                </div>
            </div>
        </header>
        <section class="section-padding section-bg">
            <div class="container">
                
            <p class="text-center text-danger"><?php echo $_GET['m'] ?? ""; ?></p>
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <form action="php/signin.php" method="post" enctype="multipart/form-data"
                            class="custom-form contact-form" role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" required>
                                        <label for="floatingInput">Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="number" name="number" id="number" class="form-control"
                                            placeholder="Enter your 11 digit phone number" required>
                                        <label for="floatingInput">Enter your 11 digit phone number</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Enter password" required>
                                        <label for="floatingInput">Enter password</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="password" name="cpassword" id="cpassword" class="form-control"
                                            placeholder="Re-type password" required>
                                        <label for="floatingInput">Re-type password</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="education" id="education" class="form-control"
                                            placeholder="Name" required>
                                        <label for="floatingInput">Education / Job Title</label>
                                    </div>

                                    <div>
                                        <label for="formFileLg" class="form-label">Upload Your Image</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file"
                                            name="image" required>
                                    </div>
                                    <select name="role" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                        <option selected disabled value="">Select Option</option>
                                        <option value="member">Member</option>
                                        <option value="unknown">Unknown Person</option>
                                      </select>
                                      
                                </div>
                                <div class="form-group form-check p-3 ms-5">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="col-lg-4 col-12 m-auto">
                                    <button type="submit" name="submit" class="form-control">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- form -->


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
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
    <title>Bechelor 420</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customize.css">
    <link rel="stylesheet" href="css/textanimate.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <style>

    </style>
</head>

<body id="top">
    <?php
    if (isset($_GET['contactName'])) {
        echo "<script> Swal.fire(
            'Thanks!',
            'For getting in touch!',
            'success'
          )</script>";
    }; ?>

    <!-- loading ani start -->
    <div class="anima" id="anima">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
        <div class="four"></div>
        <div class="five"></div>
    </div>
    <!-- loading ani end -->

    <main id="main-content">

        <!-- navbar strat -->
        <?php include "components/navbarindex.php"; ?>
        <!-- navbar end -->

        <!-- home start -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Have <span class="rotate"><span>F</span><span>u</span><span>n</span></span>,<br> Stay <span class="rotate"><span>T</span><span>u</span><span>n</span><span>e</span><span>d</span></span>, <br> And <span class="rotate"><span>E</span><span>n</span><span>j</span><span>o</span><span>y</span>.</span></h1>
                        <h6 class="text-center">This is only for bachelor boys.</h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- home end -->


        <!-- form start  -->
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        } else { ?>
            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100%">
                                    <img src="images/log.jpg" alt="" height="400px">

                                    <div class="custom-block-overlay-text">
                                        <div>
                                            <h5 class="text-white  text-center">
                                                Sign in</h5>

                                            <p class="text-center text-danger m-0"><?php echo $_GET['m'] ?? ""; ?></p>
                                            <p class="text-center text-success m-0"><?php echo $_GET['mgs'] ?? ""; ?></p>

                                            <form action="php/login.php" method="post" class="custom-form contact-form p-4" role="form" enctype="multipart/form-data">
                                                <!--  -->
                                                <div class="col-lg-12 col-12">
                                                    <div class="form-floating">
                                                        <input type="number" name="number" id="number" class="form-control" placeholder="number" value="<?php echo $_GET['xyz'] ?? ""; ?>" required="">
                                                        <label for="floatingInput">Enter 11 digit Phone Number</label>
                                                    </div>

                                                    <div class="form-floating inputBox">
                                                        <input type="password" name="password" id="password" class="form-control" placeholder="password" required="">
                                                        <label for="floatingTextarea">Password</label>
                                                        <div class="show"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="php/forgotpass.php" class="text-info text-end text-decoration-underline">Forgot password?</a>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" name="submit" class="btn custom-btn mt-4 mt-lg-3 px-5">Login</button>
                                                </div>
                                                <!--  -->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <!-- form end  -->


        <!-- management start -->
        <section class="explore-section section-padding" id="section_2">
            <div class="container">
                <div class="col-12 text-center">
                    <h2 class="mb-4">Management</h1>
                </div>
            </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">All Member</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Leader</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Admin</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                <div class="row">

                                    <?php
                                    $selectAll = "SELECT * FROM users WHERE 1";
                                    $AllQuery = $db->query($selectAll);
                                    while ($All = $AllQuery->fetch_assoc()) {
                                        echo '<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-4">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="memberPofile.php?id=' . $All['id'] . '">
                                                <div class="">
                                                    <div class="text-center">
                                                        <h5 class="mb-2 text-center">' . $All['name'] . '</h5>

                                                        <p class="mb-0 text-center">' . $All['title'] . '</p>
                                                    </div>
                                                </div>

                                                <img src="images/' . $All['image'] . '" class="custom-block-image img-fluid">
                                            </a>
                                        </div>
                                    </div>';
                                    };
                                    ?>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <?php
                                    $selectLeader = "SELECT * FROM users WHERE role='leader'";
                                    $leaderQueary = $db->query($selectLeader);
                                    while ($leader = $leaderQueary->fetch_assoc()) {
                                        echo '<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-4">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="memberPofile.php?id=' . $leader['id'] . '">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2 text-center">' . $leader['name'] . '</h5>

                                                    <p class="mb-0 text-center">' . $leader['title'] . '</p>
                                                </div>
                                            </div>

                                            <img src="images/' . $leader['image'] . '" class="custom-block-image img-fluid">
                                        </a>
                                    </div>
                                </div>';
                                    };
                                    ?>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <?php
                                    $selectadmin = "SELECT * FROM users WHERE role='admin'";
                                    $adminQueary = $db->query($selectadmin);
                                    while ($admin = $adminQueary->fetch_assoc()) {
                                        echo '<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-4">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="memberPofile.php?id=' . $admin['id'] . '">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2 text-center">' . $admin['name'] . '</h5>

                                                        <p class="mb-0 text-center">' . $admin['title'] . '</p>
                                                    </div>
                                                </div>
                                                <img src="images/' . $admin['image'] . '" class="custom-block-image img-fluid">
                                            </a>
                                        </div>
                                    </div>';
                                    };
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- management end -->


        <!-- chats start -->
        <section class="faq-section section-padding section-bg" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Member Chats.!</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-8 col-12 m-auto" style="height: 100%;">
                        <div class="card overflow-scroll flex-column-reverse" style="width: 100%; max-height: 600px; background-color: transparent !important; border: none;">

                            <?php
                            // $selectQ = "SELECT * FROM users WHERE role='Member'";

                            $selectQ2 = "select chats.*, users.name as name from chats,users where chats.users_id=users.id order by chats.created_at desc";
                            $member2 = $db->query($selectQ2);
                            // $selectQ2 = "SELECT * FROM users WHERE `id`=";
                            // $memberRow2 = $member2->fetch_assoc();


                            while ($memberRow2 = $member2->fetch_assoc()) {
                                echo '<div class="card-body">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <div>
                                            <p class="text-dark h6"><small>Posted By : <span class="text-info fw-bold h6">' . $memberRow2['name'] . '</span></small>
                                            </p>
                                            <p class="text-dark h6"><small>Time : <span class="text-info h6">' . $memberRow2['created_at'] . '</small></span>
                                            </p>
                                        </div>
                                        <hr>
                                        <p class="fs-6 fw-bold text-center">' . $memberRow2['massage'] . '</p>
                                    </div>
                                </div>
                            </div>';
                            };
                            ?>



                        </div>
                        <div class="chatmgsbtn">
                            <form action="php/chats.php" method="post" enctype="multipart/form-data">
                                <div class="container mt-1" style="width: 100%;">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="hidden" name="id" value="<?= $_SESSION['userid'] ?? ""; ?>">
                                            <textarea class="form-control" id="" rows="3" name="chatsmgs" placeholder="Massage"></textarea>
                                            <button type="submit" name="chats" class="form-control btn">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chats end -->

        <!-- question start -->
        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is the need for this website?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">This website is mainly opened for entertainment and
                                        <strong>no one should take it seriously.</strong> I'm unemployed, so sometimes I
                                        feel a little angry.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        This website comes to your every need?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We are all good, so that <strong>all the bachelors can hang out together in one
                                            place</strong> and then open this website to settle all the accounts by
                                        mail.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can everyone be a member here?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        No bro, can everyone be a member here, only those who are bachelors together can
                                        be members and <code>access</code> here.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- question end -->

        <!-- contact -->
        <section class="contact-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Get in touch</h2>
                    </div>

                    <div class="col-lg-12 col-12 mb-4 mb-lg-2">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d591.8709616877476!2d91.81168574791556!3d22.357184922543375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1692010670973!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mb-3 mt-lg-3 mb-md-0 ms-auto">
                        <h4 class="mb-3">Home Address 1</h4>

                        <p>Khulshi 1 No. &amp; Next to Morjid , Chittagong.</p>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Phone</span>

                            <a href="tel: +8801860-352373" class="site-footer-link">
                                +8801860-352373
                            </a>
                        </p>

                        <p class="d-flex align-items-center">
                            <span class="me-2">Email</span>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@Owner.com
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mb-3 mt-lg-3 mb-md-0 ms-auto">
                        <p class="text-danger text-center"><?php echo $_GET['contactValid'] ?? ""; ?></p>
                        <form action="php/contact.php" method="post" class="custom-form contact-form" role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">

                                        <label for="floatingInput">Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="number" name="Phone" id="Phone" class="form-control" placeholder="Email address" required="">

                                        <label for="floatingInput">11 Digit phone number</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="subject" id="name" class="form-control" placeholder="Name" required="">

                                        <label for="floatingInput">Subject</label>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project" required></textarea>

                                        <label for="floatingTextarea">Tell me about the project</label>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" name="submitMassage" class="form-control">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- contact -->



        <!-- footer start -->
        <?php include "components/footerindex.php"; ?>
        <!-- footer end -->

    </main>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/loadinganima.js"></script>
    <script src="js/showpass.js"></script>

</body>

</html>
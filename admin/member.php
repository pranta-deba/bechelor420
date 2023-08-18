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
                                <th scope="col">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">10</th>
                                <td>pranta deb</td>
                                <td>09876543217</td>
                                <td>admin</td>
                                <td>12-12-2023</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>pranta deb</td>
                                <td>09876543217</td>
                                <td>admin</td>
                                <td>12-12-2023</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>pranta deb</td>
                                <td>09876543217</td>
                                <td>admin</td>
                                <td>12-12-2023</td>
                            </tr>
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
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="bi-back"></i>
            <span>Bechelor</span>
        </a>

        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        } else { ?>
            <div class="d-lg-none ms-auto me-4">
                <a href="signup.php" class="fw-bold signupp">Sign Up</a>
            </div>
        <?php }; ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.php#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.php#section_2">Management</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.php#section_3">Chats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.php#section_4">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.php#section_5">Contact</a>
                </li>

                <?php if (isset($_SESSION['loggedin'])  && $_SESSION['loggedin'] == true) {
                    if ($_SESSION['role'] == "admin" ||  $_SESSION['role'] == "leader") { ?>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="admin/">Admin</a>
                        </li>

                    <?php }; ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0);" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['name'] ?></a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="pofile.php?id=<?= $_SESSION['userid'] ?>">Pofile</a></li>

                            <li><a class="dropdown-item" href="php/logout.php">Logout</a></li>
                        </ul>
                    </li>

                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="signup.php">signup</a>
                    </li>
                <?php }; ?>


            </ul>

        </div>
    </div>
</nav>
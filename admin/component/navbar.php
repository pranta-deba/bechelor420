<nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="bi-back"></i>
                    <span>Dashboard</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../index.php">Site</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="member.php">Member</a>
                        </li>
                        <?php if (isset($_SESSION['loggedin'])  && $_SESSION['loggedin'] == true) {
                    if ($_SESSION['role'] == "admin") { ?>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="usersaccess.php">Access</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="massage.php">Massage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="contactmail.php">Mail</a>
                        </li>
                        <?php }}; ?>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="../index.php#section_3">Chats</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="https://1drv.ms/x/c/561ac096931d306d/EUENoS09YEFFoF2MKW4pOCgBL0Ms1ztkgt1T-VYnSewIPg?e=zRJNMK" target="_blank">Account</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="javascript:void(0);"
                                id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><?= $_SESSION['name'] ?></a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="../pofile.php?id=<?= $_SESSION['userid'] ?>">Pofile</a></li>

                                <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
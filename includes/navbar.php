<?php
session_start();

?>
<!-- Header Section Begin -->
<header class="header header--normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo" style="display: flex; justify-content: space-between;">
                    <a href="./index.php"><img src="img/logo.png" alt="" height="50px"></a>
                    <h2 style="font-weight: bold; color: white;">SOUND</h2>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="#">Songs</a>
                                <ul class="dropdown">
                                    <li><a href="./videos.php">Videos Song</a></li>
                                    <li><a href="./audio.php">Audio Song</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./album.php">Album</a></li>
                                    <li><a href="./artist.php">Artist</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.php">Contact</a></li>
                            <?php
                            if (isset($_SESSION["user_name"])) {
                                ?>
                                <li><a href="#">
                                        <?php echo $_SESSION["user_name"]; ?>
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="profile.php">Profile</a></li>
                                        <li><a href="fav.php">WishList</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li><a href="login.php">Register</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End -->
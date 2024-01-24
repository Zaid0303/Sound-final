<?php
session_start();

?>
<!-- Header Section Begin -->
<header class="header">
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
                            <li class="active"><a href="./index.php">Home</a></li>
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
                                        <li><a href="fav.php">WhistList</a></li>
                                        <li><a href="admin-sound/sign-in.php">Admin Login</a></li>
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
<style>
   .btn-search{
      background-color: #ff4546 !important;
      color: white !important;
   }
   .btn-search:hover{
      background-color: #ff5859 !important;
      /* color: burlywood !important; */
   }
   .form-control{
      border-color: #ff4546 !important;
   }
</style>
<!-- Header Section End -->
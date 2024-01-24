<?php
include('includes/header.php');
include('includes/navbar.php');
include('config.php');
?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Artist Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

<!-- Tours Section Begin -->
<section class="tours spad">
    <div class="container">
    <?php
                if (isset($_GET['id'])) {
                    $c_id = $_GET['id'];
    
                        $artist_result = mysqli_query($connection, "SELECT `c_id` , `c_artist` , `c_artist_img`  FROM `categories` where `c_id` = '$c_id' ");
                        if(mysqli_num_rows($artist_result) > 0){
                            while($row = mysqli_fetch_assoc($artist_result)){
       
                    ?>
        <div class="row">
            <div class="col-lg-6 order-lg-1">
                <div class="tours__item__text">
                    <h2><?php echo $row['c_artist']; ?></h2>
                    <div class="tours__text__widget">
                        <ul>
                            <!-- <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Dec 15, 2019</span>
                                </li> -->
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Hoshiarpur, Punjab
                            </li>
                        </ul>
                        <!-- <div class="price">$ 35.00</div> -->
                    </div>
                    <div class="tours__text__desc">
                        <p>Dance into the vibrant world of Honey Singh songs, where each track brings forth an eclectic
                            blend of rhythm, beats, and captivating lyrics that capture the pulse of the youth.</p>
                        <p> A symbol of innovation in the Indian music industry, each Honey Singh new song is a journey
                            into the dynamic and exhilarating world of modern music.</p>
                    </div>
                    <a href="#" class="primary-btn border-btn">Show More</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2">
                <div class="tours__item__pic">
                    <img src="admin-sound/category/artist-img/<?php echo $row["c_artist_img"] ?>" alt="">
                </div>
            </div>


        </div>
        <?php 
                            }
                        }
                    }
                    ?>

    </div>
</section>
<!-- Tours Section End -->

<?php
include('includes/footer.php')
    ?>
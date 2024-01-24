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
                        <span>Artist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Discography Section Begin -->
    <section class="discography spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Artist</h2>
                        <h1>Sound Blast</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php
                        $artist_result = mysqli_query($connection, "SELECT `c_id` , `c_artist` , `c_artist_img`  FROM `categories`");
                        if(mysqli_num_rows($artist_result) > 0){
                            while($row = mysqli_fetch_assoc($artist_result)){
       
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item" style="height: 500px;">
                            <div class="discography__item__pic">
                                <img src="admin-sound/category/artist-img/<?php echo $row["c_artist_img"] ?>" alt="" style="height: 300px; object-fit:cover; ">
                            </div>
                            <div class="discography__item__text">
                                <span></span>
                                <h4><?php echo $row['c_artist']; ?></h4>
                                <div class="tag-date" style="cursor: default;">
                                    <a href="artist-details.php?id=<?php echo $row["c_id"] ?>"><span>Show More Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php 
                            }
                        }
                    ?>


            </div>
        </div>
    </section>
    <!-- Discography Section End -->

<?php 
include('includes/footer.php');
?>
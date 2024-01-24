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
                        <span>Album</span>
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
                        <h2>Album</h2>
                        <h1>Sound Blast</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                
                $album_result = mysqli_query($connection, "SELECT `c_album` , `c_album_img`  FROM `categories`");
                if(mysqli_num_rows($album_result) > 0){

                while($row = mysqli_fetch_assoc($album_result)){
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item" style="height: 500px;">
                            <div class="discography__item__pic">
                                <img src="admin-sound/category/album-img/<?php echo $row["c_album_img"] ?>" alt="" style="height: 300px; object-fit:cover;">
                            </div>
                            <div class="discography__item__text">
                                <span></span>
                                <h4><?php echo $row["c_album"] ?></h4>
                                <div class="tag-date" style="cursor: default;">
                                    <a href="audio.php"><span>Listen Now</span></a>
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
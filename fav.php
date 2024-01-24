<?php
include('includes/header.php');
include('includes/navbar.php');
include("config.php");

?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb__links">
               <a href="index.php"><i class="fa fa-home"></i> Home</a>
               <span>WishList Song</span>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Breadcrumb End -->
<section class="discography spad">
    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>Wishlist Song</h2>
                    <h1>Sound Blast</h1>
                </div>
                <!-- <div class="section-title center-title">
                    <input type="submit" class="btn btn-dark" name="music" value="Music" style="background: #ff4541; color: white; width: 150px;">
                    <input type="submit" class="btn btn-dark" name="video" value="Video" style="background: #ff4541; color: white; width: 150px;">
                </div> -->
            </div>
        </div>

        <!-- Wishlist-->

        <!-- card start -->
        <div class="row d-flex justify-content-center">
            <?php
            $userId = $_SESSION['user_id'];
            $fetch = "SELECT 
            wishlist.wishlist, 
            wishlist.user_id, 
            wishlist.music_id, 
            music.m_id, 
            music.m_name, 
            music.m_artist, 
            music.m_year, 
            music.m_album, 
            music.m_genre, 
            music.m_language, 
            music.m_img, 
            music.m_file, 
            music.status, 
            music.cat_id 
        FROM 
            wishlist
        JOIN 
            music ON wishlist.music_id = music.m_id
        WHERE wishlist.user_id = '$userId'";
            $fetch_result = mysqli_query($connection, $fetch);
            if (mysqli_num_rows($fetch_result) > 0) {
                while ($row = mysqli_fetch_assoc($fetch_result)) {
                  

                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6" id="wishcard">
                        <div class="card mt-4">
                            <a href="deletfromwishlist.php?id=<?php echo $row['m_id'] ?>" class="remove-item"  data-id="<?=$row['m_id']?>"><i class="fa fa-times"></i></a>
                            <a href="audioplayer1.php?id=<?php echo $row['m_id'] ?>">
                                <img src="<?php echo 'admin-sound/song-img/' . $row["m_img"] ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="blog__details__services__item__text">
                                <h6>
                                    <a href="">
                                        <?php echo $row['m_name'] ?>
                                    </a>
                                </h6>
                                <span>
                                    <?php echo $row['m_artist'] ?>
                                    <input id="music_id" type="hidden" value="<?php echo $row['m_id'] ?>">
                                </span>
                            </div>
                        </div>
                    </div>

                    <!--Program to remove the music from the wishlist  -->
                    <!-- <script>
                        $(document).ready(function () {
                            // items = document.querySelectorAll('.remove-item');
                            // // console.log(items);
                            // Array.from.items.forEach(element => {
                            //     element.on('click', function (e) {

                            //     e.preventDefault()
                            //     let test=$(this).attr('data-id');
                            //     let music_id =  $('#music_id').val();
                            //     // console.log($('#music_id').val())
                            //     console.log(test)
                            //     })
                            // });
                            // $('.remove-item').on('click', function (e) {
                            //     e.preventDefault()
                            //     // let test=$(this).attr('data-id');
                            //     let music_id =  $('#music_id').val();
                            //     console.log($('#music_id').val())
                            //     // console.log(test)
                            //     // let closewish = $(this).attr('class')
                            //     // console.log(closewish)
                            //     // $.ajax({
                            //     //     url: 'favinsert.php',
                            //     //     method: 'POST',
                            //     //     data: {
                            //     //         // closewish: closewish,
                            //     //         music_id: music_id
                            //     //     },
                            //     //     success: function (data) {
                            //     //         // console.log(data);
                            //     //         // window.location.href = "fav.php";
                            //     //         // alert(data)
                            //     //     }
                            //     // })
                            // })

                        })
                    </script> -->

                    <?php
                }
            } else {
                ?>
                <h4 class="col-sm-6 text-center"> No More Music On Wishlist</h4>
                <?php
            }
            ?>


        </div>
        <!-- card End -->

        <!-- card start -->
        <div class="row d-flex justify-content-center mt-4">
        <?php
            $userId = $_SESSION['user_id'];
            $fetch1 = "SELECT 
            wishlist_video.wishlist, 
            wishlist_video.user_id, 
            wishlist_video.video_id, 
            videos.v_id, 
            videos.v_name, 
            videos.v_artist, 
            videos.v_year, 
            videos.v_album, 
            videos.v_genre, 
            videos.v_language, 
            videos.v_img, 
            videos.v_file, 
            videos.status, 
            videos.cat_id 
        FROM 
        wishlist_video
        JOIN 
            videos ON wishlist_video.video_id = videos.v_id
        WHERE wishlist_video.user_id = '$userId'";
            $fetch_result1 = mysqli_query($connection, $fetch1);
            if (mysqli_num_rows($fetch_result1) > 0) {
                while ($row = mysqli_fetch_assoc($fetch_result1)) {
                  

                    ?>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card mt-4">
                        <a href="deletfromwishlist.php?id=<?php echo $row['v_id'] ?>" class="remove-item"  data-id="<?=$row['v_id']?>"><i class="fa fa-times"></i></a>
                            <a href="audioplayer1.php?id=<?php echo $row['v_id'] ?>">
                                <img src="<?php echo 'admin-sound/song-img/' . $row["v_img"] ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="blog__details__services__item__text">
                                <h6>
                                    <a href="">
                                        <?php echo $row['v_name'] ?>
                                    </a>
                                </h6>
                                <span>
                                    <?php echo $row['v_artist'] ?>
                                    <input id="music_id" type="hidden" value="<?php echo $row['v_id'] ?>">
                                </span>
                            </div>
                        </div>
                    </div>

                    <!--Program to remove the music from the wishlist  -->
                    <!-- <script>
                        $(document).ready(function () {
                            $('.remove-item').on('click', function (e) {
                                e.preventDefault()
                                let music_id = $('#music_id').val();
                                // let closewish = $(this).attr('class')
                                // console.log(closewish)
                                $.ajax({
                                    url: 'favinsert.php',
                                    method: 'POST',
                                    data: {
                                        // closewish: closewish,
                                        music_id: music_id
                                    },
                                    success: function (data) {
                                        // console.log(data);
                                        window.location.href = "fav.php";
                                        // alert(data)
                                    }
                                })
                            })

                        })
                    </script> -->

<?php
                }
            } else {
                ?>
                <h4 class="col-sm-6 text-center"> No More videos On Wishlist</h4>
                <?php
            }
            ?>


        </div>
        <!-- card End -->

</section>





<?php
include('includes/footer.php')
    ?>
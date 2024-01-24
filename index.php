<?php
include('includes/header.php');
include('includes/main-nav.php');
// include('admin-sound/config.php');
include("config.php");

?>
<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="img/hero-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text">
                    <span>New single</span>
                    <h1>Feel the heart beats</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br />tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="linear__icon">
        <i class="fa fa-angle-double-down"></i>
    </div>
</section>
<!-- Hero Section End -->

<!-- Event Section Begin -->
<section class="event spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Artist</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="event__slider owl-carousel">
                <?php
                $artist_result = mysqli_query($connection, "SELECT `c_id` , `c_artist` , `c_artist_img`  FROM `categories` ORDER BY c_id DESC LIMIT 5");
                if (mysqli_num_rows($artist_result) > 0) {
                    while ($row = mysqli_fetch_assoc($artist_result)) {

                        ?>
                        <div class="col-lg-4">
                            <div class="event__item">
                                <div class="event__item__pic set-bg" data-setbg="">
                                    <img src="admin-sound/category/artist-img/<?php echo $row["c_artist_img"] ?>" alt="">
                                    <div class="tag-date">
                                        <span>Dec 15, 2019</span>
                                    </div>
                                </div>
                                <div class="event__item__text">
                                    <h4>
                                        <?php echo $row['c_artist']; ?>
                                    </h4>
                                    <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                                </div>
                            </div>
                        </div>

                        <?php

                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Event Section End -->

<!-- Music Section Begin -->
<section class="track spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <h2>Latest Music</h2>
                    <h1>Music podcast</h1>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="track__all">
                    <a href="audio.php" class="primary-btn border-btn">View all Musics</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 p-0">
                <div class="track__content nice-scroll">
                    <!----- fetch music ------>
                    <?php
                    $fetch_music = "SELECT * FROM music where `m_id` IN (16,17,18,19,20)";
                    $fetch_music_result = mysqli_query($connection, $fetch_music);
                    if (mysqli_num_rows($fetch_music_result) > 0) {
                        while ($row = mysqli_fetch_assoc($fetch_music_result)) {

                            ?>
                            <div class="single_player_container container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="audioplayer1.php?id=<?php echo $row['m_id'] ?>">
                                            <img class="img-thumbnail"
                                                src="<?php echo 'admin-sound/song-img/' . $row['m_img'] ?>" alt="">
                                        </a>
                                    </div>
                                    <h3 class="col-sm-6 text-center">
                                        <?php echo $row['m_name'] ?>
                                    </h3>

                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <!----- fetch music ------>

                </div>
            </div>
            <div class="col-lg-5 p-0">
                <div class="track__pic">
                    <img src="img/track-right.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Music Section End -->

<!-- About Section Begin -->
<section class="about spad mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__pic">
                    <img src="img/about/about.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <h2>DJ Alexandra Rud</h2>
                        <h1>About me</h1>
                    </div>
                    <p>DJ Rainflow knows how to move your mind, body and soul by delivering tracks that stand out
                        from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t
                        enough to sustain.</p>
                    <a href="#" class="primary-btn">CONTACT ME</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->



<!-- Video Section Begin -->
<section class="youtube spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Latest Video</h2>
                    <h1>Latest videos</h1>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center" id="myTable">
         <?php
         $fetch_video = "SELECT * FROM `videos` where `v_id` IN (61,62,63,64,65)";
         $fetch_result = mysqli_query($connection, $fetch_video);
         if (mysqli_num_rows($fetch_result) > 0) {
            while ($row = mysqli_fetch_assoc($fetch_result)) {
               ?>

                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="blog__details__services__item">
                        <div class="blog__details__services__item__pic">
                           <a href="videoplayer1.php?id=<?php echo $row['v_id'] ?>">
                              <img src="<?php echo 'admin-sound/song-img/' . $row["v_img"]; ?>" alt="">
                           </a>
                        </div>
                        <div class="blog__details__services__item__text">
                           <h6><a href="#">
                                 <?php echo $row['v_name'] ?>
                              </a></h6>
                           <span>
                              <?php echo $row['v_artist'] ?>
                           </span>
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
<!-- Video Section End -->

<!-- Countdown Section Begin -->
<section class="countdown spad set-bg" data-setbg="img/countdown-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="countdown__text">
                    <h1>Tomorrowland 2020</h1>
                    <h4>Music festival start in</h4>
                </div>
                <div class="countdown__timer" id="countdown-time">
                    <div class="countdown__item">
                        <span>20</span>
                        <p>days</p>
                    </div>
                    <div class="countdown__item">
                        <span>45</span>
                        <p>hours</p>
                    </div>
                    <div class="countdown__item">
                        <span>18</span>
                        <p>minutes</p>
                    </div>
                    <div class="countdown__item">
                        <span>09</span>
                        <p>seconds</p>
                    </div>
                </div>
                <div class="buy__tickets">
                    <a href="#" class="primary-btn">Buy tickets</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Countdown Section End -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/app.js"></script>

<?php
include('includes/main-footer.php');
?>
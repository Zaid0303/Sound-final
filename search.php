<?php 
include('config.php');

$query = $_POST['query'];
$fetch_video = "SELECT * FROM videos where CONCAT(v_name, v_year, v_artist, v_album, v_genre) LIKE '%$query%'";
$fetch_result = mysqli_query($connection, $fetch_video);
if (mysqli_num_rows($fetch_result) > 0) {
   while ($row = mysqli_fetch_assoc($fetch_result)) {
    echo '
    <div class="col-lg-4 col-md-6 col-sm-6">

    <div class="blog__details__services__item">
    <div class="blog__details__services__item__pic">
       <a href="videoplayer1.php?id='. $row['v_id'].'">
          <img src="admin-sound/song-img/'.$row["v_img"].'" alt="'.$row["v_img"].'">
       </a>
    </div>
    <div class="blog__details__services__item__text">
       <h6><a href="#">
             '. $row['v_name'].'
          </a></h6>
       <span>
        '. $row['v_artist'].'
       </span>
    </div>
 </div>
 </div>
    ';
   }
} else {
   ?>
      <h4 class="col-sm-6 text-center"> No Result Found</h4>
      <?php

}




?>
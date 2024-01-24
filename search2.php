<?php 
include('config.php');

$query2 = $_POST['query'];
$fetch_music = "SELECT * FROM music where CONCAT(m_name, m_year, m_artist, m_album, m_genre) LIKE '%$query2%'";
$fetch_result = mysqli_query($connection, $fetch_music);
if (mysqli_num_rows($fetch_result) > 0) {
   while ($row = mysqli_fetch_assoc($fetch_result)) {
    echo '
    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="blog__details__services__item">
       <div class="blog__details__services__item__pic">
          <a href="audioplayer1.php?id='.$row['m_id'].' ">
             <img src="admin-sound/song-img/'.$row["m_img"].'" alt="'.$row["m_img"].'">
          </a>
       </div>
       <div class="blog__details__services__item__text">
          <h6><a href="#">
                 '. $row['m_name'] .' 
             </a></h6>
          <span>
          '. $row['m_artist'].'
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
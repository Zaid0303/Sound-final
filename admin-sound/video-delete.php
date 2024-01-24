<?php 

include("config.php");

if(isset($_GET["v-id"])){
 $video_id = $_GET["v-id"];
}

$delete = "DELETE from `videos` where `v_id` = '$video_id'";
$query = mysqli_query ($connection , $delete) ;

if ($query){
    echo '<script>
    alert("Video Data Deleted Successfull")
    window.location.href="admin-video.php"
    </script>';
}
?>
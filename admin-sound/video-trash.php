<?php 

include("config.php");

if(isset($_GET["v-id"])){
    $video_id = $_GET['v-id'];
}

$trash = "UPDATE `videos` set status='0' where `v_id` = '$video_id'";

$result = mysqli_query($connection, $trash);
if (!$trash) {
    die("Query Failed");
}
header('location:video-trashdata.php');
?>
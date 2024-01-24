<?php 

include("config.php");

if(isset($_GET["m-id"])){
    $music_id = $_GET['m-id'];
}

$trash = "UPDATE `music` set status='0' where `m_id` = '$music_id'";

$result = mysqli_query($connection, $trash);
if (!$trash) {
    die("Query Failed");
}
header('location:music-trashdata.php');
?>
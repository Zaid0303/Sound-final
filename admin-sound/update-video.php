<?php 
include("config.php");

if(isset($_POST["updated"])){
    $video_id =$_POST["vid"];
    $video_name = $_POST["v-name"];
    $video_year = $_POST["v-year"];
    $video_artist = $_POST["v-artist"];
    $video_album = $_POST["v-album"];
    $video_genre = $_POST["v-genre"];
    $video_language = $_POST["v-language"];
    $video_file = $_FILES["v-file"]['name'];
    $video_tmp_file = $_FILES["v-file"]['tmp_name'];
}
$update_video = "UPDATE `videos` SET `v_name`='$video_name',`v_artist`='$video_artist',`v_year`='$video_year',
`v_album`='$video_album',`v_genre`='$video_genre',`v_language`='$video_language',`v_file`=' $video_file' WHERE `v_id`=' $video_id'";

$update_result = mysqli_query($connection, $update_video);

if($update_result){
    
    echo '<script> 
    alert("data insert done") 
    </script>';
}
?>
<?php 
include("config.php");

if(isset($_POST["updated"])){
    $video_id = $_POST["v-id"];
    $video_name = $_POST["v-name"];
    $video_year = $_POST["v-year"];
    $video_artist = $_POST["v-artist"];
    $video_album = $_POST["v-album"];
    $video_genre = $_POST["v-genre"];
    $video_language = $_POST["v-language"];
    $video_file_img = $_FILES["v-images"]['name'];
    $video_tmp_file_img = $_FILES["v-images"]['tmp_name'];
    $video_file = $_FILES["v-files"]['name'];
    $video_tmp_file = $_FILES["v-files"]['tmp_name'];
}
$update_video = "UPDATE `videos` SET `v_name`='$video_name',`v_artist`='$video_artist',`v_year`='$video_year',
`v_album`='$video_album',`v_genre`='$video_genre',`v_language`='$video_language', `v_img`= '$video_file_img',`v_file`= '$video_file' WHERE `v_id`='$video_id'";
$update_result = mysqli_query($connection, $update_video);
move_uploaded_file($video_tmp_file, 'video-song/' . $video_file);
move_uploaded_file($video_tmp_file_img, 'song-img/' . $video_file_img);
if($update_result){
    echo '<script>
    alert("Video Data Updated Successfull")
    window.location.href="admin-video.php"
    </script>';
}
?>
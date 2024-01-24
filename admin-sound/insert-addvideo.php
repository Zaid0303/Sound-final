<?php 
include("config.php");

if(isset($_POST['addvideo'])){
    $video_name = $_POST["v-name"];
    $video_year = $_POST["v-year"];
    $video_artist = $_POST["v-artist"];
    $video_album = $_POST["v-album"];
    $video_genre = $_POST["v-genre"];
    $video_language = $_POST["v-language"];
    $video_file_img = $_FILES["v-image"]['name'];
    $video_tmp_file_img = $_FILES["v-image"]['tmp_name'];
    $video_file = $_FILES["v-file"]['name'];
    $video_tmp_file = $_FILES["v-file"]['tmp_name'];
    $cat_id = $_POST["v-year"];

    if(!empty($video_name) AND !empty($video_year) AND !empty($video_artist) AND 
    !empty($video_album) AND !empty($video_genre) AND 
    !empty($video_language) AND !empty($video_file_img) AND !empty($video_file)){

        $insert_video = "INSERT INTO `videos` 
        (`v_id`, `v_name`, `v_artist`, `v_year`, `v_album`, `v_genre`, `v_language`, `v_img`, `v_file`, `status`, `cat_id`) 
        VALUES (NULL, '$video_name', '$video_artist', '$video_year', '$video_album', '$video_genre', '$video_language', '$video_file_img', '$video_file', '1', '$cat_id')";

        $result = mysqli_query($connection, $insert_video);
        move_uploaded_file($video_tmp_file, 'video-song/' . $video_file);
        move_uploaded_file($video_tmp_file_img, 'song-img/' . $video_file_img);
        if($result){
            echo "<script> 
            alert('Video added successfully');
            window.location.href='admin-video.php';
            </script>";

        }
    }
}
?>
bbbbb<?php 
include("config.php");

if(isset($_POST['addmusic'])){
    $music_name = $_POST["m-name"];
    $music_year = $_POST["m-year"];
    $music_artist = $_POST["m-artist"];
    $music_album = $_POST["m-album"];
    $music_genre = $_POST["m-genre"];
    $music_language = $_POST["m-language"];
    $music_file_img = $_FILES["images"]['name'];
    $music_tmp_file_img = $_FILES["images"]['tmp_name'];
    $music_file = mysqli_real_escape_string($connection, $_FILES["files"]['name']);
    $music_tmp_file = $_FILES["files"]['tmp_name'];
    $cat_id = $_POST["m-year"];

    if(!empty($music_name) AND !empty($music_year) AND !empty($music_artist) AND 
    !empty($music_album) AND !empty($music_genre) AND 
    !empty($music_language) AND !empty($music_file_img) AND !empty($music_file)){

        $insert_music = "INSERT INTO `music` (`m_id`, `m_name`, `m_year`, `m_artist`, `m_album`, `m_genre`, `m_language`, `m_img`, `m_file`, `status`, `cat_id`) 
        VALUES (NULL, '$music_name', '$music_year', '$music_artist', '$music_album', '$music_genre', '$music_language', '$music_file_img', '$music_file', '1', '$cat_id')";

        $result = mysqli_query($connection, $insert_music);
        move_uploaded_file($music_tmp_file, 'audio-song/' . $music_file);
        move_uploaded_file($music_tmp_file_img, 'song-img/' . $music_file_img);
        if($result){
            echo "<script> 
            alert('Music added successfully');
            window.location.href='admin-music.php';
            </script>";
        }
    }
}
?>

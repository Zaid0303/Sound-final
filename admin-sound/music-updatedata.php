<?php 
include("config.php");

if(isset($_POST["musicupdate"])){
    $music_id = $_POST["m-id"];
    $music_name = $_POST["m-name"];
    $music_year = $_POST["m-year"];
    $music_artist = $_POST["m-artist"];
    $music_album = $_POST["m-album"];
    $music_genre = $_POST["m-genre"];
    $music_language = $_POST["m-language"];
    $music_file_img = $_FILES["m-images"]['name'];
    $music_tmp_file_img = $_FILES["m-images"]['tmp_name'];
    $music_files = $_FILES["m-files"]['name'];
    $music_tmp_file = $_FILES["m-files"]['tmp_name'];
}
$update_music = "UPDATE `music` SET `m_name`='$music_name',`m_artist`='$music_artist',`m_year`='$music_year',
`m_album`='$music_album',`m_genre`='$music_genre',`m_language`='$music_language', `m_img`= '$music_file_img',`m_file`= '$music_files' WHERE `m_id`='$music_id'";
$update_result = mysqli_query($connection, $update_music);
move_uploaded_file($music_tmp_file, 'audio-song/' . $music_files);
move_uploaded_file($music_tmp_file_img, 'song-img/' . $music_file_img);
if($update_result){
    echo '<script>
    alert("music Data Updated Successfull")
    window.location.href="admin-music.php"
    </script>';
}
?>
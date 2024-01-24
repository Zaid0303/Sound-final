<?php 
include("config.php");

if(isset($_POST["categoryupdate"])){
    $category_id = $_POST["cat-id"];
    $category_genre = $_POST["cat-genre"];
    $category_year = $_POST["cat-year"];
    $category_artist = $_POST["cat-artist"];
    $category_album = $_POST["cat-album"];
}
$update_music = "UPDATE `categories` SET `c_genre`='$category_genre',`c_artist`='$category_artist',`c_year`='$category_year',
`c_album`='$category_album' WHERE `c_id`='$category_id'";
$update_result = mysqli_query($connection, $update_music);

if($update_result){
    echo '<script>
    alert("Category Data Updated Successfull")
    window.location.href="admin-category.php"
    </script>';
}
?>
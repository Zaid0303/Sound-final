<?php 
include("config.php");

if(isset($_GET['id'])){
$id=$_GET['id'];
$delete="DELETE FROM `wishlist` WHERE `music_id`=$id";
$query = mysqli_query ($connection , $delete) ;

if ($query){
    echo '<script>
    alert("wishlist Data Deleted Successfull")
    window.location.href="fav.php"
    </script>';
}



}


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete="DELETE FROM `wishlist_video` WHERE `video_id`=$id";
    $query = mysqli_query ($connection , $delete) ;
    
    if ($query){
        echo '<script>
        alert("wishlist Data Deleted Successfull")
        window.location.href="fav.php"
        </script>';
    }
    
    
    
    }

?>
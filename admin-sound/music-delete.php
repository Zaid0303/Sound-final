<?php 

include("config.php");

if(isset($_GET["m-id"])){
 $music_id = $_GET["m-id"];
}

$delete = "DELETE from `music` where `m_id` = '$music_id'";
$query = mysqli_query ($connection , $delete) ;

if ($query){
    echo '<script>
    alert("Music Data Deleted Successfull")
    window.location.href="admin-music.php"
    </script>';
}
?>
<?php 

include("config.php");

if(isset ($_GET["m-id"])){
    $restore_id = $_GET ['m-id'];
}

$update = "UPDATE `music` set status = '1' where m_id ='$restore_id'";

$result = mysqli_query ($connection , $update);
if($result){
    header('location:admin-music.php');
}
?>
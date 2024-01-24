<?php 

include("config.php");

if(isset ($_GET["v-id"])){
    $restore_id = $_GET ['v-id'];
}

$update = "UPDATE `videos` set status = '1' where v_id ='$restore_id'";

$result = mysqli_query ($connection , $update);
if($result){
    header('location:admin-video.php');
}
?>
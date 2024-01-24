<?php 

include("config.php");

if(isset ($_GET["id"])){
    $restore_id = $_GET ['id'];
}

$update = "UPDATE `users` set status = '1' where u_id ='$restore_id'";

$result = mysqli_query ($connection , $update);
if($result){
    header('location:user-list.php');
}
?>
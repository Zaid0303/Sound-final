<?php 

include("config.php");

if(isset ($_GET["id"])){
    $restore_id = $_GET ['id'];
}

$update = "UPDATE `categories` set status = '1' where c_id ='$restore_id'";

$result = mysqli_query ($connection , $update);
if($result){
    header('location:admin-category.php');
}
?>
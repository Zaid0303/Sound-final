<?php 

include("config.php");

if(isset($_GET["u-id"])){
    $user_id = $_GET['u-id'];
}

$trash = "UPDATE `users` set status='0' where `u_id` = '$user_id'";

$result = mysqli_query($connection, $trash);
if (!$trash) {
    die("Query Failed");
}
header('location:userlist-trashdata.php');
?>
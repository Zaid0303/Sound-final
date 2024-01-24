<?php 

include("config.php");

if(isset($_GET["c-id"])){
    $category_id = $_GET['c-id'];
}

$trash = "UPDATE `categories` set status='0' where `c_id` = '$category_id'";

$result = mysqli_query($connection, $trash);
if (!$trash) {
    die("Query Failed");
}
header('location:category-trashdata.php');
?>
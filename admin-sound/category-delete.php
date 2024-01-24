<?php 

include("config.php");

if(isset($_GET["c-id"])){
 $category_id = $_GET["c-id"];
}

$delete = "DELETE from `categories` where `c_id` = '$category_id'";
$query = mysqli_query ($connection , $delete) ;

if ($query){
    echo '<script>
    alert("Category Data Deleted Successfull")
    window.location.href="admin-category.php"
    </script>';
}
?>
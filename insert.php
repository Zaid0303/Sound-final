<?php 
include("config.php");


if(isset($_POST["message"])){
    $comment = $_POST["comment"];

$insert = "INSERT INTO `music` (`comment`) values ('$comment')";
$result = mysqli_query($connection,$insert);
if($result){
    echo "<script> 
    alert('Registration successful');
    window.location.href='audio.php'
    </script>";
} 
}
?>
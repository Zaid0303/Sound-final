<?php 
session_start();
include('config.php');
$userId = $_SESSION['user_id'];
$v_id = $_POST['fav'];

$wishlist = mysqli_query($connection, "SELECT * FROM `wishlist_video` WHERE `user_id` = '$userId' AND `video_id`= '$v_id'");


if(isset($_POST['fav'])){
    if(mysqli_num_rows($wishlist) == 0){
      

        $result = mysqli_query($connection, "INSERT INTO `wishlist_video`(`wishlist`, `user_id`, `video_id`) VALUES ('1','$userId','$v_id')");

        if($result){
            echo '
            video added to wishlist';
            
        }else{
            echo 'failed query';
        
        }
    }
    else
    {
        echo "Already exists in wishlist";
    }

}


?>
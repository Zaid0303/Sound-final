<?php 
session_start();
include('config.php');
// print_r($_POST);




// add to wishlist program

$userId = $_SESSION['user_id'];
$m_id = $_POST['fav'];

$wishlist = mysqli_query($connection, "SELECT * FROM `wishlist` WHERE `user_id` = '$userId' AND `music_id`= '$m_id'");


if(isset($_POST['fav'])){
    if(mysqli_num_rows($wishlist) == 0){
      

        $result = mysqli_query($connection, "INSERT INTO `wishlist`(`wishlist`, `user_id`, `music_id`) VALUES ('1','$userId','$m_id')");

        if($result){
            echo '
            Music added to wishlist';
            
        }else{
            echo 'failed query';
        
        }
    }
    else
    {
        echo "Already exists in wishlist";
    }

}



// program to remove item from wishlist


if(isset($_POST['music_id'])){
    // $closewish = $_POST['closewish'];
    $music_id = $_POST['music_id'];
    $result = mysqli_query($connection, "DELETE FROM `wishlist` WHERE `user_id`= '$userId' && `music_id` = '$music_id'");
    if($result){
        echo 'Music remove from wishlist';
    }else{
        echo 'failed query';
    
    }
    
}


?>
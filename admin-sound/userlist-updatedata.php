<?php 
include("config.php");

if(isset($_POST["userupdate"])){
    $user_id = $_POST["u-id"];
    $user_name = $_POST["u-name"];
    $user_address = $_POST["u-address"];
    $user_phone = $_POST["u-phone"];
    $user_email = $_POST["u-email"];
}
$update_user = "UPDATE `users` SET `u_name`='$user_name',`u_address`='$user_address',`u_phone`='$user_phone', `u_email`='$user_email' WHERE `u_id`='$user_id'";
$update_result = mysqli_query($connection, $update_user);

if($update_result){
    echo '<script>
    alert("User Data Updated Successfull")
    window.location.href="user-list.php"
    </script>';
}
?>
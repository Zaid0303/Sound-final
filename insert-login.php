<?php 
include('config.php');
session_start();
if(!isset($_SESSION['user_email'])){
    header('location: index.php');
 }

if(isset($_POST['login'])){
    $login_email =  $_POST['email'];
    $login_pass = $_POST['pass'];

    $verify_email = "SELECT * FROM `users` where `u_email` = '$login_email'";
    $verify_result = mysqli_query($connection, $verify_email);
    if($verify_result){
        if(mysqli_num_rows($verify_result) == 1){
            $row = mysqli_fetch_assoc($verify_result);
            
            $dbpass = $row['u_password'];
            $_SESSION['user_id'] = $row['u_id'];
            $_SESSION['user_name'] = $row['u_name'];
            $_SESSION['user_address'] = $row['u_address'];
            $_SESSION['user_phone'] = $row['u_phone'];
            $_SESSION['user_email'] = $row['u_email'];
            $_SESSION['user_password'] = $row['u_password'];


            if($dbpass == $login_pass){
                echo "<script> 
                alert('Login successful');
                window.location.href='index.php'
                </script>";
            }else {
                echo "<script> 
                alert('Invalid Password');
                window.location.href='login.php'
                </script>";
            }
        } else {
            echo "<script> 
            alert('Invalid Email');
            window.location.href='login.php'
            </script>";
        }
    } 

}
?>
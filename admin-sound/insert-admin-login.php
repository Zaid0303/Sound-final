<?php 
include('config.php');
session_start();
if(!isset($_SESSION['admin_email'])){
   header('location: index.php');
}
if(isset($_POST['login'])){
    $admin_email = $_POST['email'];
    $admin_pass = $_POST['pass'];

    $admin = "SELECT * from `admin` WHERE `admin_email` = '$admin_email'";
    $admin_res = mysqli_query($connection, $admin);
    if($admin_res){
        if(mysqli_num_rows($admin_res) > 0){
            $row = mysqli_fetch_assoc($admin_res);

            $dbpass = $row['admin_pass'];
            $_SESSION['admin_name'] = $row['admin_name'];
            $_SESSION['admin_img'] = $row['admin_img'];
            $_SESSION['admin_email'] = $row['admin_email'];
            $_SESSION['admin_pass'] = $row['admin_pass'];
            $_SESSION['images'] = $row['images'];

            if($dbpass == $admin_pass){
                echo "<script> 
                alert('Admin login successfull');
                window.location.href = 'index.php'
                 </script>";
            }else{
                echo "<script> 
                alert('Invalid Password');
                window.location.href = 'sign-in.php'
                 </script>";
            }
        }
    }
}
?>
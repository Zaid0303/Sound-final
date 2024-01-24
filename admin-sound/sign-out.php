<?php 
session_start();

if(isset($_SESSION['admin_email'])){
    header('location: sign-in.php');
}

session_unset();
session_destroy();

?>
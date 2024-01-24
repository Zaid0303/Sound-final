<?php
include('config.php');


if(isset($_POST['addNew'])){
    $user_name = $_POST['u-name'];
    $user_number = $_POST['u-number'];
    $user_address = $_POST['u-address'];
    $user_email = $_POST['u-email'];
    $user_Password = $_POST['u-pass'];
    $user_RPassword = $_POST['u-rpass'];

    if($user_Password == $user_RPassword){
    $hashPass = password_hash($user_Password, PASSWORD_BCRYPT);

        $check_email = "SELECT * from `users` where `u_email` = '$user_email' ";
        $run_email = mysqli_query($connection, $check_email);
        if(mysqli_num_rows($run_email) > 0){
            echo "<script> 
            alert('Email already exist');
            window.location.href='signup.php'
            </script>";
        }else{
            $user_insert = "INSERT INTO `users` (`u_id`, `u_name`, `u_address`, `u_phone`, `u_email`, `u_password`) 
            VALUES (NULL, '$user_name', '$user_address', '$user_number', '$user_email', '$hashPass')";
        $user_result = mysqli_query($connection, $user_insert);
        if($user_result){
            echo "<script> 
            alert('Registration successful');
            window.location.href='login.php'
            </script>";
        }else{
            echo "<script> 
            alert('Registration failed');
            // window.location.href='signup.php'
            </script>";
        }
        
        }
    }else{
        echo "<script> 
        alert('Password not matched');
        window.location.href='signup.php'
        </script>";
    }

}

?>
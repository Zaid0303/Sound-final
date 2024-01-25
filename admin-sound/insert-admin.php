<?php
include('config.php');
if(isset($_POST['add-admin'])){
    $admin_name = $_POST['admin-name'];
    $admin_email = $_POST['admin-email'];
    $admin_Password = $_POST['admin-pass'];
    $admin_RPassword = $_POST['admin-rpass'];
    $admin_img = $_FILES['images']['name'];
    $admin_img_tmp = $_FILES['images']['tmp_name'];

    if($admin_Password == $admin_RPassword){
        $hashPass = password_hash($admin_Password, PASSWORD_BCRYPT);

        if(!empty($admin_name) AND !empty($admin_email) AND !empty($admin_Password)
        AND !empty($admin_RPassword) AND !empty($admin_img)){
  
        
        $admin_insert = "INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_img`) 
        VALUES (NULL, '$admin_name', '$admin_email', '$hashPass', '$admin_img')";

        $admin_result = mysqli_query($connection, $admin_insert);
        move_uploaded_file($admin_img_tmp, 'images/admin_img/' . $admin_img);

        if($admin_result){
            echo "<script> 
            alert('Admin Registration successful');
            window.location.href='profile-edit.php'
            </script>";
        }else{
            echo "<script> 
            alert('Admin Registration failed');
            // window.location.href='profile-edit.php'
            </script>";
        }
        
        }
    }else{
        echo "<script> 
        alert('Password not matched');
        window.location.href='profile-edit.php'
        </script>";
    }

}

?>
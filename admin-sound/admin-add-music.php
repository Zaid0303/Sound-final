<?php
include("includes/header.php");
include("includes/topnav.php");
include("config.php");
?>
<!-- Wrapper Start -->
<div class="wrapper">
   <!-- Sidebar  -->
   <div class="iq-sidebar">
      <div class="iq-sidebar-logo d-flex justify-content-between">
         <a href="index.php" class="header-logo">
            <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
               <span class="text-primary text-uppercase">SOUND</span>
            </div>
         </a>
         <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
               <div class="wrapper-menu">
                  <div class="main-circle"><i class="las la-bars"></i></div>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar-scrollbar">
         <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
               <li>
                  <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                        class="ripple rippleEffect"></span><i
                        class="las la-home iq-arrow-left"></i><span>Dashboard</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
                     <li><a href="latest.php"><i class="las la-headphones"></i>Latest</a></li>
                     <li><a href="albums.php"><i class="lar la-file-audio"></i>Albums</a></li>
                     <li><a href="../index.php"><i class="las fa-home"></i>Our Website</a></li>
                  </ul>
               </li>
               <li class="active">
                  <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                        class="ripple rippleEffect"></span><i
                        class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                     <!-- <li><a href="admin-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li> -->
                     <li><a href="profile-edit.php"><i class="las la-edit"></i>Admin Edit Profile</a></li>
                     <li><a href="admin-category.php"><i class="ri-function-line"></i>Category</a></li>
                     <li><a href="admin-video.php"><i class="las la-video"></i>Video</a></li>
                     <li class="active"><a href="admin-music.php"><i class="las la-play-circle"></i>Music</a></li>
                  </ul>
               </li>

               <li>
                  <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                        class="ripple rippleEffect"></span><i
                        class="las la-user-tie iq-arrow-left"></i><span>User</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                     <li><a href="profile.php"><i class="las la-id-card-alt"></i>User Profile</a></li>
                     <li><a href="add-user.php"><i class="las la-plus-circle"></i>User Add</a></li>
                     <li><a href="user-list.php"><i class="las la-th-list"></i>User List</a></li>
                     <li><a href="user-reviews-ratings.php"><i class="las la-th-list"></i>Reviews & Ratings</a></li>
                  </ul>
               </li>

            </ul>
         </nav>
      </div>
   </div>

   <!-- Page Content  -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Add Music</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <form action="insert-addmusic.php"  method="POST" enctype="multipart/form-data">
                        <div class="row">
                           <input type="hidden" name="id" class="form-control" required value="">
                           <div class="form-group col-md-6">
                              <label>Name:</label>
                              <input type="text" name="m-name" class="form-control" id="vid-name" required>
                           </div>

                           <div class="form-group col-md-6">

                              <label>Year:</label>
                              <!-- <input type="text" name="m-year" class="form-control" id="vid-year" required> -->
                              <select class="form-select form-control" name="m-year" aria-label="Default select example">
                              <?php 
                              $fetch_cat = "SELECT * FROM categories";
                              $cat_result = mysqli_query($connection, $fetch_cat);
                              if(mysqli_num_rows($cat_result) > 0){
                                 while ($data = mysqli_fetch_assoc($cat_result)){
                                    echo '<option value="'.$data['c_id'].'">'.$data['c_year'].'</option>';
                                 }
                              }
                              ?>
                              </select>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Artist:</label>
                              <input type="text" name="m-artist" class="form-control" id="vid-artist" required>
                              <!-- <select class="form-select form-control" name="m-artist" aria-label="Default select example">
                              <?php 
                              $fetch_cat = "SELECT * FROM categories";
                              $cat_result = mysqli_query($connection, $fetch_cat);
                              if(mysqli_num_rows($cat_result) > 0){
                                 while ($data = mysqli_fetch_assoc($cat_result)){
                                    echo '<option value="'.$data['c_id'].'">'.$data['c_artist'].'</option>';
                                 }
                              }
                              ?>
                              </select> -->
                           </div>

                           <div class="form-group col-md-6">
                              <label>Album:</label>
                              <input type="text" name="m-album" class="form-control" id="vid-album" required>
                              <!-- <select class="form-select form-control" name="m-album" aria-label="Default select example">
                              <?php 
                              $fetch_cat = "SELECT * FROM categories";
                              $cat_result = mysqli_query($connection, $fetch_cat);
                              if(mysqli_num_rows($cat_result) > 0){
                                 while ($data = mysqli_fetch_assoc($cat_result)){
                                    echo '<option value="'.$data['c_id'].'">'.$data['c_album'].'</option>';
                                 }
                              }
                              ?>
                              </select> -->
                           </div>

                           <div class="form-group col-md-6">
                              <label>Genre:</label>
                              <input type="text" name="m-genre" class="form-control" id="vid-genre" required>
                              <!-- <select class="form-select form-control" name="m-genre" aria-label="Default select example">
                              <?php 
                              $fetch_cat = "SELECT * FROM categories";
                              $cat_result = mysqli_query($connection, $fetch_cat);
                              if(mysqli_num_rows($cat_result) > 0){
                                 while ($data = mysqli_fetch_assoc($cat_result)){
                                    echo '<option value="'.$data['c_id'].'">'.$data['c_genre'].'</option>';
                                 }
                              }
                              ?>
                              </select> -->
                           </div>

                           <div class="form-group col-md-6">
                              <label>Language:</label>
                              <input type="text" name="m-language" class="form-control" id="vid-language" required>
                           </div>
                        </div>

                        <div class="row">

                           <div class="form-group col-md-6">
                              <label>Image url</label>
                              <div class="custom-file">
                                 <input type="file" name="images" class="custom-file-input" id="vid-file" required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                           <div class="form-group col-md-6">
                              <label>Music File</label>
                              <div class="custom-file">
                                 <input type="file" name="files" class="custom-file-input" id="vid-file" required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                        </div>
                        <input type="submit" class="btn btn-primary" name="addmusic">
                        <!-- <a href="admin-video.php"></a> -->
                        <!-- <a href="#" class="btn btn-danger">Reset</a> -->
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Wrapper END -->
<!-- Footer -->

<?php
include("includes/footer.php");
?>
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
                     <li class="active"><a href="admin-category.php"><i class="ri-function-line"></i>Category</a></li>
                     <li><a href="admin-video.php"><i class="las la-video"></i>Video</a></li>
                     <li><a href="admin-music.php"><i class="las la-play-circle"></i>Music</a></li>
                  </ul>
               </li>

               <li>
                  <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                        class="ripple rippleEffect"></span><i
                        class="las la-user-tie iq-arrow-left"></i><span>User</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                     <li><a href="profile.php"><i class="las la-id-card-alt"></i>User Profile</a></li>
                     <!-- <li><a href="add-user.php"><i class="las la-plus-circle"></i>User Add</a></li> -->
                     <li><a href="user-list.php"><i class="las la-th-list"></i>User List</a></li>
                     <li><a href="user-reviews-ratings.php"><i class="las la-th-list"></i>Reviews & Ratings</a></li>
                  </ul>
               </li>

            </ul>
         </nav>
      </div>
   </div>

      <?php 
      
       if (isset($_GET ['c-id'])){
         $category_id = $_GET ['c-id'] ;

         $fetch_record = "SELECT * from `categories` where `c_id` = '$category_id'" ;
         $record_result = mysqli_query($connection, $fetch_record) ;
         if($record_result){
            if(mysqli_num_rows($record_result)> 0){
      ?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Update Categories</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form action="category-updatedata.php" enctype="multipart/form-data"  method="POST">
                        <div class="row">
                           
                        <?php
                        
                        while($row = mysqli_fetch_assoc($record_result)){
               
                        ?>
                              <div class="col">
                                <div class="form-group">
                                    <label>Genre:</label>
                                    <input type="hidden" name="cat-id" class="form-control"  value="<?php echo $row["c_id"] ?>" required>
                                    <input type="text" name="cat-genre" class="form-control"  value="<?php echo $row["c_genre"] ?>" required>
                                </div>
                              </div>

                              <div class="form-group col-md-6">
                              <label>Image url</label>
                              <div class="custom-file">
                                 <input type="file" name="cat-genre-image" class="custom-file-input" id="vid-file" value="<?php echo $row["c_genre_img"] ?>" required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>
                           </div>
                           <hr>

                           <div class="row">
                              <div class="col">
                                <div class="form-group">
                                    <label>Artist:</label>
                                    <input type="text" name="cat-artist" class="form-control"  value="<?php echo $row["c_artist"] ?>" required>

                                </div>
                              </div>

                              <div class="form-group col-md-6">
                              <label>Image url</label>
                              <div class="custom-file">
                                 <input type="file" name="cat-genre-image" class="custom-file-input" id="vid-file" value="<?php echo $row["c_artist_img"] ?>" required>

                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>
                           </div>
                           <hr>
                           <div class="row">
                              <div class="col">
                                <div class="form-group">
                                    <label>Album:</label>
                                    <input type="text" name="cat-album" class="form-control"  value="<?php echo $row["c_album"] ?>" required>
                                </div>
                              </div>

                              <div class="form-group col-md-6">
                              <label>Image url</label>
                              <div class="custom-file">
                                 <input type="file" name="cat-genre-image" class="custom-file-input" id="vid-file" value="<?php echo $row["c_album_img"] ?>" required>

                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>
                           </div>
                           <hr>
                           <div class="row">
                              <div class="col">
                                <div class="form-group">
                                    <label>Year:</label>
                                    <input type="text" name="cat-year" class="form-control"  value="<?php echo $row["c_year"] ?>" required>
                                </div>
                              </div>
                           </div>
                           
                           <input type="Submit" class="btn btn-primary" name="categoryupdate">
                           <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
                           <?php
                                   }
                                 }
                              }
                           }
                        ?>
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
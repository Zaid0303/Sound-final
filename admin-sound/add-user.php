<?php
include("includes/header.php");
include("includes/topnav.php");

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
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
                           <li><a href="latest.php"><i class="las la-headphones"></i>Latest</a></li>
                           <li><a href="albums.php"><i class="lar la-file-audio"></i>Albums</a></li>
                           <li><a href="../index.php"><i class="las fa-home"></i>Our Website</a></li>
                        </ul>
                     </li>
                     <li>
                     <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <!-- <li><a href="admin-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a></li> -->
                        <li><a href="profile-edit.php"><i class="las la-edit"></i>Admin Edit Profile</a></li>
                        <li><a href="admin-category.php"><i class="ri-function-line"></i>Category</a></li>
                        <li><a href="admin-video.php"><i class="las la-video"></i>video</a></li>
                        <li><a href="admin-music.php"><i class="las la-play-circle"></i>Music</a></li>
                     </ul>
                  </li>
                
                     <li class="active active-menu">
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle" style="">
                           <li><a href="profile.php"><i class="las la-id-card-alt"></i>User Profile</a></li>
                           <li class="active"><a href="add-user.php"><i class="las la-plus-circle"></i>User Add</a></li>
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
            <div class="col-lg-12">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Add New User Information</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="new-user-info">
                        <form action="insert-adduser.php" method="POST">
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label for="fname">Name:</label>
                                 <input type="text" class="form-control" id="fname" name="u-name" placeholder="Name"
                                    required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="mobno">Mobile Number:</label>
                                 <input type="number" class="form-control" id="mobno" name="u-number"
                                    placeholder="Mobile Number" required>
                              </div>
                              <div class="form-group col-md-12">
                                 <label for="cname">Address:</label>
                                 <input type="text" class="form-control" id="cname" name="u-address"
                                    placeholder="Address" required>
                              </div>
                           </div>
                           <hr>
                           <h5 class="mb-3">Security</h5>
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <label for="uname">Email:</label>
                                 <input type="email" class="form-control" id="uname" name="u-email" placeholder="Email"
                                    required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="pass">Password:</label>
                                 <input type="password" class="form-control" id="pass" name="u-pass"
                                    placeholder="Password" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="rpass">Repeat Password:</label>
                                 <input type="password" class="form-control" id="rpass" name="u-rpass"
                                    placeholder="Repeat Password" required>
                              </div>
                           </div>
                           <div class="checkbox">
                              <label><input class="mr-2" type="checkbox" required>Enable
                                 Two-Factor-Authentication</label>
                           </div>
                           <input type="submit" name="addnew" class="btn btn-primary" value="Add New User">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Wrapper END -->
<?php
include("includes/footer.php");
?>
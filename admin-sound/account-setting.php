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
                     <li class="active active-menu">
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
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
                           <li><a href="admin-author.php"><i class="las la-user"></i>Writer</a></li>
                           <li><a href="admin-video.php"><i class="las la-video"></i>Video</a></li>
                           <li><a href="admin-song.php"><i class="las la-play-circle"></i>Music</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                           <li><a href="profile.php"><i class="las la-id-card-alt"></i>User Profile</a></li>
                           <li><a href="profile-edit.php"><i class="las la-edit"></i>User Edit</a></li>
                           <li><a href="add-user.php"><i class="las la-plus-circle"></i>User Add</a></li>
                           <li><a href="user-list.php"><i class="las la-th-list"></i>User List</a></li>
                           <li><a href="user-reviews-ratings.php"><i class="las la-th-list"></i>Reviews & Ratings</a></li>
                        </ul>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Account Setting</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="acc-edit">
                              <form>
                                 <div class="form-group">
                                    <label for="uname">User Name:</label>
                                    <input type="text" class="form-control" id="uname" value="Barry@01">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">Email Id:</label>
                                    <input type="email" class="form-control" id="email" value="Barryjohn@gmail.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="altemail">Alternate Email:</label>
                                    <input type="email" class="form-control" id="altemail" value="designtheme@gmail.com">
                                 </div>
                                 <div class="form-group">
                                    <label class="d-block">Language Known:</label>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="english" checked="">
                                       <label class="custom-control-label" for="english">English</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="french" checked="">
                                       <label class="custom-control-label" for="french">French</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="hindi">
                                       <label class="custom-control-label" for="hindi">Hindi</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="spanish" checked="">
                                       <label class="custom-control-label" for="spanish">Spanish</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="arabic">
                                       <label class="custom-control-label" for="arabic">Arabic</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                       <input type="checkbox" class="custom-control-input" id="italian">
                                       <label class="custom-control-label" for="italian">Italian</label>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancel</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Social Media</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="acc-edit">
                              <form>
                                 <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control" id="facebook" value="www.facebook.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" id="twitter" value="www.twitter.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="google">Google +:</label>
                                    <input type="text" class="form-control" id="google" value="www.google.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" id="instagram" value="www.instagram.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="youtube">You Tube:</label>
                                    <input type="text" class="form-control" id="youtube" value="www.youtube.com">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancel</button>
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
      <!-- Footer -->
<?php 
include("includes/footer.php");
?>
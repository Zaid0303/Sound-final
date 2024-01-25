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
               <li>
                  <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                        class="ripple rippleEffect"></span><i
                        class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
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
   <!-- Page Content  -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Privacy Setting</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="acc-privacy">
                        <div class="data-privacy">
                           <h4 class="mb-2">Account Privacy</h4>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="acc-private">
                              <label class="custom-control-label privacy-status mb-2" for="acc-private">Private
                                 Account</label>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                              a galley of type and scrambled it to make a type specimen book</p>
                        </div>
                        <hr>
                        <div class="data-privacy">
                           <h4 class="mb-2">Activity Status</h4>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="activety" checked="">
                              <label class="custom-control-label privacy-status mb-2" for="activety">Show Activity
                                 Status</label>
                           </div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of
                              a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here, content
                              here', making it look like readable English.</p>
                        </div>
                        <hr>
                        <div class="data-privacy">
                           <h4 class="mb-2"> Story Sharing </h4>
                           <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="story" checked="">
                              <label class="custom-control-label privacy-status mb-2" for="story">Allow Sharing</label>
                           </div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of
                              a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here, content
                              here', making it look like readable English.</p>
                        </div>
                        <hr>
                        <div class="data-privacy">
                           <h4 class="mb-2"> Photo Of You </h4>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="automatically" name="customRadio0" class="custom-control-input"
                                 checked="">
                              <label class="custom-control-label" for="automatically"> Add Automatically</label>
                           </div>
                           <div class="custom-control custom-radio mb-2">
                              <input type="radio" id="manualy" name="customRadio0" class="custom-control-input">
                              <label class="custom-control-label" for="manualy"> Add Manualy</label>
                           </div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of
                              a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here, content
                              here', making it look like readable English.</p>
                        </div>
                        <hr>
                        <div class="data-privacy">
                           <h4 class="mb-2"> Your Profile </h4>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="public" name="customRadio1" class="custom-control-input"
                                 checked="">
                              <label class="custom-control-label" for="public"> Public </label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="friend" name="customRadio1" class="custom-control-input">
                              <label class="custom-control-label" for="friend"> Friend </label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="spfriend" name="customRadio1" class="custom-control-input">
                              <label class="custom-control-label" for="spfriend"> Specific Friend </label>
                           </div>
                           <div class="custom-control custom-radio mb-2">
                              <input type="radio" id="onlyme" name="customRadio1" class="custom-control-input">
                              <label class="custom-control-label" for="onlyme"> Only Me </label>
                           </div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of
                              a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here, content
                              here', making it look like readable English.</p>
                        </div>
                        <hr>
                        <div class="data-privacy">
                           <h4 class="mb-2"> Login Notification </h4>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="enable" name="customRadio2" class="custom-control-input">
                              <label class="custom-control-label" for="enable"> Enable </label>
                           </div>
                           <div class="custom-control custom-radio mb-2">
                              <input type="radio" id="disable" name="customRadio2" class="custom-control-input"
                                 checked="">
                              <label class="custom-control-label" for="disable"> Disable </label>
                           </div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of
                              a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                              more-or-less normal distribution of letters, as opposed to using 'Content here, content
                              here', making it look like readable English.</p>
                        </div>
                        <hr>
                        <div class="data-privacy">
                           <h4 class="mb-2">Privacy Help</h4>
                           <a href="#"><i class="ri-customer-service-2-line mr-2"></i>Support</a>
                        </div>
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
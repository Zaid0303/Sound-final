<?php
include("config.php");
include("includes/header.php");
include("includes/topnav.php");
?>
<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
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
                           <li><a href="add-user.php"><i class="las la-plus-circle"></i>User Add</a></li>
                           <li class="active"><a href="user-list.php"><i class="las la-th-list"></i>User List</a></li>
                           <li><a href="user-reviews-ratings.php"><i class="las la-th-list"></i>Reviews & Ratings</a></li>
                        </ul>
                     </li>
                 
                  
               
                  </ul>
               </nav>
               
            </div>
         </div>
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">User Lists</h4>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Trash" href="userlist-trash.php"><i class="fas fa-trash"></i></a>

                        <a href="add-user.php" class="btn btn-primary">Add New User</a>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="table-responsive">
                        <table class="data-tables table table-striped table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Address</th>
                                 <th>Phone no</th>
                                 <th>Email</th>
                                 <th>Action</th>
                              </tr>


                           </thead>
                           <tbody>
                           <?php 
                                 $fetch_video = "SELECT * FROM users where status='1' ";
                                 $fetch_result = mysqli_query($connection, $fetch_video);
                                 if(mysqli_num_rows($fetch_result) > 0){
                                    while($row = mysqli_fetch_assoc($fetch_result)){

                            
                                 ?>
                                 <tr>
                                    <td><?php echo $row["u_name"] ?></td>
                                    <td><?php echo $row["u_address"] ?></td>
                                    <td><?php echo $row["u_phone"] ?></td>
                                    <td><?php echo $row["u_email"] ?></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a name="updated" class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="userlist-update.php?id=<?php echo $row['u_id'] ?>"><i class="ri-pencil-line"></i></a>
                                          <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Trash" href="userlist-trash.php?u-id=<?php echo $row['u_id'] ?>"><i class="fas fa-trash"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <?php 
                                      }
                                   }
                                 ?>

                           </tbody>
                        </table>
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
<footer class="iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="player row">
               <div class="details col-6 col-sm-4 col-md-4 col-lg-4">
                  <div class="now-playing"></div>
                  <div class="track-art"></div>
                  <div>
                     <div class="track-name">Pop Smoke </div>
                     <div class="track-artist">Cascada</div>
                  </div>
               </div>
               <div class="slider_container slider_music col-sm-5 col-md-4 col-lg-4">
                  <div class="current-time">00:00</div>
                  <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                  <div class="total-duration">00:00</div>
               </div>
               <div class="buttons col-6  col-sm-3 col-md-2  col-lg-2">
                  <div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i></div>
                  <div class="playpause-track" onclick="playpauseTrack()"><i class="fa fa-play-circle fa-3x"></i></div>
                  <div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
               </div>
               <div class="slider_container sound col-sm-6 col-md-2  col-lg-2">
                  <i class="fa fa-volume-down"></i>
                  <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                  <i class="fa fa-volume-up"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Footer END -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<!-- Appear JavaScript -->
<script src="js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="js/core.js"></script>
<!-- am charts JavaScript -->
<script src="js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="js/worldLow.js"></script>
<!-- Raphael-min JavaScript -->
<script src="js/raphael-min.js"></script>
<!-- Morris JavaScript -->
<script src="js/morris.js"></script>
<!-- Morris min JavaScript -->
<script src="js/morris.min.js"></script>
<!-- Flatpicker Js -->
<script src="js/flatpickr.js"></script>
<!-- Style Customizer -->
<script src="js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="js/chart-custom.js"></script>
<!-- Music js -->
<script src="js/music-player.js"></script>
<!-- Music-player js -->
<script src="js/music-player-dashboard.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js"></script>
</body>

</html>
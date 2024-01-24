<?php
include("includes/header.php");
include("includes/topnav.php");
include("config.php");


if (isset($_GET['id'])) {
   $music_id = $_GET['id'];

   $fetch_mp3 = "SELECT * FROM `music` where `m_id` = '$music_id' ";
   $fetch_result_mp3 = mysqli_query($connection, $fetch_mp3);
   if (mysqli_num_rows($fetch_result_mp3) > 0) {
      while ($row = mysqli_fetch_assoc($fetch_result_mp3)) {


         ?>
         <!-- Wrapper Start -->
         <div class="wrapper">
                  <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.php" class="header-logo">
               <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">Muzik</span> 
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
                        <li class="active"><a href="index.php"><i class="las la-house-damage"></i>Home</a></li>
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
                        <li><a href="admin-video.php"><i class="las la-video"></i>Video</a></li>
                        <li><a href="admin-music.php"><i class="las la-play-circle"></i>Music</a></li>
                     </ul>
                  </li>
               
                  <li>
                     <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
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
                     <div class="col-lg-12">
                        <div class="iq-card">
                           <div class="iq-card-body">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <img src="<?php echo 'song-img/' . $row["m_img"] ?>" class="img-fluid w-100" alt="">
                                 </div>
                                 <div class="col-lg-8">
                                    <div class="d-flex align-items-top justify-content-between iq-music-play-detail">
                                       <div class="music-detail">
                                          <h3>
                                             <?php echo $row['m_name'] ?>
                                          </h3>
                                          <span>
                                             <?php echo $row['m_artist'] ?>
                                          </span>
                                          <p class="mb-0">389382k Views</p>
                                          <p>Song · 45 Plays</p>
                                          <div class="d-flex align-items-center">
                                             <audio controls >
                                                <source src="<?php echo 'audio-song/' . $row['m_file'] ?>" type="audio/ogg">
                                                <source src="<?php echo 'audio-song/' . $row['m_file'] ?>" type="audio/mpeg">
                                                <!-- Your browser does not support the audio element. -->
                                             </audio>
                                             <!-- <a href="" class="btn btn-primary iq-play mr-2">Play music</a> -->
                                          </div>

                                       </div>
                                       <div class="music-right">
                                          <div class="d-flex align-items-center">
                                             <div class="iq-circle mr-2 share"><a href="javascript:void();"><i
                                                      class="las la-share-alt-square text-primary"></i></a></div>
                                             <div class="iq-circle mr-2"><a href="javascript:void();"><i
                                                      class="ri-heart-fill  text-primary"></i></a></div>
                                             <!-- <div class="iq-circle">
                                                <a href="javascript:void();"><i class="las la-download text-primary"></i></a>
                                             </div> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-body">
                           <ul class="list-unstyled iq-music-slide mb-0">
                              <li class="mb-3">
                                 <div class="d-flex justify-content-between align-items-center row">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href="javascript:void(0);"><img src="images/dashboard/realease-song/01.png"
                                                class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body ml-3">
                                          <p class="mb-0">DJ Khaled Featuring</p>
                                          <small>Edyta Gorniak</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                                    <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i>
                                    </p>
                                    <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton2"
                                             data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="ri-more-2-fill text-primary"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                                             style"">
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-3">
                                 <div class="d-flex justify-content-between align-items-center row">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href="javascript:void(0);"><img src="images/dashboard/realease-song/02.png"
                                                class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body ml-3">
                                          <p class="mb-0">DJ Khaled Featuring</p>
                                          <small>Edyta Gorniak</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                                    <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i>
                                    </p>
                                    <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton2"
                                             data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="ri-more-2-fill text-primary"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                                             >
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-3">
                                 <div class="d-flex justify-content-between align-items-center row">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href="javascript:void(0);"><img src="images/dashboard/realease-song/03.png"
                                                class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body ml-3">
                                          <p class="mb-0">DJ Khaled Featuring</p>
                                          <small>Edyta Gorniak</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                                    <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i>
                                    </p>
                                    <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton2"
                                             data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="ri-more-2-fill text-primary"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                                             style>
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-3">
                                 <div class="d-flex justify-content-between align-items-center row">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href="javascript:void(0);"><img src="images/dashboard/realease-song/04.png"
                                                class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body ml-3">
                                          <p class="mb-0">DJ Khaled Featuring</p>
                                          <small>Edyta Gorniak</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                                    <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i>
                                    </p>
                                    <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton2"
                                             data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="ri-more-2-fill text-primary"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                                             style>
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-3">
                                 <div class="d-flex justify-content-between align-items-center row">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href="javascript:void(0);"><img src="images/dashboard/realease-song/05.png"
                                                class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body ml-3">
                                          <p class="mb-0">DJ Khaled Featuring</p>
                                          <small>Edyta Gorniak</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                                    <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i>
                                    </p>
                                    <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton2"
                                             data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="ri-more-2-fill text-primary"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                                             style>
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="mb-3">
                                 <div class="d-flex justify-content-between align-items-center row">
                                    <div class="media align-items-center col-10 col-md-5">
                                       <div class="iq-realese-song ">
                                          <a href="javascript:void(0);"><img src="images/dashboard/realease-song/06.png"
                                                class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                       </div>
                                       <div class="media-body ml-3">
                                          <p class="mb-0">DJ Khaled Featuring</p>
                                          <small>Edyta Gorniak</small>
                                       </div>
                                    </div>
                                    <p class="mb-0 col-md-2 col-md-2 iq-music-time">9:52</p>
                                    <p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><i class="lar la-star font-size-20"></i></p>
                                    <p class="mb-0 col-2 col-md-2 iq-music-play"><i class="las la-play-circle font-size-32"></i>
                                    </p>
                                    <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-2 col-md-1">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton2"
                                             data-toggle="dropdown" aria-expanded="false" role="button">
                                             <i class="ri-more-2-fill text-primary"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                                             style>
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i
                                                   class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php
      }
   }
}
?>
</div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
<?php
include("includes/footer.php");
?>
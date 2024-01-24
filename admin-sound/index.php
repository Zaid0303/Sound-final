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
                        <li><a href="user-reviews-ratings.php"><i class="las la-th-list"></i>User Reviews & Ratings</a></li>

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
                  <div class="iq-card iq-realease">
                     <div class="iq-card-header d-flex justify-content-between border-0">
                        <div class="iq-header-title">
                           <h4 class="card-title">New Realeases</h4>
                        </div>
                     </div>
                     <div class="iq-card-body  iq-realeses-back">
                        <div class="row">
                           <div class="col-lg-5 iq-realese-box ">
                              <div class="iq-music-img">
                                 <div class="equalizer">
                                    <span class="bar bar-1"></span>
                                    <span class="bar bar-2"></span>
                                    <span class="bar bar-3"></span>
                                    <span class="bar bar-4"></span>
                                    <span class="bar bar-5"></span>
                                 </div>
                              </div>
                              <div class="player1 row">
                                 <div class="details1 music-list col-6 col-sm-6 col-lg-6">
                                    <div class="now-playing1"></div>
                                    <div class="track-art1"></div>
                                    <div>
                                       <div class="track-name1">Amy Winehouse </div>
                                       <div class="track-artist1">DaBaby Featuring Roddy</div>
                                    </div>
                                 </div>
                                 <div class="buttons1 col-6 col-sm-2 col-lg-3">
                                    <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                                    <div class="playpause-track1" onclick="playpauseTrack1()"><i class="fa fa-play-circle fa-3x"></i></div>
                                    <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-lg-7">
                              <ul class="list-unstyled iq-song-slide mb-0 realeases-banner">
                              <?php 
                                          $fetch_music = "SELECT * from `music`";
                                          $fetch_music_result = mysqli_query($connection, $fetch_music);
                                          if(mysqli_num_rows($fetch_music_result) > 0){
                                             while($row = mysqli_fetch_assoc($fetch_music_result)){

                                       ?> 
                                 <li class="row">
                                    <div class="d-flex justify-content-between align-items-center">

                                       <div class="media align-items-center col-10 col-md-5">
                                          <div class="iq-realese-song ">
                                             <a href ="music-player.php?id=<?php echo $row['m_id']?>"><img src="<?php echo 'song-img/' . $row["m_img"] ?>" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                          </div>
                                          <div class="media-body text-white ml-3">
                                             <p class="mb-0 iq-music-title"><?php echo $row['m_name']?></p>
                                             <small><?php echo $row['m_artist']?></small>
                                          </div>
                                       </div>

                                       <p class="mb-0 col-md-2  iq-m-time">9:52</p>
                                       <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                       <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                       <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center  col-md-1">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle text-primary" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                                                <i class="ri-more-2-fill text-primary"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php 
                                             }
                                          }
                                       ?>
                                 </li>

                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Artist</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>
                              <?php 
                                 $total = "SELECT count(*) as count_obj from `categories`";
                                 $result = mysqli_query($connection, $total);
                              if(mysqli_num_rows($result) > 0){
                                 $data = mysqli_fetch_assoc($result);
                                 echo $data['count_obj'];
                              }
                              ?>
                              </h2>
                              <div class="rounded-circle iq-card-icon iq-bg-primary ml-3"> <i class="ri-inbox-fill"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Total Musics</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-success font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>
                              <?php 
                                 $total = "SELECT count(*) as count_obj from `music`";
                                 $result = mysqli_query($connection, $total);
                              if(mysqli_num_rows($result) > 0){
                                 $data = mysqli_fetch_assoc($result);
                                 echo $data['count_obj'];
                              }
                              ?>
                              </h2>
                              <div class="rounded-circle iq-card-icon iq-bg-success ml-3"><i class="las la-play-circle"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Total Videos</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>
                              <?php 
                                 $total = "SELECT count(*) as count_obj from `videos`";
                                 $result = mysqli_query($connection, $total);
                              if(mysqli_num_rows($result) > 0){
                                 $data = mysqli_fetch_assoc($result);
                                 echo $data['count_obj'];
                              }
                              ?>
                              </h2>
                              <div class="rounded-circle iq-card-icon iq-bg-danger ml-3"><i class="las la-video"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music Album</h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>
                              <?php 
                                 $total = "SELECT count(*) as count_obj from `categories`";
                                 $result = mysqli_query($connection, $total);
                              if(mysqli_num_rows($result) > 0){
                                 $data = mysqli_fetch_assoc($result);
                                 echo $data['count_obj'];
                              }
                              ?>
                              </h2>
                              <div class="rounded-circle iq-card-icon iq-bg-info ml-3"><i class="ri-refund-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Featured Albums</h4>
                        </div>
                        <div id="feature-album-artist-slick-arrow" class="slick-aerrow-block"></div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row feature-album-artist mb-0">
                           <?php 
                                          $fetch_music = "SELECT `c_genre`, `c_genre_img` from `categories`";
                                          $fetch_music_result = mysqli_query($connection, $fetch_music);
                                          if(mysqli_num_rows($fetch_music_result) > 0){
                                             while($row = mysqli_fetch_assoc($fetch_music_result)){

                           ?> 
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href ="music-player.html">
                                    <img src="<?php echo 'category/genre-img/' . $row["c_genre_img"] ?>" class="w-100 img-fluid" alt="">
                                 </a>
                                 <!-- <div class="overlay-music-icon">
                                    <a href ="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div> -->
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0"><?php echo $row['c_genre']?></h6>
                              </div>
                           </li>
                           <?php 
                                    }
                                 }
                            ?>
                     
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Hot Songs</h4>
                        </div>
                        <div id="feature-album-slick-arrow" class="slick-aerrow-block"></div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row  feature-album iq-box-hover mb-0">
                        <?php 
                           $fetch_music = "SELECT * FROM music";
                           $fetch_music_result = mysqli_query($connection, $fetch_music);
                           if(mysqli_num_rows($fetch_music_result) > 0){
                              while($row = mysqli_fetch_assoc($fetch_music_result)){

                        ?> 
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-card mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href ="music-player.php">
                                          <img src="<?php echo 'song-img/' . $row["m_img"] ?>" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href ="music-player.php?id=<?php echo $row['m_id']?>">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600 mb-0"><?php echo $row['m_name']?></h6>
                                       <p class="mb-0"><?php echo $row['m_artist']?></p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <?php 
                                 }
                              }
                           ?>
               
                        </ul>
                     </div>
                  </div>
               </div>
              
               <div class="col-lg-12">
                  <div class="row">
                     <!-- <div class="col-lg-6 col-md-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between align-items-center">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Hot Songs</h4>
                              </div>
                              <div id="hot-song-slick-arrow" class="slick-aerrow-block"></div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="list-unstyled row hot-songs mb-0">
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/01.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">God Whispered Your Name</h6>
                                                <small>Maggie Rogers</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/02.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Mood Swings</h6>
                                                <small>Maren Morris</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent mb-0 mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/03.png"  class="img-fluid avatar-60" alt=""></a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Something Special</h6>
                                                <small>Rico Nasty</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/04.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Tell Me U Luv Me</h6>
                                                <small>Kali Uchis</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/05.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                                <small>Juice WRLD</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent mb-0 mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/06.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0">Up Up And Away</h6>
                                                <small>Black Eyed Peas</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/07.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                                <small>Juice WRLD</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/08.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">More Than My Hometown </h6>
                                                <small>Keith Urban</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="col-lg-12">
                                    <div class="iq-card iq-card-transparent mb-0 mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="media align-items-center">
                                             <div class="iq-thumb-hotsong">
                                                <div class="iq-music-overlay"></div>
                                                <a href ="music-player.php"><img src="images/dashboard/hot-songs/09.png"  class="img-fluid avatar-60" alt="">
                                                </a>
                                                <div class="overlay-music-icon">
                                                   <a href ="music-player.php">
                                                      <i class="las la-play-circle font-size-24"></i>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 iq-song-title">3 Headed Goat</h6>
                                                <small>Clairo</small>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div> -->
                     <div class="col-md-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between align-items-center">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Hot Video Songs</h4>
                              </div>
                              <div id="hot-video-slick-arrow" class="slick-aerrow-block"></div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="list-unstyled row iq-box-hover hot-video mb-0">
                                 <?php 
                                 $fetch_video = "SELECT * FROM videos";
                                 $fetch_result = mysqli_query($connection, $fetch_video);
                                 if(mysqli_num_rows($fetch_result) > 0){
                                    while($row = mysqli_fetch_assoc($fetch_result)){

                            
                                 ?>
                                 <li class="col-lg-6">
                                    <div class="iq-card  mb-lg-0">
                                       <div class="iq-card-body p-0">
                                          <div class="iq-thumb">
                                             <video controls poster="<?php echo 'song-img/' . $row["v_img"]; ?>">
                                                <img class="videos__item__pic set-bg"  src="<?php echo 'admin-sound/song-img/' . $row["v_img"]; ?>" alt="">

                                                <source src="<?php echo 'video-song/' . $row["v_file"] ?>" type="video/mp4" />
                                             </video>
                                          </div>
                                          <div class="feature-list text-center">
                                             <h6 class="font-weight-600  mb-0"><?php echo $row["v_name"] ?></h6>
                                             <p class="mb-0"><?php echo $row["v_artist"] ?></p>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                    <?php 
                                      }
                                   }
                                 ?>
                          
                              </ul>
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
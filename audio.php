<?php
include('includes/header.php');
include('includes/navbar.php');
include('config.php');

?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb__links">
               <a href="index.php"><i class="fa fa-home"></i> Home</a>
               <span>Music</span>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Breadcrumb End -->

<!-- All music Section Begin -->
<section class="discography spad">
   <div class="container mt-5">
      <div class="row">
         <div class="blog__details__services">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title center-title">
                     <h2>Music Song</h2>
                     <h1>Sound Blast</h1>
                  </div>
               </div>
            </div>
         </div>

         <style>
            .btn-search {
               background-color: #ff4546 !important;
               color: white !important;
            }

            .btn-search:hover {
               background-color: #ff5859 !important;
               /* color: burlywood !important; */
            }

            .form-control {
               border-color: #ff4546 !important;
            }
         </style>

         <div class="row d-flex justify-content-center">
            <div class="container">
               <div class="card-body">

                  <form class="d-flex" role="search" action="" method="POST">
                     <input class="form-control me-2" type="search" id="searchbar2" name="search_val"
                        placeholder="Search Music" aria-label="Search">
                     <!-- <button class="btn btn-search" name="search_btn" type="submit">Search</button> -->
                  </form>

               </div>
            </div>
         </div>

         <div class="row d-flex justify-content-center" id="myTable2">
            <?php
            $fetch_music = "SELECT * FROM `music`";
            $fetch_result = mysqli_query($connection, $fetch_music);
            if (mysqli_num_rows($fetch_result) > 0) {
               while ($row = mysqli_fetch_assoc($fetch_result)) {
                  ?>

                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="blog__details__services__item">
                        <div class="blog__details__services__item__pic">
                           <a href="audioplayer1.php?id=<?php echo $row['m_id'] ?>">
                              <img src="<?php echo 'admin-sound/song-img/' . $row["m_img"]; ?>"
                                 alt="<?php echo $row['m_name'] ?>">
                           </a>
                        </div>
                        <div class="blog__details__services__item__text">
                           <h6><a href="#">
                                 <?php echo $row['m_name'] ?>
                              </a></h6>
                           <span>
                              <?php echo $row['m_artist'] ?>
                           </span>
                        </div>
                     </div>
                  </div>
                  <?php
               }
            }


            ?>
         </div>
      </div>
   </div>
</section>
<!-- All music Section End -->

<?php
include('includes/footer.php')
   ?>

<script src="js/ajax.js"></script>
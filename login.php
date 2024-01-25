<?php
include('config.php');
include('includes/navbar.php');
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>MUZIK | Login</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="admin-sound/css/bootstrap.min.css">

   <!-- favicon link -->
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Bootstrap link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

   <!-- Css Styles -->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="css/barfiller.css" type="text/css">
   <link rel="stylesheet" href="css/nowfont.css" type="text/css">
   <link rel="stylesheet" href="css/rockville.css" type="text/css">
   <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
   <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="admin-sound/css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="admin-sound/css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="admin-sound/css/responsive.css">
   <!-- Font Awesome icon cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <!-- Page Preloder -->
   <div id="preloder">
      <div class="loader"></div>
   </div>
   <!-- Sign in Start -->
   <section class="sign-in-page">
      <div class="container">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-6 col-sm-12 col-12 align-self-center">
               <div class="sign-user_card ">
                  <div class="d-flex justify-content-center">

                  </div>
                  <div class="sign-in-page-data">
                     <div class="sign-in-from w-100 pt-5 m-auto">
                        <h1 class="mb-3 text-center">Login</h1>
                        <form class="mt-4" action="insert-login.php" method="POST">
                           <div class="form-group">
                              <label for="exampleInputEmail2">Email address</label>
                              <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2"
                                 placeholder="Enter email" required>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputPassword2">Password</label>
                              <input type="password" name="pass" class="form-control mb-0" id="exampleInputPassword2"
                                 placeholder="Password" required>
                           </div>
                           <!-- <div class="d-inline-block w-100">
                                 <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                 </div>
                              </div> -->
                           <div class="sign-info mt-3">
                              <input type="submit" name="login" class="btn btn-primary mb-2" value="Sign in">
                              <span class="dark-color d-block line-height-2">Don't have an account? <a
                                    href="signUp.php">Sign up</a></span>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="mt-2">
                     <div class="d-flex justify-content-center links">
                       <a href="./admin-sound/sign-in.php" class="ml-2"> Admin Login</a>
                     </div>
                     <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="signUp.php" class="ml-2">Sign Up</a>
                     </div>
                     <!-- <div class="d-flex justify-content-center links">
                           <a href="pages-recoverpw.php">Forgot your password?</a>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Sign in END -->

      </div>
   </section>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
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
   <!-- Style Customizer -->
   <script src="js/style-customizer.js"></script>
   <!-- Chart Custom JavaScript -->
   <script src="js/chart-custom.js"></script>
   <!-- Custom JavaScript -->
   <script src="js/custom.js"></script>

   <!-- Js Plugins -->
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/jquery.nicescroll.min.js"></script>
   <script src="js/jquery.barfiller.js"></script>
   <script src="js/jquery.countdown.min.js"></script>
   <script src="js/jquery.slicknav.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/main.js"></script>

   <!-- Sweet Alert link -->
   <script src="js/sweetalert.js"></script>
   <?php
   if (isset($_SESSION['status']) and $_SESSION['status'] != '') {
      ?>

      <script>
         swal({
            title: "<?php echo $_SESSION['status'] ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code'] ?>",
            button: "Ok. Done!",
         });
         window.location.href = "index.php";
      </script>
      <?php
      unset($_SESSION['status']);
   }
   ?>
   <!-- Music Plugin -->
   <!-- <script src="js/jquery.jplayer.min.js"></script> -->
   <script src="js/jplayerInit.js"></script>
</body>

</html>
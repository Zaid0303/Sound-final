<?php 
include("includes/header.php");
include("config.php");
?>
      <!-- Sign in Start -->
      <section class="sign-in-page">
         <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-6 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card ">
                     <div class="d-flex justify-content-center">
                  
                     </div>
                     <div class="sign-in-page-data">
                        <div class="sign-in-from w-100 m-auto pt-2">
                           <h1 class="mb-3 text-center">Sign Up</h1>
                           <form class="mt-4" action="insert-signup.php" method="POST">
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label for="exampleInputEmail2">Your Full Name</label>
                                 <input type="Text" name="u-name" class="form-control mb-0" id="exampleInputEmail2" placeholder="Your Full Name" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="exampleInputEmail2">Phone Number</label>
                                 <input type="number" name="u-number" class="form-control mb-0" id="exampleInputEmail2" placeholder="Your Phone" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="exampleInputEmail2">Address</label>
                                 <input type="text" name="u-address" class="form-control mb-0" id="exampleInputEmail2" placeholder="Your Address" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="exampleInputEmail3">Email address</label>
                                 <input type="email" name="u-email" class="form-control mb-0" id="exampleInputEmail3" placeholder="Enter email" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="exampleInputPassword2">Password</label>
                                 <input type="password" name="u-pass" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label for="exampleInputPassword2">Repeat Password</label>
                                 <input type="password" name="u-rpass" class="form-control mb-0" id="exampleInputPassword2" placeholder="Repeat Password" required>
                              </div>
                              </div>
                              <div class="d-inline-block w-100">
                                 <div class="custom-control custom-checkbox d-inline-block mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" required>
                                    <label class="custom-control-label" for="customCheck2">I accept <a href="#">Terms and Conditions</a></label>
                                 </div>
                              </div>
                              
                              <div class="sign-info mt-3">
                                 <input type="submit" class="btn btn-primary mb-2" name="addNew" value="Sign Up">
                                 <span class="d-block line-height-2">Already Have Account ? <a href="sign-in.php">Log In</a></span>
                              </div>
                              
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Sign in END -->
     
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
   </body>
</html>
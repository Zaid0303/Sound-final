<?php 
include("includes/header.php");
include("includes/topnav.php");

?>
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
   
      <!-- TOP Nav Bar -->
    
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Add Writer</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form action="admin-writer.php">
                           <div class="form-group">
                              <label>Writer Name:</label>
                              <input type="text" class="form-control">
                           </div>
                           <div class="form-group">
                              <label>Writer Profile:</label>
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile">
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Writer Email:</label>
                              <input type="email" class="form-control">
                           </div>
                            <div class="form-group">
                              <label>Date of Birth:</label>
                              <input class="form-control" type="date"  id="example-date">
                           </div>
                           <div class="form-group">
                              <label>Writer Description:</label>
                              <textarea class="form-control" rows="4"></textarea>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="reset" class="btn btn-danger">Reset</button>
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
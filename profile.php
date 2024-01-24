<?php
include("includes/header.php");
include("includes/navbar.php");
include("config.php");
?>
<link rel="stylesheet" href="css/profile.css">
<div class="container mb-4 mt-5">
    <div class="row">

        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover"
                    style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);"><a
                        class="btn btn-style-1 btn-white btn-sm" href="#" data-toggle="tooltip" title=""
                        data-original-title="You currently have 290 Reward points to spend"><i
                            class="fa fa-award text-md"></i>&nbsp;290 points</a></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                            alt="Daniel Adams">
                    </div>
                    <?php 
                        if (isset($_SESSION["user_name"])) {
                        ?>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg"><?php echo $_SESSION["user_name"]; ?></h5><span
                            class="author-card-position">
                            <?php echo $_SESSION["user_email"]; ?></span>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">

                    <!-- <a class="list-group-item" href="profile.php">
                        <i class="fa fa-user text-muted"></i>Profile Details
                    </a> -->

                    <a class="list-group-item" href="fav.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-heart mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">My Wishlist</div>
                            </div>
                        </div>
                    </a>

                </nav>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="content-panel cart-item">
                <form class="">
                    <fieldset class="fieldset">
                        <h3 class="fieldset-title mt-3 text-center">Personal Info</h3>
                        <div class="form-group avatar">
                            <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                <img class="img-rounded img-responsive"
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            </figure>
                            <!-- <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                <input type="file" class="file-uploader pull-left">
                            </div> -->
                        </div>
                        <div class="d-flex form-group mt-2">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Name</label>
                            <h4 class="col-md-10 col-sm-9 col-xs-12"><?php echo $_SESSION["user_name"]; ?></h4>
                            <!-- <div >
                                <input type="text" class="form-control" value="">
                            </div> -->
                        </div>

                        <div class="d-flex  form-group">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Address</label>
                            <h4 class="col-md-10 col-sm-9 col-xs-12"><?php echo $_SESSION["user_address"]; ?></h4>

                            <!-- <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="text" class="form-control"
                                    value="">
                            </div> -->
                        </div>
                        <div class="d-flex  form-group">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Phone no.</label>
                            <h4 class="col-md-10 col-sm-9 col-xs-12"><?php echo $_SESSION["user_phone"]; ?></h4>

                            <!-- <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" value="">
                            </div> -->
                        </div>
                        <div class="d-flex  form-group">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Email</label>
                            <h4 class="col-md-10 col-sm-9 col-xs-12"><?php echo $_SESSION["user_email"]; ?></h4>
                            <!-- <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" value="">
                            </div> -->
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn murtaza-update" type="submit" value="Update Profile">
                            </div>
                        </div> -->
                    </fieldset>


                </form>
            </div>
        </div>


    </div>
</div>




<?php
include("includes/footer.php");
?>
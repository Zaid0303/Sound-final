<?php
include('includes/header.php');
include('includes/navbar.php');
include("config.php");

?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="audio.php">Music</a>
                    <span>Music Player</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- music Player Media Query Section Begin -->
<style>
    .fa-heart:hover {
        color: red;
    }

    audio {
        width: 100%;
    }

    @media only screen and (max-width: 390px) {
        audio {
            display: none;
        }
    }

    @media only screen and (min-width: 375px) {
        audio {
            display: block;
        }
    }
</style>


<!-- music Player Media Query Section End -->

<!-- Music Player Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <?php
            if (isset($_GET['id'])) {
                $audio_id = $_GET['id'];

                $fetch = "SELECT * from `music` as m inner join `categories` as c on m.cat_id = c.c_id where `m_id` = '$audio_id' ";
                $fetch_result = mysqli_query($connection, $fetch);
                if (mysqli_num_rows($fetch_result) > 0) {
                    while ($row = mysqli_fetch_assoc($fetch_result)) {

                        ?>

                        <div class="col-lg-8">
                            <div class="blog__details__content">
                                <div class="blog__details__item">
                                    <img src="<?php echo 'admin-sound/song-img/' . $row["m_img"]; ?>" alt="audio">
                                    <audio class="mt-3" controls>
                                        <source src="<?php echo 'admin-sound/audio-song/' . $row['m_file'] ?>" type="audio/ogg">
                                        <source src="<?php echo 'admin-sound/audio-song/' . $row['m_file'] ?>" type="audio/mpeg">
                                    </audio>
                                    <div class="blog__details__item__text">
                                        <span>
                                            <?php echo $row['m_artist'] ?>
                                        </span>
                                        <div class="d-inline-flex p-2">
                                            <?php
                                            if (isset($_SESSION['user_id'])) {
                                                // User is logged in, show wishlist button
                                                echo '<a id="fav" data-id="' . $row['m_id'] . '">
                                                        <button id="wishlistButton" name="fav">Add to Wishlist</button>
                                                      </a>';
                                            } else {
                                                // User is not logged in, show a message or open login modal
                                                echo '<button onclick="openModal()">Add to Wishlist</button>';
                                            }
                                            ?>
                                        </div>

                                        <!-- Modal Form  -->
                                        <div id="loginModal" class="modal">
                                            <div class="modal-content">
                                                <span class="close" onclick="closeModal()">&times;</span>
                                                <h3>Create A wishlist?</h3>
                                                <p>Please Login must</p>
                                            </div>
                                        </div>

                                        <!-- wishlist css -->
                                        <style>
                                            button {
                                                padding: 10px 20px;
                                                font-size: 16px;
                                                background-color: #FF0000;
                                                color: white;
                                                border: none;
                                                border-radius: 5px;
                                                cursor: pointer;
                                            }

                                            button:hover {
                                                background-color: #DE1616;
                                            }

                                            /* Modal Styles */
                                            .modal {
                                                display: none;
                                                position: fixed;
                                                top: 0;
                                                left: 0;
                                                width: 100%;
                                                height: 100%;
                                                background-color: rgba(0, 0, 0, 0.5);
                                            }

                                            .modal-content {
                                                background-color: #fefefe;
                                                margin: 10% auto;
                                                padding: 20px;
                                                border: 1px solid #888;
                                                border-radius: 5px;
                                                width: 50%;
                                            }

                                            .close {
                                                color: #FF0000;
                                                float: left;
                                                font-size: 100px;
                                                font-weight: bolder;
                                            }

                                            .close:hover,
                                            .close:focus {
                                                color: black;
                                                text-decoration: none;
                                                cursor: pointer;
                                            }
                                        </style>
                                        <!-- wishlist css -->

                                        <script>
                                            function openModal() {
                                                document.getElementById('loginModal').style.display = 'block';
                                            }
                                            function closeModal() {
                                                document.getElementById('loginModal').style.display = 'none';
                                            }
                                        </script>
                                        <!-- Modal Form end -->


                                        <script>
                                            $(document).ready(function () {

                                                $('#fav').on('click', function () {
                                                    let fav = $(this).attr('data-id')
                                                    console.log(fav);
                                                    $.ajax({
                                                        url: 'favinsert.php',
                                                        method: 'POST',
                                                        data: {
                                                            fav: fav
                                                        },
                                                        success: function (data) {
                                                            console.log(data)
                                                            alert(data)
                                                        }
                                                    })
                                                })
                                            })
                                        </script>


                                        <h3>
                                            <?php echo $row['m_name'];


                                            ?>

                                        </h3>

                                    </div>
                                </div>
                                <div class="blog__details__desc">
                                    <p>I feel as though a lot of people who read my articles are under the impression that I am
                                        suggesting eventually someone is going to come into their life and every puzzle piece
                                        will simply pop into place. Doves will fly out from behind you, a chorus will follow you
                                        around on every date, you will find a bag with 10 million dollars in the street, which
                                        you will use to move to Pleasantville, USA.
                                    </p>
                                </div>
                                <!-- Reviews Link  -->
                                <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                                    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                                    crossorigin="anonymous">
                                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                                    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
                                    crossorigin="anonymous" /> -->
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                                    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                                    crossorigin="anonymous"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                                    crossorigin="anonymous"></script>
                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                                    crossorigin="anonymous"></script>
                                <div class="container mt-5">

                                    <div class="card">
                                        <div class="card-header"></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 text-center">
                                                    <h1 class="mt-4 mb-4" style="color:#ff4541;">
                                                        <b><span id="average_rating">0.0</span> / 5</b>
                                                    </h1>
                                                    <div class="mb-3">
                                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                                    </div>
                                                    <h3><span id="total_review">0</span> Review</h3>
                                                </div>
                                                <div class="col-sm-4">
                                                    <p>
                                                    <div class="progress-label-left"><b>5</b> <i class="fas fa-star"
                                                            style="color: #ff4541" ;></i></div>

                                                    <div class="progress-label-right">(<span id="total_five_star_review">0</span>)
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="background-color:#ff4541;"
                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>4</b> <i class="fas fa-star"
                                                            style="color: #ff4541"></i></div>

                                                    <div class="progress-label-right">(<span id="total_four_star_review">0</span>)
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="background-color:#ff4541;"
                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="100" id="four_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>3</b> <i class="fas fa-star"
                                                            style="color: #ff4541"></i></div>

                                                    <div class="progress-label-right">(<span id="total_three_star_review">0</span>)
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="background-color:#ff4541;"
                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="100" id="three_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>2</b> <i class="fas fa-star"
                                                            style="color: #ff4541"></i></div>

                                                    <div class="progress-label-right">(<span id="total_two_star_review">0</span>)
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="background-color:#ff4541;"
                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="100" id="two_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>1</b> <i class="fas fa-star"
                                                            style="color: #ff4541"></i></div>

                                                    <div class="progress-label-right">(<span id="total_one_star_review">0</span>)
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="background-color:#ff4541;"
                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="100" id="one_star_progress"></div>
                                                    </div>
                                                    </p>
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <h3 class="mt-4 mb-3">Write Review Here</h3>
                                                    <button type="button" name="add_review" id="add_review" class="btn"
                                                        style="background-color:#ff4541; color:#ffff;">Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5" id="review_content"></div>
                                </div>

                                <div id="review_modal" class="modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Submit Review</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="text-center mt-2 mb-4">
                                                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1"
                                                        data-rating="1"></i>
                                                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2"
                                                        data-rating="2"></i>
                                                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3"
                                                        data-rating="3"></i>
                                                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4"
                                                        data-rating="4"></i>
                                                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5"
                                                        data-rating="5"></i>
                                                </h4>
                                                <div class="form-group">
                                                    <input type="text" name="user_name" id="user_name" class="form-control"
                                                        placeholder="Enter Your Name" />
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="user_review" id="user_review" class="form-control"
                                                        placeholder="Type Review Here"></textarea>
                                                </div>
                                                <div class="form-group text-center mt-4">
                                                    <button type="button" class="btn" style="background-color:#ff4541; color:#ffff;"
                                                        id="save_review">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .progress-label-left {
                                        float: left;
                                        margin-right: 0.5em;
                                        line-height: 1em;
                                    }

                                    .progress-label-right {
                                        float: right;
                                        margin-left: 0.3em;
                                        line-height: 1em;
                                    }

                                    .star-light {
                                        color: #e9ecef;
                                    }
                                </style>

                                <script>

                                    $(document).ready(function () {

                                        var rating_data = 0;

                                        $('#add_review').click(function () {

                                            $('#review_modal').modal('show');

                                        });

                                        $(document).on('mouseenter', '.submit_star', function () {

                                            var rating = $(this).data('rating');

                                            reset_background();

                                            for (var count = 1; count <= rating; count++) {

                                                $('#submit_star_' + count).addClass('text-warning');

                                            }

                                        });

                                        function reset_background() {
                                            for (var count = 1; count <= 5; count++) {

                                                $('#submit_star_' + count).addClass('star-light');

                                                $('#submit_star_' + count).removeClass('text-warning');

                                            }
                                        }

                                        $(document).on('mouseleave', '.submit_star', function () {

                                            reset_background();

                                            for (var count = 1; count <= rating_data; count++) {

                                                $('#submit_star_' + count).removeClass('star-light');

                                                $('#submit_star_' + count).addClass('text-warning');
                                            }

                                        });

                                        $(document).on('click', '.submit_star', function () {

                                            rating_data = $(this).data('rating');

                                        });

                                        $('#save_review').click(function () {

                                            var user_name = $('#user_name').val();

                                            var user_review = $('#user_review').val();

                                            if (user_name == '' || user_review == '') {
                                                alert("Please Fill Both Field");
                                                return false;
                                            }
                                            else {
                                                $.ajax({
                                                    url: "submit_rating.php",
                                                    method: "POST",
                                                    data: { rating_data: rating_data, user_name: user_name, user_review: user_review },
                                                    success: function (data) {
                                                        $('#review_modal').modal('hide');

                                                        load_rating_data();

                                                        alert(data);
                                                    }
                                                })
                                            }

                                        });

                                        load_rating_data();

                                        function load_rating_data() {
                                            $.ajax({
                                                url: "submit_rating.php",
                                                method: "POST",
                                                data: { action: 'load_data' },
                                                dataType: "JSON",
                                                success: function (data) {
                                                    $('#average_rating').text(data.average_rating);
                                                    $('#total_review').text(data.total_review);

                                                    var count_star = 0;

                                                    $('.main_star').each(function () {
                                                        count_star++;
                                                        if (Math.ceil(data.average_rating) >= count_star) {
                                                            $(this).addClass('text-warning');
                                                            $(this).addClass('star-light');
                                                        }
                                                    });

                                                    $('#total_five_star_review').text(data.five_star_review);

                                                    $('#total_four_star_review').text(data.four_star_review);

                                                    $('#total_three_star_review').text(data.three_star_review);

                                                    $('#total_two_star_review').text(data.two_star_review);

                                                    $('#total_one_star_review').text(data.one_star_review);

                                                    $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

                                                    $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

                                                    $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

                                                    $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

                                                    $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                                                    if (data.review_data.length > 0) {
                                                        var html = '';

                                                        for (var count = 0; count < data.review_data.length; count++) {
                                                            html += '<div class="row mb-3">';

                                                            html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

                                                            html += '<div class="col-sm-11">';

                                                            html += '<div class="card">';

                                                            html += '<div class="card-header"><b>' + data.review_data[count].user_name + '</b></div>';

                                                            html += '<div class="card-body">';

                                                            for (var star = 1; star <= 5; star++) {
                                                                var class_name = '';

                                                                if (data.review_data[count].rating >= star) {
                                                                    class_name = 'text-warning';
                                                                }
                                                                else {
                                                                    class_name = 'star-light';
                                                                }

                                                                html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                                                            }

                                                            html += '<br />';

                                                            html += data.review_data[count].user_review;

                                                            html += '</div>';

                                                            html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

                                                            html += '</div>';

                                                            html += '</div>';

                                                            html += '</div>';
                                                        }

                                                        $('#review_content').html(html);
                                                    }
                                                }
                                            })
                                        }

                                    });

                                </script>

                            </div>
                        </div>

                        <?php
                    }
                }
            }
            ?>
            <div class="col-lg-4 mt-5">
                <div class="blog__sidebar__item">
                    <div class="blog__sidebar__title">
                        <h4>Recent Musics</h4>
                    </div>
                    <?php
                    $fetch_music = "SELECT * FROM music";
                    $fetch_result = mysqli_query($connection, $fetch_music);
                    if (mysqli_num_rows($fetch_result) > 0) {
                        while ($row = mysqli_fetch_assoc($fetch_result)) {
                            ?>
                            <a href="audioplayer1.php?id=<?php echo $row['m_id'] ?>" class="recent__item">

                                <div class="recent__item__pic">
                                    <img src="<?php echo 'admin-sound/song-img/' . $row["m_img"]; ?>" height="70" width="80"
                                        alt="">
                                </div>
                                <div class="recent__item__text">
                                    <h6>
                                        <?php echo $row['m_name'] ?>
                                    </h6>
                                    <span>
                                        <?php echo $row['m_artist'] ?>
                                    </span>
                                </div>

                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Music Player Section End -->

<?php
include('includes/footer.php')
    ?>
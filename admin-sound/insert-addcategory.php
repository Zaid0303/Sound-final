<?php 
include("config.php");

if(isset($_POST['addcat'])){
    $cat_genre = $_POST['cat-genre'];
    $cat_genre_img = $_FILES['cat-genre-image']['name'];
    $cat_genre_tmp_img = $_FILES['cat-genre-image']['tmp_name'];

    $cat_artist = $_POST['cat-artist'];
    $cat_artist_img = $_FILES['cat-artist-image']['name'];
    $cat_artist_tmp_img = $_FILES['cat-artist-image']['tmp_name'];

    $cat_album = $_POST['cat-album'];
    $cat_album_img = $_FILES['cat-album-image']['name'];
    $cat_album_tmp_img = $_FILES['cat-album-image']['tmp_name'];

    $cat_year = $_POST['cat-year'];


    if(!empty($cat_genre) AND !empty($cat_genre_img) 
    AND !empty($cat_artist) AND !empty($cat_artist_img)
    AND !empty($cat_album) AND !empty($cat_album_img) 
    AND !empty($cat_year)){

        $insert_cat = "INSERT INTO `categories` 
        (`c_id`, `c_genre`, `c_genre_img`, `c_year`, `c_artist`, `c_artist_img`, `c_album`, `c_album_img`, `status`)
         VALUES (NULL, '$cat_genre', '$cat_genre_img', '$cat_year', '$cat_artist', '$cat_artist_img', '$cat_album', '$cat_album_img', '1')";

        $cat_result = mysqli_query($connection, $insert_cat);
        move_uploaded_file($cat_genre_tmp_img, 'category/genre-img/' . $cat_genre_img);
        move_uploaded_file($cat_artist_tmp_img, 'category/artist-img/' . $cat_artist_img);
        move_uploaded_file($cat_album_tmp_img, 'category/album-img/' . $cat_album_img);

        if($cat_result){
            echo "<script> 
            alert('Category added successfully');
            window.location.href='admin-category.php'
            </script>";
            `<div class="alert alert-warning alert-dismissible fade show">
            <strong>Congrates</strong> Product Add in DataBase
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;
        }
    }
}
?>
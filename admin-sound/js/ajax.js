////////////////// insert category ajax start

$(document).ready(function(){
    let cat_genre = $('#cat-genre');
    let cat_year = $('#cat-year');
    let cat_artist = $('#cat-artist');
    let cat_album = $('#cat-album');
    let cat_button = $('addCat');
    // console.log(cat_genre, cat_year, cat_artist, cat_album, cat_button);

    addCat.on('click', function(e){
        e.event.preventDefault();
        $.ajax({
            url: 'insert-addcategory.php',
            method: 'POST',
            data: {
                cat_genre : cat-cat_genre.val(),
                cat_year : cat-cat_year.val(),
                cat_artist : cat-cat_artist.val(),
                cat_album : cat-cat_album.val(),
            },
            success : function(data){
                console.log(data);
            }
        });
    });

////////////////// Add music ajax start

// let music_form = $('#music_form');
// music_form.on('submit', function(e){
//     e.event.preventDefault();
//     let formdata = new FormData(this);
//     $.ajax({
//         url : 'insert-addmusic.php',
//         method : 'POST',
//         data : music_form,
//         contentType : false,
//         processData : false,
//         success : function(data){
//              console.log(data);
//              alert(data)
//         }
//     })
// })
});
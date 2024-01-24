$(document).ready(function(){
    let search = $('#searchbar');
    
    search.on('keyup' , function(){
        $.ajax({
        url : 'search.php',
        method : 'POST',
        data:{
            query : search.val(),
        },
        success : function(data){
            console.log(data)
            $('#myTable').html(data)
        }
    })
    });

});

$(document).ready(function(){
    
    // for music search 
    let search2 = $('#searchbar2');
    
    search2.on('keyup' , function(){
        $.ajax({
        url : 'search2.php',
        method : 'POST',
        data:{
            query : search2.val(),
        },
        success : function(data){
            console.log(data)
            $('#myTable2').html(data)
        }
    })
    })
});
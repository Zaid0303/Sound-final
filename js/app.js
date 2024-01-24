$(document).ready(function () {

// fetch music using ajax
    function getdata() {
        $.ajax({
            url: 'fetch.php',
            method: 'POST',
            success: function (data) {
                // console.log(data);
                tab.html(data);
            }
        })
    }
    getdata()
});
$(document).ready(function() {
    //initial page load
    $('#content').load('content/home.php');

    //After clicking nav buttons
    $('ul#navClick li a').click(function() {
        var page = $(this).attr('href');
        $('#content').load('content/' + page + '.php');
        return false;    
    });

});
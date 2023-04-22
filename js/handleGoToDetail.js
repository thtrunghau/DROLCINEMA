$(document).ready(function(){
    $(".card").click(function(){
        var phim = $(this).attr("id");
        var url = "information.php" + "?id=" + phim;
        window.location.href = url;
    });
});



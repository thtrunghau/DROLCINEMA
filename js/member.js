$(document).ready(function () {

    $("#historyTicket").click(function () {
        $(".body-content-member").load("./page-member/historyTicket.php");

    });

    $("#historyFilm").click(function () {
        $(".body-content-member").load("./page-member/historyFilm.php");

    });
    $("#cardFilm").click(function () {
        $(".body-content-member").load("./page-member/cardFilm.php");

    });
});
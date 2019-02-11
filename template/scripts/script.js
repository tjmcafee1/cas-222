$(document).ready(function() {
    $("dd").hide();
    $("dt").on("click", function() {
        $(this).toggleClass("open").next().slideToggle();
    });
});
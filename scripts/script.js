$(document).ready(function() {
    if (document.documentElement.clientWidth <= 480) {
        $("dd").hide();
    }
        $("dt").on("click", function() {
            $(this).toggleClass("open").next().slideToggle();
        });
    });




Galleria.configure({
    imageCrop: true,
    transition: 'fade'
});
// $(document).ready(function () {
//     //
// });
$(".navbar .navbar-toggler").click(function () {
    $("#header nav").toggleClass("navHeight");
    $("#header .navbar-nav").toggleClass("h-85");
    $("#header .navbar-collapse").toggleClass("h-85");
    $("#quick-access").toggleClass("none");
    $(".container-box").toggleClass("none");
    $(".whatsup").toggleClass("none");
    $(".footer").toggleClass("none");
});

$("#carouselExampleIndicators").find(".carousel-item").first().addClass("active");
$("#carouselExampleIndicators_car").find(".carousel-item").first().addClass("active");
$("#carouselExampleIndicators-show").find(".carousel-item").first().addClass("active");

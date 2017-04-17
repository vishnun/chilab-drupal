$ = jQuery;
$(document).ready(function () {
    $('.parallax').parallax();
    $('.carousel.carousel-slider').carousel({fullWidth: true, duration: 500});
    setInterval(function () {
        $('.carousel').carousel('next');
    }, 5000);
});
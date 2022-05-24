(function ($) {
    $(function () {

        //Carousel inicialização
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        //Carousel set inteval
        window.setInterval(function () {
            $('.carousel').carousel('next', 1);
        }, 4000);

        //Chips nome autor, tempo de preparo, etc
        $('.chips').chips();

        //colapsible ingredientes/como fazer.
        $('.collapsible').collapsible();

    }); // end of document ready
})(jQuery); // end of jQuery name space
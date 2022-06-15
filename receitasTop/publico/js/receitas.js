(function ($) {
    $(function () {

        //VISUALIZAÇÃO*************************************
        //Carousel inicialização
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        //Carousel set inteval
        window.setInterval(function () {
            $('.carousel').carousel('next', 1);
        }, 4000);

        //colapsible ingredientes/como fazer.
        $('.collapsible').collapsible();

        //CADASTRO*************************************
        //INGREDIENTES
        //Chips nome autor, tempo de preparo, etc
        $('.chips').chips();
        $('.chips-placeholder').chips({
            placeholder: 'ingrediente',
            secondaryPlaceholder: '+Enter',
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space

//INGREDIENTES COVERTE EM JSON E COLOCA NO INPUT HIDDEN AO EVENTO DE SUBMIT
function insereChips() {
    var tags = M.Chips.getInstance($('.chips')).chipsData;
    var sendTags = JSON.stringify(tags);
    $('#ingrediente').val(sendTags);

}
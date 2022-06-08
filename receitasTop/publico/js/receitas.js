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

        //Chips nome autor, tempo de preparo, etc
        $('.chips').chips();

        //colapsible ingredientes/como fazer.
        $('.collapsible').collapsible();

        //CADASTRO*************************************
        //INGREDIENTES
        $('.chips-placeholder').chips({
            placeholder: 'ingrediente',
            secondaryPlaceholder: '+enter',
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space

function criaArray() {

    var dados = $('.chips').material_chip('data');
    console.log("array ingredientes" + dados);

    var x = document.getElementById("ingrediente");
    x.value = dados;
}
$('btn-submit').click(function(){
    var dados = $('.chips').material_chip('data');
    console.log(dados);
    console.log("dadosssss");
});
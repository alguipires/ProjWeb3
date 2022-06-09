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

        /* $('.chips-placeholder').chips({
             placeholder: 'ingrediente',
             secondaryPlaceholder: '+enter',
         });*/


        //colapsible ingredientes/como fazer.
        $('.collapsible').collapsible();

        //CADASTRO*************************************
        //INGREDIENTES
        //Chips nome autor, tempo de preparo, etc
        $('.chips').chips();

        $('.chips-placeholder').chips({
            placeholder: 'ingrediente',
            secondaryPlaceholder: '+enter',
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space

//COVERTE EM JSON E COLOCA NO INPUT HIDDEN AO EVENTO DE SUBMIT
//$("form").on("submit", function() {  });
function insereChips() {
    var tags = M.Chips.getInstance($('.chips')).chipsData;
    var sendTags = JSON.stringify(tags);
    $('#ingrediente').val(sendTags);

}


//CODIGO MUDANDO PARA STRING ELEMENTO POR ELEMENTO - GOHORSE
function testeChips() {
    var aux = document.querySelector(".chips"); // retorna todos os divs filhos
    //var eux2 = aux.document.querySelectorAll(".chip");
    var aux2 = aux.querySelectorAll(".chip"); //nodelist
    console.log("LOG LINHA 111");
    console.log(aux);
    console.log("LOG LINHA 113");
    console.log(aux2);
    console.log("LOG LINHA 115"); // percorend a nodelist e printando o valor

    for (let i = 0; i < aux2.length; i++) {
        console.log(aux2[i].textContent.substring(0, aux2[i].textContent.length - 5)); //retonra texto sem concatenado com  close
        //let auxstr = aux2[i].textContent;
        //console.log(auxstr.substring(0, auxstr.length - 5)); // retorna sem concatenar close
        //console.log(aux2[i].textContent); //retonra texto concatenado com  close
        //console.log(aux2[i].innerText); //retorna texto concatenado com  /nclose
    }

}

(function ($) {
    $(function () {
        
        //INICIALIZAÇÃO DO MENU RESPONSIVO PAGINA TEMPLATE INDEX
        $(".dropdown-trigger").dropdown();
        $('.sidenav').sidenav();
        //INICIALIZAÇÃO MODAL COM MESSAGEM FLASHS
        $('.modal').modal();
        $('.modal').modal('open');
    }); // end of document ready
})(jQuery); // end of jQuery name space
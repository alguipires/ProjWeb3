(function ($) {
    $(function () {
        
        //INICIALIZAÇÃO DO MENU RESPONSIVO PAGINA TEMPLATE INDEX
        $(".dropdown-trigger").dropdown();
        $('.sidenav').sidenav();
        //INICIALIZAÇÃO MODAL COM MESSAGEM FLASHS
        $('.modal').modal();
        $('.modal').modal('open');
        
        
        //$("#menu").load("ReceitasTop\mvc\Visao\templates\menu.html");
        //$("#footer").load("ReceitasTop\mvc\Visao\templates\footer.html");

    }); // end of document ready
})(jQuery); // end of jQuery name space
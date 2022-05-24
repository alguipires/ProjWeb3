(function ($) {
    $(function () {

        //inicialização sidenav
        //$('.sidenav').sidenav();        

        //inicialização tabs
        $('.tabs').tabs();

        //paginas dinamicas
        //verificar se funciona com rotas do php
        
        $("#newReceita").load("newReceita.html");
        $("#myReceitas").load("myReceitas.html");
        $("#usuariosMeusComentarios").load("<?= URL_RAIZ . 'usuarios/usuariosMeusComentarios'?>");
        $("#editData").load("editData.html");

    }); // end of document ready
})(jQuery); // end of jQuery name space
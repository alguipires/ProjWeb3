(function ($) {
    $(function () {      

        //inicialização tabs
        $('.tabs').tabs();

        //paginas dinamicas
        //verificar se funciona com rotas do php
/*
        $("#newReceita").load("newReceita.html");
        $("#myReceitas").load("myReceitas.html");
        $("#usuariosMeusComentarios").load("<?= URL_RAIZ . 'usuarios/usuariosMeusComentarios'?>");
        $("#editData").load("editData.html");*/

    }); // end of document ready
})(jQuery); // end of jQuery name space


//BUSCA DE CEP **** DESATIVADO POR NÃO FAZER A TABELA NO BD E MODELO ENDEREÇO
/*
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    //document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
    //document.getElementById('ibge').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    console.log("INSERINDO VALORES DO CEP...");
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    //document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
    //document.getElementById('ibge').value=(conteudo.ibge);

    console.log("FOCUS NO INPUT NUMERO...");
    document.getElementById('numero').focus();

} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

    console.log("INICIOU A BUSCA DO CEP..");

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        //document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";
       //document.getElementById('ibge').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};*/
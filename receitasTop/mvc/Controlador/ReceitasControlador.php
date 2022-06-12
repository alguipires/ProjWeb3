<?php

namespace Controlador;

use \Modelo\Receita;
use \Framework\DW3Sessao;

class ReceitasControlador extends Controlador
{
    public function index()
    {
        $this->visao('receitas/index.php', [
            'usuario' => $this->getUsuario(),
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }

    //PAGINAÇÃO FAZER!!!!!!!!!!!!!!
    private function calcularPaginacao()
    {
        /*$pagina = array_key_exists('p', $_GET) ? intval($_GET['p']) : 1;
        $limit = 4;
        $offset = ($pagina - 1) * $limit;
        $mensagens = Receita::buscarTodos($limit, $offset);
        $ultimaPagina = ceil(Receita::contarTodos() / $limit);
        return compact('pagina', 'mensagens', 'ultimaPagina');*/
    }

    //METODO NÃO IMPLEMENTADO -- FAZER!!!!
    public function mostrar($id)
    {
        $this->verificarLogado();
        $receita = Receita::buscarId($id);
        //DEBUG TESTE
        /*echo 'ID====' . $receita->getId();
        echo 'NOME===' . $receita->getTitulo();
        echo 'TEMPO PREPARO===' . $receita->getTempoPreparo();
        echo 'DATA PUB===' . $receita->getDataPublicacao();
        echo 'FOTOS===' . $receita->getFotos();
        echo 'INGREDIENTES===' . $receita->getIngrediente();
        echo 'COMO FAZER===' . $receita->getComoFazer();
        echo 'ID-USUARIO===' . $receita->getUsuario_id(); 
        exit;*/
        $this->visao('receitas/mostrar.php', [
            'receita' => $receita,
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }

    public function criar()
    {
        $this->verificarLogado();
        $this->visao('receitas/criar.php', [
            'usuario' => $this->getUsuario(),
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }

    /*parametros como: datadePublicacao, usuario-id estão sendo adicionados pelos dados servidor*/
    public function armazenar()
    {
        $this->verificarLogado();
        /*echo '<prev>';
        var_dump($_FILES);
        exit;*/
        $foto = array_key_exists('fotos', $_FILES) ? $_FILES['fotos'] : null;
        $data = date('Y/m/d');

        $receita = new Receita(
            $_POST['titulo'],
            $_POST['tempoPreparo'],
            $data,
            $foto,
            $_POST['ingrediente'],
            $_POST['comoFazer'],
            $this->getUsuario()->getId()
             
        );
        //VALIDAÇÃO
        if ($receita->isValido()) {
            $receita->salvar();
            DW3Sessao::setFlash('mensagem', 'receita cadastrada com sucesso.');
            $this->redirecionar(URL_RAIZ . 'receitas/criar');
        } else{
            $this->setErros($receita->getValidacaoErros());
            $this->visao('receitas/criar.php');
        }
    }

    /*public function atualizar($id)
    {
        $this->verificarLogado();
        $reclamacao = Reclamacao::buscarId($id);
        $reclamacao->setDataAtendimento();
        $reclamacao->salvar();
        DW3Sessao::setFlash('mensagem', 'Reclamação atendida com sucesso.');
        $this->redirecionar(URL_RAIZ . 'reclamacoes');
    }*/
}

<?php

namespace Controlador;

use \Modelo\Receita;
use \Framework\DW3Sessao;

class ReceitasControlador extends Controlador
{
    public function index()
    {
        //$this->verificarLogado(true);
        //$reclamacoes = Reclamacao::buscarNaoAtendidos();
        $this->visao('receitas/index.php', [
            'usuario' => $this->getUsuario(),
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }

    //METODO NÃO IMPLEMENTADO -- FAZER!!!!
    public function mostrar($id)
    {
        $receita = Receita::buscarId($id);
        $this->visao('receitas/mostrar.php', [
            'contato' => $receita
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

    /*parametros como: datadePublicacao, curtidas, usuario-id estão sendo adicionados pelos dados servidor*/
    public function armazenar()
    {
        $this->verificarLogado();

        $foto = array_key_exists('fotos', $_FILES) ? $_FILES['fotos'] : null;
        $data = date('d/m/Y');
        $receita = new Receita(
            $_POST['titulo'],
            $_POST['tempoPreparo'],
            $data,
            null,
            $foto,
            $_POST['ingrediente'],
            $_POST['comoFazer'],
            $this->getUsuario()->getId()
        );
        $receita->salvar();
        DW3Sessao::setFlash('mensagem', 'receita cadastrada com sucesso.');
        $this->redirecionar(URL_RAIZ . 'receitas/criar');

        //FAZER VALIDAÇÃO
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
        $this->verificarLogado(true);
        $reclamacao = Reclamacao::buscarId($id);
        $reclamacao->setDataAtendimento();
        $reclamacao->salvar();
        DW3Sessao::setFlash('mensagem', 'Reclamação atendida com sucesso.');
        $this->redirecionar(URL_RAIZ . 'reclamacoes');
    }*/
}

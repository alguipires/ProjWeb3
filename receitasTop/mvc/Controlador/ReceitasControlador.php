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

    //METODO NÃO IMPLEMENTADO -- FAZER!!!!
    /*public function mostrar($id)
    {
        $receita = Receita::buscarId($id);
        $this->visao('receitas/mostrar.php', [
            'contato' => $receita
        ]);
    }*/

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

        //echo 'LOG controlador id user...' . $this->getUsuario()->getId();
        //echo 'LOG controlador id user PELO DW3SESSAO...' . DW3Sessao::get('usuario');


        $foto = array_key_exists('fotos', $_FILES) ? $_FILES['fotos'] : null;
       // echo 'LOG controlador foto...' . $foto;

        $data = date('Y/m/d');
        //echo 'dATA LOG....' . $data;
        $receita = new Receita(
            $_POST['titulo'],
            $_POST['tempoPreparo'],
            date('Y/m/d'),
            $this->getUsuario()->getId(),
            $_POST['ingrediente'],
            $_POST['comoFazer'],
            $this->getUsuario()->getId()
             
        );
        //$receita->salvar();
        //DW3Sessao::setFlash('mensagem', 'receita cadastrada com sucesso.');
        //$this->redirecionar(URL_RAIZ . 'receitas/criar');

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

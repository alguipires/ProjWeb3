<?php

namespace Controlador;

use \Modelo\Comentario;
use \Framework\DW3Sessao;

class ComentariosControlador extends Controlador
{

    /*parametros como: datadePublicacao, usuario-id estão sendo adicionados pelos dados servidor*/
    public function armazenar()
    {
        $this->verificarLogado();
        $comentario = new Comentario(
            $_POST['titulo'],
            $_POST['comentario'],
            $this->getUsuario()->getId(),
            $this->getReceita()->getId()
             
        );

        //VALIDAÇÃO
        if ($comentario->isValido()) {
            $comentario->salvar();
            DW3Sessao::setFlash('mensagem', 'Comentario cadastrado com sucesso.');
            $this->redirecionar(URL_RAIZ . 'receitas/'. $this->getReceita()->getId());
        } else{
            $this->setErros($comentario->getValidacaoErros());
            $this->visao('receitas/'. $this->getReceita()->getId());
        }
    }
}

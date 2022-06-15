<?php

namespace Controlador;

use \Framework\DW3Controlador;
use \Framework\DW3Sessao;
use Modelo\Receita;
use \Modelo\Usuario;
use \Modelo\Comentario;

abstract class Controlador extends DW3Controlador
{
    use ControladorVisao;

    protected $usuario;

    /*METODO COM ERRO - USUARIOS NÃO ADMIN NÃO ACESSA A PAGINA
    protected function verificarLogado($admin = false)
    {
    	$usuario = $this->getUsuario();
        var_dump($usuario);
        exit;
        if ($usuario == null || ($admin && !$usuario->isAdmin()) ) {
            DW3Sessao::setFlash('mensagem', 'Faça login para acessar essa pagina!!');
        	$this->redirecionar(URL_RAIZ . 'login');
        }
    }*/

    // METTODO TESTE PARA BG DO NÃO ADM
    protected function verificarLogado()
    {
        $usuario = $this->getUsuario();
        if ($usuario == null) {
            DW3Sessao::setFlash('mensagem', 'Faça login para acessar essa pagina!!');
            $this->redirecionar(URL_RAIZ . 'login');
        }
    }

    protected function getUsuario()
    {
        if ($this->usuario == null) {
            $usuarioId = DW3Sessao::get('usuario');
            if ($usuarioId == null) {
                return null;
            }
            $this->usuario = Usuario::buscarId($usuarioId);
        }
        return $this->usuario;
    }

    protected function getReceita()
    {
        if ($this->receita == null) {
            $receitaId = DW3Sessao::get('receita');
            if ($receitaId == null) {
                return null;
            }
            $this->receita = Receita::buscarId($receitaId);
        }
        return $this->receita;
    }
}

<?php

namespace Controlador;

use \Framework\DW3Controlador;
use \Framework\DW3Sessao;
use \Modelo\Usuario;

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

        /*var_dump("usuario - veerifica logado");
        var_dump($usuario);
        exit;*/

        if ($usuario == null) {
            DW3Sessao::setFlash('mensagem', 'Faça login para acessar essa pagina!!');
            $this->redirecionar(URL_RAIZ . 'login');
        }
    }

    protected function getUsuario()
    {
        /*var_dump("PRINT ==" . $this->usuario);
        exit;*/

        if ($this->usuario == null) {
            $usuarioId = DW3Sessao::get('usuario');


            /*var_dump("GET usuario - PEGANDO DA SESÃO");
            var_dump($usuarioId);*/


            if ($usuarioId == null) {
                return null;
            }
            $this->usuario = Usuario::buscarId($usuarioId);

            /*var_dump(" BUSCANDO ID usuario - PEGANDO DO BD  ");
            var_dump($this->usuario);
            exit;*/
        }
        return $this->usuario;
    }
}

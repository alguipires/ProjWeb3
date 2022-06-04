<?php
namespace Controlador;

use \Framework\DW3Sessao;

class RaizControlador extends Controlador
{

    public function index()
    {
        $this->visao('inicial/index.php', [
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }

    public function dashboard()
    {
        $this->visao('dashboard/dashboard.php', [
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }
}



/* //$this->verificarLogado();
        $this->visao('inicial/index.php', [
            //'usuario' => $this->getUsuario(),
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]); */
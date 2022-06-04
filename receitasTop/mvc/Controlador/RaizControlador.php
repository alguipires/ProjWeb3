<?php
namespace Controlador;

class RaizControlador extends Controlador
{
    public function index()
    {
        $this->visao('inicial/index.php');
        //$this->verificarLogado();
        /*$this->visao('inicial/index.php', [
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);*/
    }

    public function dashboard()
    {
        $this->visao('dashboard/dashboard.php');
    }
}

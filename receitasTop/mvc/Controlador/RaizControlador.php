<?php
namespace Controlador;

class RaizControlador extends Controlador
{
    public function index()
    {
       //$paginainicial = PaginaInicial::buscarVitrine();
        $this->visao('inicial/index.php');
    }

    public function dashboard()
    {
        $this->visao('dashboard/dashboard.php');
    }

    /*public function armazenar()
    {
        $mensagem = new Mensagem($_POST['usuario'], $_POST['texto']);
        $mensagem->salvar();
        $this->redirecionar(URL_RAIZ);
    }
    }*/
}

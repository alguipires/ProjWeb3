<?php
namespace Controlador;

use \Modelo\Receita;
use Modelo\Usuario;
use \Framework\DW3Sessao;

class RaizControlador extends Controlador
{
    private function calcularPaginacao()
    {
        $pagina = array_key_exists('p', $_GET) ? intval($_GET['p']) : 1;
        $limit = 6;
        $offset = ($pagina - 1) * $limit;
        $receitas = Receita::buscarTodos($limit, $offset);
        $ultimaPagina = ceil(Receita::contarTodos() / $limit);
        if($receitas>0){
            return compact('pagina', 'receitas', 'ultimaPagina');
        }
        if($receitas<0){
            $receitas = 0;
            $ultimaPagina = 0;
            $pagina = 0;
            return compact('pagina', 'receitas', 'ultimaPagina');
        }

    }

    private function relatorioDashboard()
    {
        $totalReceitas = Receita::contarTodos();
        $totalUsuario = Usuario::contarTodos();
        return compact('totalReceitas', 'totalUsuario');
    }

    public function index()
    {
        $paginacao = $this->calcularPaginacao();
        $this->visao('inicial/index.php', [
            'receitas' => $paginacao['receitas'],
            'pagina' => $paginacao['pagina'],
            'ultimaPagina' => $paginacao['ultimaPagina'],
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }

    public function dashboard()
    {
        $relatorio = $this->relatorioDashboard();
        $this->visao('dashboard/dashboard.php', [
            'totalReceitas' => $relatorio['totalReceitas'],
            'totalUsuario' => $relatorio['totalUsuario'],
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }
}



/* //$this->verificarLogado();
        $this->visao('inicial/index.php', [
            //'usuario' => $this->getUsuario(),
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]); */
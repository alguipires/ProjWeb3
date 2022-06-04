<?php
namespace Controlador;

use \Modelo\Usuario;
use \Framework\DW3Sessao;

class LoginControlador extends Controlador
{
    public function criar()
    {
        $this->visao('login/criar.php', [
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
    }

    public function armazenar()
    {
        $usuario = Usuario::buscarEmail($_POST['email']);
        if ($usuario && $usuario->verificarSenha($_POST['senha'])) {
            DW3Sessao::set('usuario', $usuario->getId());
            if ($usuario->isAdmin()) {
                DW3Sessao::setFlash('mensagem', 'usuario ADM logado com sucesso.');
                $this->redirecionar(URL_RAIZ);
            } else {
                DW3Sessao::setFlash('mensagem', 'usuario logado com sucesso.');
                $this->redirecionar(URL_RAIZ);
            }
        } else {//verificar aida dando erro
            DW3Sessao::setFlash('mensagem', 'usuario não encontrado.');
            $this->redirecionar(URL_RAIZ . 'login');
        }
    }

    public function destruir()
    {
        DW3Sessao::deletar('usuario');
        DW3Sessao::setFlash('mensagem', 'usuario deslogado com sucesso.');
        $this->redirecionar(URL_RAIZ);
    }
}
<?php
namespace Controlador;

use \Modelo\Usuarios;

class UsuariosControlador extends Controlador
{
    public function criar()
    {
        $this->visao('usuarios/criar.php');
    }

    public function armazenar()
    {
        $usuario = new Usuario($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha']);
        $usuario->salvar();
        DW3Sessao::setFlash('mensagem', 'usuario cadastrada com sucesso.');
        $this->redirecionar(URL_RAIZ);/*verificar para tornar msg flash */
    }

    public function usuariosMeusComentarios()
    {
        $this->visao('usuarios/usuariosMeusComentarios.php');
    }
}

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
        $usuario = new Usuario($_POST['nome'], $_POST['senha']);
        $usuario->salvar();
        $this->redirecionar(URL_RAIZ . 'usuarios/sucesso');/*verificar para tornar msg flash */
    }

    public function sucesso()
    {
        /*verificar para tornar msg flash */
        $this->visao('usuarios/sucesso.php');
    }

    public function usuariosMeusComentarios()
    {
        $this->visao('usuarios/usuariosMeusComentarios.php');
    }
}

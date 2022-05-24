<?php
namespace Controlador;

use \Modelo\Usuario;

class UsuarioControlador extends Controlador
{
    public function buscar()
    {
        $this->visao('usuarios/usuarios.php');
    }

    public function usuariosMeusComentarios()
    {
        $this->visao('usuarios/usuariosMeusComentarios.php');
    }

    /*
    public function criar()
    {
        $this->visao('usuarios/criar.php');
    }

    public function armazenar()
    {
        $usuario = new Usuario($_POST['nome'], $_POST['senha']);
        $usuario->salvar();
        $this->redirecionar(URL_RAIZ . 'usuarios/sucesso');
    }

    public function sucesso()
    {
        $this->visao('usuarios/sucesso.php');
    }*/
}

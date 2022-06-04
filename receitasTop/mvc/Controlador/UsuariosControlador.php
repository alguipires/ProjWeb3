<?php
namespace Controlador;

use \Modelo\Usuario;
use \Framework\DW3Sessao;

class UsuariosControlador extends Controlador
{
    public function criar()
    {
        $this->visao('usuarios/criar.php', [
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
        
    }

    public function armazenar()
    {
        //echo '<script>console.log("ENTROU NO ARMAZENAR")</script>';
        $usuario = new Usuario($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha']);
        //echo '<script>console.log("CRIOU OBJETO NO ARMAZENAR")</script>';
        $usuario->salvar();
        //echo '<script>console.log("SALVOU  NO ARMAZENAR")</script>';
        DW3Sessao::setFlash('mensagem', 'usuario cadastrada com sucesso.');
        $this->redirecionar(URL_RAIZ);/*verificar para tornar msg flash */
    }

    public function usuariosMeusComentarios()
    {
        $this->visao('usuarios/usuariosMeusComentarios.php');
    }
}



/*
msg flas no caminho CRIAR
   $this->visao('URL_RAIZ', [
            'usuario' => $this->getUsuario(),
            'mensagem' => DW3Sessao::getFlash('mensagem', null)
        ]);
*/
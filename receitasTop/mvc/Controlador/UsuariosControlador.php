<?php
namespace Controlador;

use \Modelo\Usuario;
use \Framework\DW3Sessao;

class UsuariosControlador extends Controlador
{

    public function armazenar()
    {
        //echo '<script>console.log("ENTROU NO ARMAZENAR")</script>';
        $usuario = new Usuario($_POST['nome'], $_POST['email'], $_POST['senha']);
        if ($usuario->isValido()){
            $usuario->salvar();
            DW3Sessao::setFlash('mensagem', 'usuario cadastrada com sucesso.');
            $this->redirecionar(URL_RAIZ);
        } else {
            $this->setErros($usuario->getValidacaoErros());
            $this->visao('usuarios/criar.php', [
                'mensagem' => DW3Sessao::getFlash('mensagem', null)
            ]);
        }
        
    }
    
}
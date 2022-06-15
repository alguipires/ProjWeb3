<?php

namespace Modelo;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Framework\DW3Sessao;
use \Modelo\Usuario;

class Comentario extends Modelo
{
    const BUSCAR_ID = 'SELECT * FROM comentarios WHERE id = ?';
    const BUSCAR_RECEITA_ID = 'SELECT * FROM comentarios WHERE receita_id = ?';
    const BUSCAR_USUARIO_ID = 'SELECT * FROM comentarios WHERE usuario_id = ?';
    //const BUSCAR_NAO_ATENDIDOS = 'SELECT * FROM receitas WHERE data_atendimento IS NULL ORDER BY id';
    const INSERIR = 'INSERT INTO comentarios(titulo, comentario, usuario_id, receita_id) VALUES (?, ?, ?, ?)';
    //const ATUALIZAR = 'UPDATE receitas SET titulo = ?, tempoPreparo = ?, dataPublicacao = ?, fotos = ?, ingrediente = ?, comoFazer = ?, usuario_id = ?,  WHERE id = ?';

    private $titulo;
    private $comentario;
    private $usuario_id;
    private $receita_id;
    private $id;

    public function __construct(
        $titulo = null,
        $comentario = null,
        $usuario_id = null,
        $receita_id = null,
        $id = null,
    ) {
        $this->titulo = $titulo;
        $this->comentario = $comentario;
        $this->usuario_id = $usuario_id;
        $this->receita_id = $receita_id;
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        return $this->titulo = $titulo;
    }

    public function getComentario()
    {
        return $this->comentario;
    }

    public function setComentario($comentario)
    {
        return $this->comentario = $comentario;
    }

    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    //METODO PARA RETORNAR NOME DO USUARIO CRIADOR DO COMENTARIO
    public function getNomeUsuario()
    {
        return Usuario::buscarId($this->usuario_id)->getNome();
    }

    public function getReceita_id()
    {
        return $this->receita_id;
    }

    protected function verificarErros()
    {
        /*if (strlen($this->email) < 3) {
            $this->setErroMensagem('email', 'Deve ter no mínimo 3 caracteres.');
        }
        if (strlen($this->senhaPlana) < 3) {
            $this->setErroMensagem('senha', 'Deve ter no mínimo 3 caracteres.');
        }*/
    }

    public function salvar()
    {
        $this->inserir();
        /*if ($this->id == null) {
            $this->inserir();
            $this->salvarImagem();
        } else {
            //$this->atualizar();
        }*/
    }

    public function inserir()
    {
        /*//DEBUG TESTE
        echo 'NOME===' . $this->titulo;
        echo 'TEMPO PREPARO===' . $this->comentario;
        echo 'ID-USUARIO===' .$this->usuario_id; 
        echo 'ID-RECEITA===' .$this->receita_id; 
        exit;*/

        DW3BancoDeDados::getPdo()->beginTransaction();
        $comando = DW3BancoDeDados::prepare(self::INSERIR);
        $comando->bindValue(1, $this->titulo, PDO::PARAM_STR);
        $comando->bindValue(2, $this->comentario, PDO::PARAM_STR);
        $comando->bindValue(3, $this->usuario_id, PDO::PARAM_INT);
        $comando->bindValue(4, $this->receita_id, PDO::PARAM_INT);
        $comando->execute();
        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();
        DW3BancoDeDados::getPdo()->commit();
    }

    //METODO NÃO IMPLEMENTADO -- FAZER!!!!
    /*public function atualizar()
    {
        $comando = DW3BancoDeDados::prepare(self::ATUALIZAR);
        $comando->bindValue(1, $this->dataAtendimento, PDO::PARAM_STR);
        $comando->bindValue(2, $this->id, PDO::PARAM_INT);
        $comando->execute();
    }*/

    public static function buscarId($id)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_ID);
        $comando->bindValue(1, $id, PDO::PARAM_INT);
        $comando->execute();
        $registro = $comando->fetch();
        return new Comentario(
            $registro['titulo'],
            $registro['comentario'],
            $registro['usuario_id'],
            $registro['receita_id'],
            $registro['id']
        );

        /*//DEBUG TESTE
        echo 'TITULO===' . $obj->getTitulo();
        echo 'COMENTARIO===' . $obj->getComentario();
        echo 'ID-USUARIO===' . $obj->getUsuario_id();
        echo 'ID-RECEITA===' . $obj->getReceita_id();
        exit;
        return $obj;*/
    }

    public static function buscarReceitaId($receitaId)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_RECEITA_ID);
        $comando->bindValue(1, $receitaId, PDO::PARAM_INT);
        $comando->execute();
        $registros = $comando->fetchAll();
        $objetos = [];
        foreach ($registros as $registro) {
            $comentarios = new Comentario(
                $registro['titulo'],
                $registro['comentario'],
                $registro['usuario_id'],
                $registro['receita_id'],
                $registro['id']
            );
            $objetos [] = $comentarios; 
        }
        return $objetos;
    }


    public static function buscarUsuarioId($usuarioId)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_USUARIO_ID);
        $comando->bindValue(1, $usuarioId, PDO::PARAM_INT);
        $comando->execute();
        $registro = $comando->fetch();

        //return new Comentario(

        $obj = new Comentario(
            $registro['titulo'],
            $registro['comentario'],
            $registro['usuario_id'],
            $registro['receita_id'],
            $registro['id']
        );

        /*//DEBUG TESTE
        echo 'TITULO===' . $obj->getTitulo();
        echo 'COMENTARIO===' . $obj->getComentario();
        echo 'ID-USUARIO===' . $obj->getUsuario_id();
        echo 'ID-RECEITA===' . $obj->getReceita_id();
        exit;
        return $obj;*/
    }
}

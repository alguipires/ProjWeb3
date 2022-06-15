<?php

namespace Modelo;

use \PDO;
use \Framework\DW3BancoDeDados;

class Usuario extends Modelo
{
    const BUSCAR_ID = 'SELECT * FROM usuarios WHERE id = ? LIMIT 1';
    const BUSCAR_POR_EMAIL = 'SELECT * FROM usuarios WHERE email = ? LIMIT 1';
    const INSERIR = 'INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)';
    const CONTAR_TODOS = 'SELECT count(id) FROM usuarios';

    //const ATUALIZAR = 'UPDATE usuarios SET nome = ?,... WHERE id = ?';
    //const DELETAR = 'DELETE FROM usuarios WHERE id = ?';

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $senhaPlana;
    private $admin;

    public function __construct(
        $nome = null,
        $email = null,
        $senhaPlana = null,
        $id = null,
        $admin = false
    ) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senhaPlana = $senhaPlana;
        $this->senha = password_hash($senhaPlana, PASSWORD_BCRYPT);
        $this->id = $id;
        $this->admin = $admin;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function verificarSenha($senhaPlana)
    {
        return password_verify($senhaPlana, $this->senha);
    }

    public function isAdmin()
    {
        return $this->admin;
    }

    public function salvar()
    {
        $this->inserir();
    }

    //metodo sobre escrito do controlador
    protected function verificarErros()
    {
        if (strlen($this->nome) < 3) {
            $this->setErroMensagem('nome', 'Deve ter no mínimo 3 caracteres.');
        }
        if (strlen($this->email) < 4) {
            $this->setErroMensagem('email', 'Deve ter no mínimo 4 caracteres.');
        }
        if (strlen($this->senhaPlana) < 4) {
            $this->setErroMensagem('senha', 'Deve ter no mínimo 4 caracteres.');
        }
    }

    public function inserir()
    {
        DW3BancoDeDados::getPdo()->beginTransaction();
        $comando = DW3BancoDeDados::prepare(self::INSERIR);
        $comando->bindValue(1, $this->nome, PDO::PARAM_STR);
        $comando->bindValue(2, $this->email, PDO::PARAM_STR);
        $comando->bindValue(3, $this->senha, PDO::PARAM_STR);
        $comando->execute();
        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();
        DW3BancoDeDados::getPdo()->commit();
    }

    public static function buscarId($id)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_ID);
        $comando->bindValue(1, $id, PDO::PARAM_INT);
        $comando->execute();
        $registro = $comando->fetch();
        return new Usuario(
            $registro['nome'],
            $registro['email'],
            null,
            $registro['id'],
            $registro['admin']
        );
    }

    public static function buscarEmail($email)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_POR_EMAIL);
        $comando->bindValue(1, $email, PDO::PARAM_STR);
        $comando->execute();
        $registro = $comando->fetch();
        $usuario = null;
        if ($registro) {
            $usuario = new Usuario(
                $registro['nome'],
                $registro['email'],
                null,
                $registro['id'],
                $registro['admin']
            );
            $usuario->senha = $registro['senha'];
        }

        /*//DEBUG TESTE
        echo 'ID===' . $usuario->id;
        echo 'NOME===' . $usuario->nome;
        echo 'EMAIL===' . $usuario->email;
        echo 'SENHA===' . $usuario->senha;
        echo 'ADMIN===' . $usuario->admin;
        exit;*/

        return $usuario;
    }

    public static function contarTodos()
    {
        $registros = DW3BancoDeDados::query(self::CONTAR_TODOS);
        $total = $registros->fetch();
        return intval($total[0]);
    }
}

<?php
namespace Modelo;

use \PDO;
use \Framework\DW3BancoDeDados;

class Usuario extends Modelo
{
    const BUSCAR_ID = 'SELECT * FROM usuarios WHERE id = ?';
    const BUSCAR_EMAIL = 'SELECT * FROM usuarios WHERE email = ?';
    const INSERIR = 'INSERT INTO usuarios(nome, cpf, email, senha, admin) VALUES (?, ?, ?, ?, ?)';
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $senhaPlana;
    private $admin;

    public function __construct(
        $nome = null,
        $cpf = null,
        $email = null,
        $senhaPlana = null,
        $id = null,
        $admin = false
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
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

    public function getCpf()
    {
        return $this->cpf;
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

    public function inserir()
    {
        
        DW3BancoDeDados::getPdo()->beginTransaction();
        $comando = DW3BancoDeDados::prepare(self::INSERIR);
        $comando->bindValue(1, $this->nome, PDO::PARAM_STR);
        $comando->bindValue(2, $this->cpf, PDO::PARAM_STR);
        $comando->bindValue(3, $this->email, PDO::PARAM_STR);
        $comando->bindValue(4, $this->senha, PDO::PARAM_STR);
        $comando->bindValue(5, $this->admin, PDO::PARAM_STR);
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
            null,
            $registro['id'],
            $registro['admin']
        );
    }

    public static function buscarEmail($email)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_EMAIL);
        $comando->bindValue(1, $email, PDO::PARAM_STR);
        $comando->execute();
        $registro = $comando->fetch();
        $usuario = null;
        if ($registro) {
            $usuario = new Usuario(
                $registro['email'],
                null,
                $registro['id'],
                $registro['admin']
            );
            $usuario->senha = $registro['senha'];
        }
        return $usuario;
    }
}

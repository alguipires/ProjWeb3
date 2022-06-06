<?php
namespace Modelo;

use \PDO;
use \Framework\DW3BancoDeDados;

class Receita extends Modelo
{
    const BUSCAR_ID = 'SELECT * FROM receitas WHERE id = ?';
    //const BUSCAR_NAO_ATENDIDOS = 'SELECT * FROM receitas WHERE data_atendimento IS NULL ORDER BY id';
    const INSERIR = 'INSERT INTO receitas(titulo, tempoPreparo, dataPublicacao, curtidas, fotos, ingrediente, comoFazer, usuario_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    //const ATUALIZAR = 'UPDATE receitas SET data_atendimento = ? WHERE id = ?';
    private $id;
    private $titulo;
    private $tempoPreparo;
    private $dataPublicacao;
    private $curtidas;
    private $fotos;
    private $ingrediente;
    private $comoFazer;
    private $usuario_id;

    public function __construct(
        $id = null,
        $titulo = null,
        $tempoPreparo = null,
        $dataPublicacao = null,
        $curtidas = null,
        $fotos = null,
        $ingrediente = null,
        $comoFazer = null,
        $usuario_id = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->tempoPreparo = $tempoPreparo;
        $this->dataPublicacao = $dataPublicacao;
        $this->curtidas = $curtidas;
        $this->fotos = $fotos;
        $this->ingrediente = $ingrediente;
        $this->comoFazer = $comoFazer;
        $this->usuario_id = $usuario_id;
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

    public function getTempoPreparo()
    {
        return $this->tempoPreparo;
    }

    public function setTempoPreparo($tempoPreparo)
    {
        return $this->tempoPreparo = $tempoPreparo;
    }

    public function getDataPublicacao()
    {
        return $this->dataPublicacao;
    }

    public function setDataPublicacao()
    {
        return $this->dataPublicacao = date('d/m/Y');
    }

    public function getDataPublicacaoFormatada()
    {
        $data = date_create($this->dataPublicacao);
        return date_format($data, 'd/m/Y');
        //$data = new \DateTime($this->dataIncidente);
        //return $data->format('d/m/Y');
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas)
    {
        return $this->curtidas = $curtidas;
    }

    public function getFotos()
    {
        return $this->fotos;
    }

    public function setFotos($fotos)
    {
        return $this->fotos = $fotos;
    }

    public function getIngrediente()
    {
        return $this->ingrediente;
    }

    public function setIngrediente($ingrediente)
    {
        return $this->ingrediente = $ingrediente;
    }

    public function getComoFazer()
    {
        return $this->comoFazer;
    }

    public function setComoFazer($comoFazer)
    {
        return $this->comoFazer = $comoFazer;
    }

    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    /*public function getUsuario()
    {
        if ($this->usuario == null) {
            $this->usuario = Usuario::buscarId($this->usuarioId);
        }
        return $this->usuario;
    }*/

    public function setDataIncidente($dataIncidente)
    {
        $isBrasileiro = preg_match('/(\d\d)\/(\d\d)\/(\d\d\d\d)/', $dataIncidente, $matches);
        if ($isBrasileiro) {
            $dataIncidente = "$matches[3]-$matches[2]-$matches[1]";
        }
        $this->dataIncidente = $dataIncidente;
    }

    public function setDataAtendimento()
    {
        $this->dataAtendimento = date('Y-m-d h:i:s');
    }

    public function salvar()
    {
        if ($this->id == null) {
            $this->inserir();
        } else {
            $this->atualizar();
        }
    }

    public function inserir()
    {
        DW3BancoDeDados::getPdo()->beginTransaction();
        $comando = DW3BancoDeDados::prepare(self::INSERIR);
        $comando->bindValue(1, $this->titulo, PDO::PARAM_STR);
        $comando->bindValue(2, $this->tempoPreparo, PDO::PARAM_STR);
        $comando->bindValue(3, $this->dataPublicacao, PDO::PARAM_STR);
        $comando->bindValue(4, $this->curtidas, PDO::PARAM_STR);
        $comando->bindValue(5, $this->fotos, PDO::PARAM_STR);
        $comando->bindValue(6, $this->ingrediente, PDO::PARAM_STR);
        $comando->bindValue(7, $this->comoFazer, PDO::PARAM_STR);
        $comando->bindValue(8, $this->usuario_id, PDO::PARAM_INT);
        $comando->execute();
        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();
        DW3BancoDeDados::getPdo()->commit();
    }

    public function atualizar()
    {
        $comando = DW3BancoDeDados::prepare(self::ATUALIZAR);
        $comando->bindValue(1, $this->dataAtendimento, PDO::PARAM_STR);
        $comando->bindValue(2, $this->id, PDO::PARAM_INT);
        $comando->execute();
    }

    public static function buscarId($id)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_ID);
        $comando->bindValue(1, $id, PDO::PARAM_INT);
        $comando->execute();
        $registro = $comando->fetch();
        return new Reclamacao(
            $registro['data_incidente'],
            $registro['local'],
            $registro['descricao'],
            $registro['usuario_id'],
            $registro['id'],
            $registro['data_atendimento']
        );
    }

    public static function buscarNaoAtendidos()
    {
        $registros = DW3BancoDeDados::query(self::BUSCAR_NAO_ATENDIDOS);
        $reclamacoes = [];
        foreach ($registros as $registro) {
            $reclamacoes[] = new Reclamacao(
                $registro['data_incidente'],
                $registro['local'],
                $registro['descricao'],
                $registro['usuario_id'],
                $registro['id']
            );
        }
        return $reclamacoes;
    }
}

<?php

namespace Modelo;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Framework\DW3ImagemUpload;
use \Framework\DW3Sessao;
use \Modelo\Usuario;

class Receita extends Modelo
{
    const BUSCAR_ID = 'SELECT * FROM receitas WHERE id = ?';
    //const BUSCAR_NAO_ATENDIDOS = 'SELECT * FROM receitas WHERE data_atendimento IS NULL ORDER BY id';
    const INSERIR = 'INSERT INTO receitas(titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) VALUES (?, ?, ?, ?, ?, ?, ?)';
    const ATUALIZAR = 'UPDATE receitas SET titulo = ?, tempoPreparo = ?, dataPublicacao = ?, fotos = ?, ingrediente = ?, comoFazer = ?, usuario_id = ?,  WHERE id = ?';
    
    private $titulo;
    private $tempoPreparo;
    private $dataPublicacao;
    private $fotos;
    private $ingrediente;
    private $comoFazer;
    private $usuario_id;
    private $id;

    public function __construct(
        $titulo = null,
        $tempoPreparo = null,
        $dataPublicacao = null,
        $fotos = null,
        $ingrediente = null,
        $comoFazer = null,
        $usuario_id = null,
        $id = null
    ) {
        $this->titulo = $titulo;
        $this->tempoPreparo = $tempoPreparo;
        $this->dataPublicacao = $dataPublicacao;
        $this->fotos = $fotos;
        $this->ingrediente = $ingrediente;
        $this->comoFazer = $comoFazer;
        $this->usuario_id = $usuario_id;
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

    /*public function setDataPublicacao()
    {
        return $this->dataPublicacao = date('Y/m/d');
    }*/

    public function getDataPublicacaoFormatada()
    {
        $data = date_create($this->dataPublicacao);
        return date_format($data, 'd/m/Y');
        //$data = new \DateTime($this->dataIncidente);
        //return $data->format('d/m/Y');
    }

    public function setFotos($fotos)
    {
        return $this->fotos = $fotos;
    }

    public function getFotos()
    {
        $FotosNome = "{$this->id}.png";
        if (!DW3ImagemUpload::existe($FotosNome)) {
            $FotosNome = 'padrao.png';
        }
        return $FotosNome;
    }

    private function salvarImagem()
    {
        if (DW3ImagemUpload::isValida($this->fotos)) {
            $nomeCompleto = PASTA_PUBLICO . "img/{$this->id}.png";
            DW3ImagemUpload::salvar($this->fotos, $nomeCompleto);
        }
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

    //METODO PARA RETORNAR NOME DO USUARIO CRIADOR DA RECEITA
    public function getNomeUsuario()
    {
        return Usuario::buscarId($this->usuario_id)->getNome();
    }

    protected function verificarErros()
    {
        /*if (strlen($this->email) < 3) {
            $this->setErroMensagem('email', 'Deve ter no mínimo 3 caracteres.');
        }
        if (strlen($this->senhaPlana) < 3) {
            $this->setErroMensagem('senha', 'Deve ter no mínimo 3 caracteres.');
        }*/
        if (
            DW3ImagemUpload::existeUpload($this->fotos)
            && !DW3ImagemUpload::isValida($this->fotos)
        ) {
            $this->setErroMensagem('fotos', 'Deve ser de no máximo 500 KB.');
        }
    }

    public function salvar()
    {
        $this->inserir();
        $this->salvarImagem();
        /*if ($this->id == null) {
            $this->inserir();
            $this->salvarImagem();
        } else {
            //$this->atualizar();
        }*/
    }

    public function inserir()
    {
        //DEBUG TESTE
        /*echo 'NOME===' . $this->titulo;
        echo 'TEMPO PREPARO===' . $this->tempoPreparo;
        echo 'DATA PUB===' . $this->dataPublicacao;//colocar data atul do srv
        echo 'FOTOS===' .var_dump($this->fotos);
        echo 'INGREDIENTES===' .$this->ingrediente;
        echo 'COMO FAZER===' .$this->comoFazer;
        echo 'ID-USUARIO===' .$this->usuario_id; 
        exit;*/

        DW3BancoDeDados::getPdo()->beginTransaction();
        $comando = DW3BancoDeDados::prepare(self::INSERIR);
        $comando->bindValue(1, $this->titulo, PDO::PARAM_STR);
        $comando->bindValue(2, $this->tempoPreparo, PDO::PARAM_INT);
        $comando->bindValue(3, $this->dataPublicacao, PDO::PARAM_STR);
        $comando->bindValue(4, $this->fotos, PDO::PARAM_INT);
        $comando->bindValue(5, $this->ingrediente, PDO::PARAM_STR);
        $comando->bindValue(6, $this->comoFazer, PDO::PARAM_STR);
        $comando->bindValue(7, $this->usuario_id, PDO::PARAM_INT);
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

    //METODO NÃO IMPLEMENTADO -- FAZER!!!!
    public static function buscarId($id)
    {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_ID);
        $comando->bindValue(1, $id, PDO::PARAM_INT);
        $comando->execute();
        $registro = $comando->fetch();
        return new Receita(
            $registro['titulo'],
            $registro['tempoPreparo'],
            $registro['dataPublicacao'],
            $registro['fotos'],
            $registro['ingrediente'],
            $registro['comoFazer'],
            $registro['usuario_id'],
            $registro['id']
        );
        /*//DEBUG TESTE
        echo 'ID====' . $obj->getId();
        echo 'TITULO===' . $obj->getTitulo();
        echo 'TEMPO PREPARO===' . $obj->getTempoPreparo();
        echo 'DATA PUB===' . $obj->getDataPublicacao();
        echo 'FOTOS===' . $obj->getFotos();
        echo 'INGREDIENTES===' . $obj->getIngrediente();
        echo 'COMO FAZER===' . $obj->getComoFazer();
        echo 'ID-USUARIO===' . $obj->getUsuario_id();
        exit;
        return $obj;*/
    }
}

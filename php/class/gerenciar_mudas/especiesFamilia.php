<?php

namespace base\gerenciar_mudas;

class especiesFamilia {

    var $tabela = "especiesfamilias";

    var $dir_upload = "BASEV2/php/upload/especiesFamilia/";

    var $id = null;
    var $especie_nome = null;
    var $familia_nome = null;
    var $imagem_file = null;

    public function file() {
        if($this->getImagemFile()) {
            $tmp = "file = '".$this->getImagemFile()."',";
            return $tmp;
        } else {
            return false;
        }
    }

    public function save() {

        if($this->getId()) {

            $tmp = $this->updateSQL();

        } else {

            $tmp = $this->insertSQL();

        }

        return $tmp;
    }

    public function getDelete($id) {
        $tmp = "delete from {$this->tabela} where id = '$id'";
        return $tmp;
    }

    public function getRowById($id) {
        $tmp = "select * from {$this->tabela} where id = '$id'";
        return $tmp;
    }

    public function getTableHtml() {
        $tmp = "select * from {$this->tabela} order by data_criacao desc";
        return $tmp;
    }

    public function insertSQL() {

        $tmp = "INSERT INTO {$this->tabela}
                    (especie, familia, file, data_criacao)
                    VALUES
                    ('".$this->getEspecieNome()."', '".$this->getFamiliaNome()."',
                    '".$this->getImagemFile()."', NOW());";
        return $tmp;

    }

    public function updateSQL() {

        $tmp = "UPDATE {$this->tabela} SET
                    ".$this->file()."
                    especie = '".$this->getEspecieNome()."',
                    familia = '".$this->getFamiliaNome()."'
                    WHERE id = ".$this->getId().";";
        return $tmp;

    }

    public function updateColunaByID($coluna,$novovalor,$id) {

        $tmp = "UPDATE {$this->tabela} SET $coluna = '$novovalor' where id = '$id'";
        return $tmp;

    }

    /**
     * @return string
     */
    public function getDirUpload()
    {
        return $this->dir_upload;
    }

    /**
     * @return null
     */
    public function getEspecieNome()
    {
        return $this->especie_nome;
    }

    /**
     * @param null $especie_nome
     */
    public function setEspecieNome($especie_nome)
    {
        $this->especie_nome = $especie_nome;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getFamiliaNome()
    {
        return $this->familia_nome;
    }

    /**
     * @param null $familia_nome
     */
    public function setFamiliaNome($familia_nome)
    {
        $this->familia_nome = $familia_nome;
    }

    /**
     * @return null
     */
    public function getImagemFile()
    {
        return $this->imagem_file;
    }

    /**
     * @param null $imagem_file
     */
    public function setImagemFile($imagem_file)
    {
        $this->imagem_file = $imagem_file;
    }





}

/*  try {
            $p = $this->con->prepare("show tables");
            $p->execute();
            while($ob = $p->fetchObject()) {
                echo "".$ob->Tables_in_gabriel." <br>";
            }
        } catch (Exception $e) {
            echo $e->getMessage(); die();
        } */
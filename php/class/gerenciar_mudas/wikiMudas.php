<?php

namespace base\gerenciar_mudas;

class wikiMudas {

    var $tabela = "wiki_mudas";
    //var $dir_upload = "BASEV2/php/upload/especiesFamilia/";

    var $id = null;

    var $idEspecie = null;
    var $titulo = null;
    var $conteudo = null;


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
        if(!$this->getIdEspecie()) {
            $tmp = "select * from {$this->tabela} order by data_criacao desc";
        } else {
            $tmp = "select * from {$this->tabela} where especie_id = '".$this->getIdEspecie()."' order by data_criacao desc";
        }
            return $tmp;
    }

    public function insertSQL() {

        $tmp = "INSERT INTO {$this->tabela}
                    (especie_id, titulo, conteudo, data_criacao)
                    VALUES
                    ('".$this->getIdEspecie()."', '".$this->getTitulo()."',
                    '".$this->getConteudo()."', NOW());";
        return $tmp;

    }

    public function updateSQL() {

        $tmp = "UPDATE {$this->tabela} SET
                    titulo = '".$this->getTitulo()."',
                    conteudo = '".$this->getConteudo()."'
                    WHERE id = ".$this->getId().";";
        return $tmp;

    }

    public function updateColunaByID($coluna,$novovalor,$id) {

        $tmp = "UPDATE {$this->tabela} SET $coluna = '$novovalor' where id = '$id'";
        return $tmp;

    }

    /**
     * @return null
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * @param null $conteudo
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
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
    public function getIdEspecie()
    {
        return $this->idEspecie;
    }

    /**
     * @param null $idEspecie
     */
    public function setIdEspecie($idEspecie)
    {
        $this->idEspecie = $idEspecie;
    }

    /**
     * @return null
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param null $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }




}

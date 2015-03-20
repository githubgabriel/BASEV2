<?php

namespace base\gerenciar_mudas;

class clientes {

    var $tabela = "clientes";
    //var $dir_upload = "BASEV2/php/upload/especiesFamilia/";

    var $id = null;

    var $nome_completo = null;
    var $email = null;
    var $telefone = null;


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
                    (nome_completo, email, telefone, data_criacao)
                    VALUES
                    ('".$this->getNomeCompleto()."', '".$this->getEmail()."',
                    '".$this->getTelefone()."', NOW())";
        return $tmp;

    }

    public function updateSQL() {

        $tmp = "UPDATE {$this->tabela} SET
                    nome_completo = '".$this->getNomeCompleto()."',
                    email = '".$this->getEmail()."',
                    telefone = '".$this->getTelefone()."'
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
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param null $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return null
     */
    public function getNomeCompleto()
    {
        return $this->nome_completo;
    }

    /**
     * @param null $nome_completo
     */
    public function setNomeCompleto($nome_completo)
    {
        $this->nome_completo = $nome_completo;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
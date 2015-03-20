<?php

namespace base\gerenciar_mudas;

class vendas {

    var $tabela = "vendas";
    //var $dir_upload = "BASEV2/php/upload/especiesFamilia/";

    var $id = null;

    var $cliente_id = null;
    var $especie_id = null;

    var $texto = null;
    var $valor = null;
    var $status = null;

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
                    (cliente_id, texto, valor, status, data_criacao)
                    VALUES
                    ('".$this->getClienteId()."', '".$this->getTexto()."',
                    '".$this->getValor()."','".$this->getStatus()."', NOW())";
        return $tmp;

    }

    public function updateSQL() {

        $tmp = "UPDATE {$this->tabela} SET
                    texto = '".$this->getTexto()."',
                    valor = '".$this->getValor()."',
                    status = '".$this->getStatus()."'
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
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param null $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    /**
     * @return null
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param null $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return null
     */
    public function getClienteId()
    {
        return $this->cliente_id;
    }

    /**
     * @param null $cliente_id
     */
    public function setClienteId($cliente_id)
    {
        $this->cliente_id = $cliente_id;
    }

    /**
     * @return null
     */
    public function getEspecieId()
    {
        return $this->especie_id;
    }

    /**
     * @param null $especie_id
     */
    public function setEspecieId($especie_id)
    {
        $this->especie_id = $especie_id;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
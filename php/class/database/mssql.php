<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 11/11/2014
 * Time: 09:35
 */

namespace base\database;
use base\notify\failure;

class mssql implements dbInterface{

    protected $host;
    protected $user;
    protected $pass;
    protected $banc;
    protected $conn;
    protected $result;

    function __construct($banc, $host, $pass, $user)
    {
        $this->banc = $banc;
        $this->host = $host;
        $this->pass = $pass;
        $this->user = $user;
    }

    private function connect()
    {
        $this->conn = mssql_connect($this->host,$this->user,$this->pass) or die(new failure("FALHA ao conectar com banco de dados"));
        mssql_select_db($this->banc,$this->conn)or die(new failure("FALHA ao selecionar banco de dados"));;
    }

    private function close()
    {
        mssql_close($this->conn);
    }

    public function execute($query)
    {
        $this->clear();
        $this->connect();
        $this->result = mssql_query($query,$this->conn);
        $this->close();
        return $this->result;
    }

    public function executeOnly($query)
    {
        $this->connect();
        mssql_query($query,$this->conn);
        $this->close();
    }

    public function getObject()
    {
        return mssql_fetch_object($this->result);
    }

    public function getObjectByResult($rs)
    {
        return mssql_fetch_object($rs);
    }

    public function getArray()
    {
        return mssql_fetch_array($this->result);

    }

    public function getNumRows()
    {
        return mssql_num_rows($this->result);
    }

    public function clear()
    {
        $this->result = null;
        $this->conn = null;
    }

    public function toArray()
    {
        if(count($this->result)){
            while($dds = $this->getObject())
            {
                $tmp[] = $dds;
            }
        }else{
            $tmp = null;
        }
        return $tmp;
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 11/11/2014
 * Time: 09:35
 */

namespace base\database;

class mysql implements dbInterface{

    protected $host;
    protected $user;
    protected $pass;
    protected $banc;
    protected $conn;
    protected $result;

    function __construct($host, $login, $pass, $banc)
    {

        $this->banc = $banc;
        $this->host = $host;
        $this->pass = $pass;
        $this->user = $login;

    }

    private function connect()
    {
        $this->conn = mysql_connect($this->host,$this->user,$this->pass) or die(mysql_error());
        mysql_select_db($this->banc,$this->conn)or die(mysql_error());
    }

    private function close()
    {
        mysql_close($this->conn);
    }

    public function execute($query)
    {
        $this->clear();
        $this->connect();
        $this->result = mysql_query($query,$this->conn);
        $this->close();
        return $this->result;
    }

    public function executeOnly($query)
    {
        $this->connect();
        mysql_query($query,$this->conn);
        $this->close();
    }

    public function getObject()
    {
        return mysql_fetch_object($this->result);
    }

    public function getObjectByResult($rs)
    {
        return mysql_fetch_object($rs);
    }

    public function getArray()
    {
        return mysql_fetch_array($this->result);

    }

    public function getNumRows()
    {
        return mysql_num_rows($this->result);
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
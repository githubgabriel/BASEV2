<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 11/11/2014
 * Time: 09:35
 */
namespace base\database;
interface dbInterface
{
    function __construct($host, $login, $pass, $banc);
    public function execute($query);
    public function getObject();
    public function getArray();
    public function getNumRows();
    public function clear();
    public function executeOnly($query);
    public function getObjectByResult($rs);
    public function toArray();
}
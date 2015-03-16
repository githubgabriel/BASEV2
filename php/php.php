<?php

/* Autoload class SplClassLoader */
include "autoload.php";

/**
 *  Cria Conexao PDO para acessar Banco de Dados
 */
try {
    $conexao = new PDO("mysql:host=".DATABASE_HOST.";dbname=".DATABASE_DB, DATABASE_LOGIN, DATABASE_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));;
} catch (Exception $e) {
    echo $e->getMessage(); die();
}

/*
Exempla Query PDO

try {
    $p = $conexao->prepare("show tables");
    $p->execute();
    while($ob = $p->fetchObject()) {
        echo "".$ob->Tables_in_gabriel." <br>";
    }
} catch (Exception $e) {
    echo $e->getMessage(); die();
}

*/

/**
 *  Class para Log (Php & Console.log Javascript)
 */
//use base\log\log;
/* Console.log JS */
//log::logJs("teste");



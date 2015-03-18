<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

/**
 *   Configurações Gerais
 */
define("HOST_PROTOCOL", get_SERVER_PROTOCOL()."://");
define("IP_ROOT",$_SERVER['SERVER_ADDR']);
define("HOST_ROOT",$_SERVER['HTTP_HOST']);
define("HOST_ROOT_PATH", dirname($_SERVER["PHP_SELF"]));
define("HOST_ROOT_FULL", HOST_PROTOCOL.HOST_ROOT.HOST_ROOT_PATH);
//define("DIR_SYS","/Users/lucaspasquetto/Sites/sysbase/");

/**
 *   autoload
 */
define("AUTOLOAD_DIR_CLASS", "class");

/**
 *  Conexão com Banco de Dados
 */
if(HOST_ROOT == "localhost:8888" or HOST_ROOT == "localhost") {
    define("DATABASE_HOST","localhost");
    define("DATABASE_LOGIN","root");
    define("DATABASE_PASS","root");
    define("DATABASE_DB","GerenciadorMudas");
} else {

    /* Conexao Online aqui.... */

}
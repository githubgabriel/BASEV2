<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

/**
 *   Configurações Gerais
 */
define("IP_ROOT",$_SERVER['SERVER_ADDR']);
define("HOST_ROOT",$_SERVER['HTTP_HOST']);
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
    define("DATABASE_DB","gabriel");
} else {

    /* Conexao Online aqui.... */

}
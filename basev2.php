<?php
/**
 * Base PHP, Javascript, CSS.
 * @author Gabriel A. Barbosa
 * @access Public
 * @version 1.0.0
 *
 */

/*
    Carrega Configurações Define
*/
include "config.inc.php";

/*
    Função para pegar BASE
*/
function getBaseV2($tipo) {
    $tipo = strtolower($tipo);
    switch($tipo) {
        case "php":
            $tmp = $tipo;
            break;
        case "javascript":
            $tmp = $tipo;
            break;
        case "css":
            $tmp = $tipo;
            break;
        default:
            $tmp = false;
    }
    if($tmp) {
        $arq = $tmp."/$tmp.php";
        if(file_exists($arq))
            { require $arq; }
        else
            { echo "FileExists Failt: $arq"; }
    } else {
        echo "GetRequireBase() > Tipo não existe!";
    }
}

<?php

/**
 * Retorna se a conexão foi feita por HTTP ou HTTPS :)
 * @return mixed
 */
function get_SERVER_PROTOCOL(){
    $tmp = $_SERVER["SERVER_PROTOCOL"];
    $tmp = explode("/", $tmp);
    return strtolower($tmp[0]);
}
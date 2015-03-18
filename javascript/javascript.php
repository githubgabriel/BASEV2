<?php


function getFunctionJS($funcName) {

    $basev2_javascript_dir = HOST_ROOT_FULL."/BASEV2/javascript/functions/";

    if($funcName == "ajax") {

        /* Functions Ajax Javascript */
        echo '<script src="'.$basev2_javascript_dir.'ajax-functions.js"> </script>';

    }
    else { echo "getPluginJS - Error Name Plugin."; }

}

function getPluginJS($pluginName) {

    $basev2_javascript_dir = HOST_ROOT_FULL."/BASEV2/javascript/plugins/";

    if($pluginName == "jquery") {

        /* Jquery 1.11.2 */
        echo '<script src="'.$basev2_javascript_dir.$pluginName.'/jquery-1.11.2.min.js"> </script>';

    } else if($pluginName == "JqueryTE") {

        echo '<link rel="stylesheet" href="'.$basev2_javascript_dir.$pluginName.'/jquery-te-1.4.0.css">';
        echo '<script src="'.$basev2_javascript_dir.$pluginName.'/jquery-te-1.4.0.min.js"> </script>';

    }
    else { echo "getPluginJS - Error Name Plugin."; }

}


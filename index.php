<?php

/* Requerimos el archivo con las constantes de configuración */
require_once("Config/Config.php");
require_once("Helpers/Helpers.php");

/*
* $url definida en el htaccess para trabajar con URL amigables
* Si la variable $url esta vacia asignamos el valor de index/index por defecto
*/
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/index';
/*
* Convertimos la url en array para separar los valores
 contolador / metodo / parametros
*/
$arrUrl = explode("/", $url);
$controller = $arrUrl[0]; // controlador
$method = $arrUrl[0]; // metodo por defecto
$params = ""; // parametros por defecto

/* Si el valor del metodo no esta vacio lo asignamos */
if (!empty($arrUrl[1])) // metodo
{
    if ($arrUrl[1] != "") {
        $method = $arrUrl[1];
    }
}

/* Si el valor de los parametros no esta vacio lo asignamos */
if (!empty($arrUrl[2])) // parametros
{
    if ($arrUrl[2] != "") {
        for ($i = 2; $i < count($arrUrl); $i++) {
            $params .= $arrUrl[$i] . ',';
        }
        $params = trim($params, ','); // elimine la ultima coma de la cadena
    }
}

/* -Load: requerimos el autoload para cargar clases automaticamente */
require_once("Libraries/Core/Autoload.php");
/* -Load: requerimos el load para la comunicación con los controladores */
require_once("Libraries/Core/Load.php");

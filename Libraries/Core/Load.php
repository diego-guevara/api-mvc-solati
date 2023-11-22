<?php

/* -Load: Creamos la comunicación con los controladores */


/*
* controlador recibido:  home
* concatenamos el controlador con la palabra Controller
* controlador de salida: homeController
* cwords: para forzar la primera letra en mayuscula (Algunos hosting la convierten a minuscula 
y no lee el controlador)
*/

$controller=ucwords($controller)."Controller";
$controllerFile = "Controllers/" . $controller . ".php";
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();
    if (method_exists($controller, $method)) {
        $controller->{$method}($params);
    } else {
        
        $respuesta = array('error' => 'Recurso no encontrado', 'mensaje' => 'No existe el metodo '. $method. ' en el controlador');
        echo json_encode($respuesta);
        require_once("Controllers/ErrorController.php");
    }
} else {
    $respuesta = array('error' => 'Recurso no encontrado', 'mensaje' => 'No existe el controlador '.$controller.'');
    echo json_encode($respuesta);
    require_once("Controllers/ErrorController.php");
    
}

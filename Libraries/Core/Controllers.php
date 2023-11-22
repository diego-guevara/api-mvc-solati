<?php

class Controllers
{
    public function __construct()
    {
        $this->views = new Views();
        $this->loadModel();
    }


    /* metodo para cargar los modelos */
    public function loadModel()
    {
        /* Obtenemos la clase del controlador */
        $model=get_class($this);
        $model=str_replace("Controller" ,"", $model); // remplazamos la palabra Controller
        $model=$model."Model"; // asignamos la palabra Model
        $routClass ="Models/".$model.".php";
        if(file_exists($routClass)){
            require_once($routClass);
            $this->model=new $model(); // instancia el modelo
        }
    }
}

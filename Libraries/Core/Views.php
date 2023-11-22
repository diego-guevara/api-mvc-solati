<?php

class Views
{
    function getView($controller,$view,$data=""){
        $controller = get_class($controller);
        if($controller == "HomeController"){
            $view= "Views/".$view.".php";
        }else{
             
            $controller=str_replace("Controller" ,"", $controller);
            $view= "Views/".$controller."/".$view.".php";
        }
        require_once($view);
    }
}


?>
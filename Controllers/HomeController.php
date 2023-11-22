<?php

/* 
la clase HomeController hereda la clase 
Controllers (Libraries/core/Controllers.php) 
*/
 class HomeController extends Controllers {

     public function __construct() {
        parent::__construct();
    }

    public function index($params) {
       
       $data['page_title']="Página Home";
       $data['page_content']="Bienvenido";
       $this->views->getView($this,"home",$data);
    }

    

 }

?>
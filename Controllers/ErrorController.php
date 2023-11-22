<?php

/* 
la clase home hereda la clase 
Controllers (Libraries/core/Controllers.php) 
*/
 class ErrorController extends Controllers {

     public function __construct() {
        parent::__construct();
    }

    public function notFound() {
       $this->views->getView($this,"error");
    }

 }

  $notFound = new ErrorController();
  $notFound->notFound();


?>
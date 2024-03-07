<?php

namespace Server;
use CoffeeCode\Router\Router;

abstract class Start {

   private $dominio;

   public function __construct(){
    $this->dominio = routerConfig();
   }

    protected function Dependencia(){
        $router = new Router($this->dominio);
        return $router;
    }

}
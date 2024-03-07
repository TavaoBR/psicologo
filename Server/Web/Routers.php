<?php 

namespace Server\Web;
use Server\Start;

class Routers extends Start{

    public function get(){
      $router = $this->Dependencia();
      $router->group(null)->namespace("App\Controller");
      
      $router->get("/", "indexController:index");

      $router->group("usuario")->namespace("App\Controller\Usuario");
      $router->get("/", "");
      $router->get("/login", "UsuarioController:login");
      $router->get("/recuperar-conta/{id}", "UsuarioController:recupararConta");
      $router->get("/perfil/{data}", "UsuarioController:perfil");

      $router->group("oops")->namespace("App\Controller\Error");
      $router->get("/{errocode}", "ErrorController:notFound");

      $router->dispatch();

      if($router->error()){
          $router->redirect("/oops/{$router->error()}");
      }
    }

    public function post(){
      $router = $this->Dependencia();
      $router->group("usuario")->namespace("Src\Response\Usuario");
      $router->post("/login", "Login:Data");
      $router->post("/temas/{id}", "Temas:TemaColor");

      $router->group("oops")->namespace("App\Controllers\Error");
      $router->get("/{errocode}", "ErrorController:notFound");

      $router->dispatch();

      if($router->error()){
          $router->redirect("/oops/{$router->error()}");
      }
    }

}
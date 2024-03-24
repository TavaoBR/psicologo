<?php 

namespace Server\Web;
use Server\Start;

class Routers extends Start{

    public function get(){
      $router = $this->Dependencia();
      $router->group(null)->namespace("App\Controller\Usuario");
      $router->get("/", "UsuarioController:login");
      $router->get("/login", "UsuarioController:login");
      $router->get("/sair", "UsuarioController:logout");
      //$router->get("/recuperar-conta/{id}", "UsuarioController:recupararConta");
      $router->get("/perfil/{data}", "UsuarioController:perfil");

      $router->group("pacientes")->namespace("App\Controller\Paciente");
      $router->get("/", "PacienteController:pacientes");
      $router->get("/perfil/{idcpf}", "PacienteController:paciente");
      $router->get("/cadastrar", "PacienteController:cadastrar");
      $router->get("/cadastrar/avatar/{id}", "PacienteController:cadastrarAvatar");
      $router->get("/cadastrar/responsaveis/{id}", "PacienteController:cadastrarResponsaveis");
      $router->get("/cadastrar/anamnese/{id}", "PacienteController:cadastrarAnamnese");
      $router->get("/sessao/criar/{id}", "PacienteController:criarSessao");
      $router->get("/sessao/iniciar/{id}", "PacienteController:sessaoStart");
      $router->get("/sessao/sucesso", "PacienteController:sessaoSucess");

      $router->group("agenda")->namespace("App\Controller\Agenda");
      $router->get("/", "AgendaController:index");
      $router->get("/agendar", "AgendaController:agendar");
      
      $router->group("agendaapi")->namespace("Src\Response\Agenda");
      $router->get("/", "Lista:getAll");

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

      $router->group("pacientes")->namespace("Src\Response\Paciente");
      $router->post("/cadastrar", "Cadastrar:data");
      $router->post("/cadastrar/tirar/foto/avatar/{id}","Avatar:tirarFoto");
      $router->post("/cadastrar/responsaveis/{id}", "CadastrarResponsavel:result");
      $router->post("/cadastrar/anamnese/{id}", "CadastrarAnamnese:result");
      $router->post("/sessao/criar/{id}", "CriarSessao:result");
      $router->post("/sessao/iniciar/{id}", "FimSessao:result");

      $router->group("agenda")->namespace("Src\Response\Agenda");
      $router->post("/agendar", "Cadastrar:result");
      $router->post("/editar", "Editar:test");

      $router->group("oops")->namespace("App\Controllers\Error");
      $router->get("/{errocode}", "ErrorController:notFound");

      $router->dispatch();

      if($router->error()){
          $router->redirect("/oops/{$router->error()}");
      }
    }

}
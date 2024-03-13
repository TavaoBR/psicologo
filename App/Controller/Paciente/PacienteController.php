<?php 

namespace App\Controller\Paciente;

use App\Config\TemplateConfig;

class PacienteController extends  TemplateConfig{

    public function cadastrar(){
        session_start();
        $this->view("paciente/cadastrar", ["title" => "Cadastrar Paciente"]);
    }

    public function pacientes(){
        session_start();
        $this->view("paciente/index", ["title" => "Pacientes"]);
    }

    public function paciente(){
        session_start();
    }

}
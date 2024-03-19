<?php 

namespace App\Controller\Paciente;

use App\Config\TemplateConfig;
use Src\Model\Paciente\Read;

class PacienteController extends  TemplateConfig{

    private $read;
    public function __construct(){
      $this->read = new Read;
    }

    public function cadastrar(){
        session_start();
        $this->view("paciente/cadastro/paciente", ["title" => "Cadastrar Paciente"]);
    }

    public function cadastrarAvatar($data){
        session_start();
        $id = $data['id'];
        $this->view("paciente/cadastro/avatar", ["title" => "Cadastrar Paciente", "id" => $id]);
    }

    public function cadastrarResponsaveis($data){
        session_start();
        $dados = $this->read->PacienteId($data['id']);
        $this->view("paciente/cadastro/responsaveis", ["title" => "Cadastrar Paciente", "conta" => $dados[0], "data" => $dados[1]]);
    }

    public function cadastrarAnamnese($data){
        session_start();
        $dados = $this->read->PacienteId($data['id']);
        $this->view("paciente/cadastro/anamnese", ["title" => "Cadastrar Dados Anamnese","conta" => $dados[0], "data" => $dados[1]]);
    }

    public function pacientes(){
        session_start();
        $this->view("paciente/index", ["title" => "Pacientes"]);
    }

    public function paciente(){
        session_start();
    }

    public function sessaoStart($data){
        session_start();
        $this->view("paciente/sessao/start", ["title" => "Inicar Sessao"]);
    }

}
<?php 

namespace App\Controller\Agenda;

use App\Config\TemplateConfig;
use Src\Model\Agenda\Read;

class AgendaController extends TemplateConfig{

    private $read;
    private $readPaciente;

    public function __construct(){
       $this->read = new Read;
       $this->readPaciente = new \Src\Model\Paciente\Read;
    }

    public function index(){
        session_start();
        $data = $this->readPaciente->Pacientes();
        $this->view("agenda/index", ["title" => "Index", "data" => $data[1]]);
    }

    public function agendar(){
        session_start();
        $data = $this->readPaciente->Pacientes();
        $this->view("agenda/cadastrar", ["title" => "Agendar", "data" => $data[1]]);
    }

}
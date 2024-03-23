<?php 

namespace Src\Response\Agenda;

use Src\Model\Agenda\Create;
use Src\Model\Agenda\Read;
use Src\Services\VariaveisForm;
use Src\Model\Paciente\Read as Paciente;

class Cadastrar extends VariaveisForm{


    private string $cpf;
    private string $data;
    private string $inicio;
    private string $final;
    private $readP;
    private $create;
    private $read;

    public function __construct(){
     $this->cpf = $this->POST('cpf');
     $this->data =  $this->POST('data');
     $this->inicio = $this->POST('inicio');
     $this->final = $this->POST('final');

     $this->read = new Read;
     $this->create = new Create;
     $this->readP = new Paciente;
    }

    public function result(){
        session_start();
        if(!$this->inputsNull() && !$this->verificarAgenda() && !$this->verificaPacienteJaTemAgendaDataAtual()){
           $this->create();
        }
    }

    private function inputsNull(){
        $array = [
            "Paciente/Cpf" => $this->cpf,
            "Data" =>  $this->data,
            "Hora Inicial" => $this->inicio,
            "Hora Final" => $this->final
        ];

        $html = '<ol>';

        $camposBranco = false;
            
         foreach($array as $data => $values){
              if(!isset($values) || empty($values)){
                $camposBranco = true;
                $html .= "
                <li>O CAMPO <strong>'$data'</strong> está em branco. Por favor, preencha esse campo.<br></li>
                ";
              }  
         }

        $html .= "</ol>";

        if($camposBranco){
          setSessions(["CadastrarAgenda"  => messageWarning($html)]);  
          redirectBack();
          return true;
        }

        return false;
    }
    

    private function pegarDadosPaciente(){
       $paciente = $this->readP->PacienteCpf($this->cpf);
       return $paciente[1];  
    }

    private function verificarAgenda(){
        $read = $this->read->DataHoraInicioFinal($this->data, $this->inicio, $this->final);
        if($read > 0){
          setSessions(["CadastrarAgenda"  => sweetAlertWarning("Já existe paciente agendado. Data: $this->data, inicio: $this->inicio e final: $this->final", "Alerta")]);  
          return true;
        } 

        return false;
    }

    private function verificaPacienteJaTemAgendaDataAtual(){
      $data = $this->pegarDadosPaciente();
      $id = $data['id'];
      $read = $this->read->DataAgendaPaciente($id, $this->data);
      
      if($read > 0){
        setSessions(["CadastrarAgenda"  => sweetAlertWarning("Esse paciente já tem um consulta agenda para $this->data", "Paciente")]);  
        redirectBack();
        return true;
      }

      return false;

      
    }

    private function create(){
        $data = $this->pegarDadosPaciente();
        $id = $data['id'];
        $paciente  = $data['nome'];
        $create = $this->create->createAgenda($id, $paciente, $this->data, $this->inicio, $this->final);
        
        if($create > 0){
          setSession("CadastrarAgenda", sweetAlertSuccess("Consulta Agendada com sucesso para $paciente"));
          redirectBack();
        }else{
            setSession("CadastrarAgenda", sweetAlertError("Não foi possivel agendar consulta, tente novamente ou alerte o desenvolvedor"));
            redirectBack();
        }
    }

  
}
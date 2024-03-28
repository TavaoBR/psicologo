<?php 

namespace Src\Response\Agenda;
use Src\Model\Agenda\Read;
use Src\Model\Agenda\Update;
use Src\Services\VariaveisForm;


class Editar extends VariaveisForm{

    private $read;
    private $update;
    private int $id;
    private string $data;
    private string $inicio;
    private string $final;


    public function __construct(){
        $this->id = $this->POST("id");
        $this->data =  $this->POST('data');
        $this->inicio = $this->POST('inicio');
        $this->final = $this->POST('final');

        $this->read = new Read;
        $this->update = new Update;
    }

    public function result(){
         session_start();

         if(!$this->verificarData()){
            $this->verificarDataDiferente();
         }
    }

    private function pegarDadosAgenda(){
      $read = $this->read->getId($this->id);
      return $read[1];
    } 

    private function verificarAgenda(){
    
        $read = $this->read->DataHoraInicioFinal($this->data, $this->inicio, $this->final);
        if($read > 0){
            setSessions(["CadastrarAgenda"  => sweetAlertWarning("Já existe paciente agendado. Data: $this->data, inicio: $this->inicio e final: $this->final", "Alerta")]);  
            redirectBack();
            return true;
          } 

          $this->reagendar();
          return false;
    }

    private function verificarDataDiferente(){
        $dados = $this->pegarDadosAgenda();
        $dataAtual = $dados['dataInicio'];
        $horaIAtual = $dados['dataInicio'];
        
        if($dataAtual != $this->data){
          $this->verificaPacienteJaTemAgendaNaData();
          return true;
        }

        if($horaIAtual == $this->data){
           setSession("CadastrarAgenda", sweetAlertWarning("Escolha uma data ou hora diferente para fazer o reagedamento", "Alerta"));
           redirectBack();
           return true;
        }

        $this->verificarAgenda();
        return false;

    }

    private function verificaPacienteJaTemAgendaNaData(){
        $dados = $this->pegarDadosAgenda();
        $fk = $dados['fk'];

        $read = $this->read->DataAgendaPaciente($fk, $this->data);

        if($read > 0){
            setSessions(["CadastrarAgenda"  => sweetAlertWarning("Esse paciente já tem um consulta agenda para $this->data", "Paciente")]);  
            redirectBack();
            return true;
          }
    
          $this->reagendar();
          return false;
    }

    private function reagendar(){
        $remarcar = $this->update->remarcar($this->id, $this->data, $this->inicio, $this->final);
        $dados = $this->pegarDadosAgenda();
        $nome = $dados['paciente'];

        if($remarcar > 0){
           echo "Sucesso";
          setSession("CadastrarAgenda", sweetAlertSuccess("Consulta Paciente $nome reagendada com sucesso para dia {$this->data} às {$this->inicio}"));
          redirectBack();
        }else{
         echo "Erro"; 
         setSession("CadastrarAgenda", sweetAlertError("Tente novamente, caso persista entre com o suporte"));
         redirectBack();
        }
    }


    private function verificarData(){
        $data = new \Src\Services\Datas;
 
        $dataAtual = $data->dataAtual();
 
        $timestampAtual = strtotime($dataAtual);
        $timestampEscolhido = strtotime($this->data);
 
        if( $timestampEscolhido <  $timestampAtual){
           setSessions(["CadastrarAgenda"  => sweetAlertWarning("A data que você não pode ser menor que Data Atual: $dataAtual", "Alerta")]);
           redirectBack();
           return true;
        }
 
         return false;
     }

    

}
<?php 

namespace Src\Model\Paciente;
use Src\Database\Data\Paciente\Select;

class Read {

    private $select;

    public function __construct(){
      $this->select = new Select;
    } 

    public function Pacientes(){
      $select = $this->select->pacientes();
      return array($select[0], $select[1]);
    }

    public function PacienteCpf(string $cpf){
      $select = $this->select->pacienteCpf($cpf);
      return array($select[0], $select[1]);
    } 

    public function PacienteId(int $id){
      $select = $this->select->pacienteId($id);
      return array($select[0], $select[1]);
    } 
    
    public function fichaAnamnese(int $fk){
      $select = $this->select->fichaAnamnesePaciente($fk);
      return array($select[0], $select[1]);
    }  

    public function ultimaSessaoPaciente(int $fk){
       $select = $this->select->ultimaSessaoPaciente($fk);
       return array($select[0], $select[1]);
    }

    public function sessoesPaciente(int $fk){
      $select = $this->select->sessoesPaciente($fk);
      return array($select[0], $select[1]);
    }

    public function sessao(int $id){
      $select = $this->select->Sessao($id);
      return array($select[0], $select[1]);
    }

    public function SessaoPacienteDataAtual(int $fk, string $data){
        $select = $this->select->SessaoPacienteDataAtual($fk, $data);
        return $select;
    }

    public function responsavelPaciente(int $fk){
      $select = $this->select->responsavlPaciente($fk);
      return array($select[0], $select[1]);
    }
}
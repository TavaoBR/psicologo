<?php 

namespace Src\Model\Paciente;
use Src\Database\Data\Paciente\Select;

class Read {

    private $select;

    public function __construct(){
      $this->select = new Select;
    } 

    public function PacienteCpf(string $cpf){
      $select = $this->select->pacienteCpf($cpf);
      return array($select[0], $select[1]);
    } 

    public function PacienteId(int $id){
      $select = $this->select->pacienteId($id);
      return array($select[0], $select[1]);
    } 

}
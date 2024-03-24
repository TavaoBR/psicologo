<?php 

namespace Src\Model\Agenda;
use Src\Database\Data\Agenda\Select;

class Read {

    private $select;

    public function __construct(){
        $this->select = new Select;
    }

    public function list(){
      $select = $this->select->agenda();
      return array($select[0], $select[1]);
    }

    public function getId(int $id){
      $select = $this->select->id($id);
      return array($select[0], $select[1]);
    }

    public function DataHoraInicioFinal(string $data, string $horaIncial, string $horaFinal){
       return $this->select->DataHoraInicioFinal($data, $horaIncial, $horaFinal);
    }

    public function DataAgendaPaciente(int $fk, string $data){
       return $this->select->DataAgendaPaciente($fk, $data);
    }
}
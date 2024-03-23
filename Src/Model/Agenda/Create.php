<?php 

namespace Src\Model\Agenda;
use Src\Database\Data\Agenda\Insert;

class Create {
 
    private $insert;

    public function __construct(){
        $this->insert = new Insert;
    }

    public function createAgenda(int $fk, string $paciente, string $data, string $horaInicio, string $horaFinal){
       return $this->insert->inserirAgenda($fk, $paciente, $data, $horaInicio, $horaFinal);
    }
}
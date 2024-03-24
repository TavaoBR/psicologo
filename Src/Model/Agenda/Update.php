<?php 

namespace Src\Model\Agenda;
use Src\Database\Data\Agenda\Update as Up;
class Update {


    private $up;

    public function __construct(){
        $this->up = new Up;
    }


    public function remarcar(int $id, string $data, string $inicio, string $fim){
       return $this->up->remarcarConsulta($id, $data, $inicio, $fim);
    }

}
<?php 

namespace Src\Model\Paciente;
use Src\Database\Data\Paciente\Update as UpdatePaciente;

class Update {
    
    private $update;

    public function __construct(){
     $this->update = new UpdatePaciente;
    }

    public function attAvatar(int $id, string $avatar){
       $this->update->avatar($id, $avatar); 
    }
}
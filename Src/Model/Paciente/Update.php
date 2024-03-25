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

    public function attArquivoEnviadoAvatar(int $id, string $avatar){
      return $this->update->Envioavatar($id, $avatar); 
   }

    public function atualizarSessaoDados(int $id, string $anotacao, string $horaInicial, string $horaFinal, string $cronometro){
       $update = $this->update->atualizarSessao($id, $anotacao, $horaInicial, $horaFinal, $cronometro);
       return $update;
    }
}
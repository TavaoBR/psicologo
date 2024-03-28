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
      return  $this->update->atualizarSessao($id, $anotacao, $horaInicial, $horaFinal, $cronometro);
        
    }

    public function atualizarDadosPaciente(int $id, string $cpf, string $nome, string $data, string $idade, string $cep, string $uf, string $cidade, string $bairro, string $endereco, string $celular, string $email){
       return $this->update->atualizarPaciente($id,  $cpf,  $nome,  $data,  $idade,  $cep,  $uf,  $cidade,  $bairro,  $endereco,  $celular,  $email);
    }
}
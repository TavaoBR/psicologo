<?php

namespace Src\Model\Usuario;
use Src\Database\Data\Usuario\Update as DataUpdate;

class Update {
    
    private $update;

    public function __construct(){
       $this->update = new DataUpdate;
    }

    public function updateTentativasLogin(int $id){
       $this->update->TentatativasLogin($id);
    }

    public function resetarTentativasLogin(int $id){
       $this->update->ResetarTentativasLogin($id);
    }

    public function temaColor(int $id, string $tema){
      $this->update->TemaColor($id, $tema);
    }

    public function updateToken(int $id, string $token){
      $this->update->UpdateToken($id, $token);
    }

}
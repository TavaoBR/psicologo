<?php 

namespace Src\Services;
use Src\Model\Usuario\Read;
use Src\Model\Usuario\Update;

class TokenUser {
  
    private $readUser;
    private $updateUser;
    private int $id;

    public function __construct(int $id){
        $this->readUser = new Read;
        $this->updateUser = new Update;
        $this->id = $id;
    }

    private function verificaTokenExiste(){
        $token = $this->gerarToken();
        return $this->readUser->userToken($token);
    }

    private function verificaseUsuarioTokenExiste(){
        return $this->readUser->userId($this->id);
    }

    private function gerarToken(){
        $uuid = bin2hex(random_bytes(16));
        $token = sprintf(
            "%s-%s-%s-%s-%s",
            substr($uuid, 0, 8),
            substr($uuid, 8, 4),
            substr($uuid, 12, 4),
            substr($uuid, 16, 4),
            substr($uuid, 20)
        );

        return $token;
    } 

    private function atualizarToken(){
        $token = $this->gerarToken();
        $this->updateUser->updateToken($this->id, $token);
    }

    public function token(){
       if($this->verificaTokenExiste()[0] == 0 && $this->verificaseUsuarioTokenExiste()[1]['token'] == ""){
          $this->atualizarToken();
       }
    }

}
<?php

namespace Src\Model\Usuario;
use Src\Database\Data\Usuario\Select;

class Read {

    private $userDb;

    public function __construct(){
        $this->userDb = new Select;
    }

    public function usuario(string $user){
      $select = $this->userDb->usuario($user);
      return array($select[0], $select[1]);
    }

    public function userToken(string $token){
      $select = $this->userDb->userToken($token);
      return array($select[0], $select[1]);
    }

    public function userId(string $id){
      $select = $this->userDb->userId($id);
      return array($select[0], $select[1]);
    }
    
}
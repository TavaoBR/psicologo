<?php 

namespace Src\Database\Migrations;

 class Usuario {

    private string $variable;

    public function __construct(string $variable){
      $this->variable = $variable;
    }

    public function userTable(){
        return "{$this->variable} usuario";
    }

    public function peopleTable(){
       return "{$this->variable} pessoa"; 
    }

    public function twoFactTable(){
      return "{$this->variable} codigoDoisFatores";
    }

}
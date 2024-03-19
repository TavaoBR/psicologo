<?php 

namespace Src\Database\Migrations;

class Paciente {

    private string $variTable;

    public function __construct(string $variTable){
      $this->variTable = $variTable;
    }

    public function pacienteTable(){
        return "{$this->variTable} paciente";
    }

    public function responsavelTable(){
      return "{$this->variTable} responsaveis"; 
    }

    public function anamneseTable(){
      return "{$this->variTable} anamnese";
    }

    


}
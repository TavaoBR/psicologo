<?php 

namespace Src\Database\Migrations;

class Agenda {
    private string $variTable;

    public function __construct(string $variTable){
      $this->variTable = $variTable;
    }
    
    public function agendaTable(){
        return "{$this->variTable} agenda";
    }
}
<?php 

namespace Src\Database\Data\Agenda;
use Src\Database\Migrations\Agenda;
use Src\Database\Config\Database;

class Update {
    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Agenda("UPDATE");
    }
}
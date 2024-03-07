<?php

namespace Src\Database\Data\Usuario;
use Src\Database\Config\Database;
use Src\Database\Migrations\Usuario;

class Insert {
    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Usuario("SELECT * FROM");
    }
}
<?php

namespace Src\Database\Data\Paciente;
use Src\Database\Migrations\Paciente;
use Src\Database\Config\Database;
class Update {

    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Paciente("UPDATE");
    }

    public function avatar(int $id, string $avatar):void{
       $update = "{$this->migration->pacienteTable()} SET avatar = :avatar WHERE id = :id";
       $query = $this->db->getConnection()->prepare($update);
       $query->bindParam(":avatar", $avatar);
       $query->bindParam(":id", $id);
       $query->execute();
    }
}
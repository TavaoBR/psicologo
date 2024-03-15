<?php

namespace Src\Database\Data\Paciente;
use Src\Database\Migrations\Paciente;
use Src\Database\Config\Database;
class Select {

    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Paciente("SELECT * FROM");
    }

    public function pacienteCpf(string $cpf){
        $select = "{$this->migration->pacienteTable()} WHERE cpf = :cpf";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":cpf", $cpf);
        $query->execute();
        $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
        return $data;
    }

    public function pacienteId(int $id){
        $select = "{$this->migration->pacienteTable()} WHERE id = :id";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":id", $id);
        $query->execute();
        $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
        return $data;
    }
}
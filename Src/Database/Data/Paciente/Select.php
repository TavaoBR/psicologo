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

    public function pacientes(){
        $select = "{$this->migration->pacienteTable()} ORDER BY nome ASC";
        $query = $this->db->getConnection()->prepare($select);
        $query->execute();
        $data = array($query->rowCount(), $query->fetchAll());
        return $data;
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

    public function fichaAnamnesePaciente(int $fk){
       $select = "{$this->migration->anamneseTable()} WHERE fk = :fk";
       $query = $this->db->getConnection()->prepare($select);
       $query->bindParam(":fk", $fk);
       $query->execute();
       $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
       return $data;
    }

    public function ultimaSessaoPaciente(int $fk){
        $select = "{$this->migration->sessaoTable()} WHERE fk = :fk ORDER BY id DESC LIMIT 1";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":fk", $fk);
        $query->execute();
        $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
        return $data;
    }

    public function sessoesPaciente(int $fk){
        $select = "{$this->migration->sessaoTable()} WHERE fk = :fk ORDER BY id DESC ";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":fk", $fk);
        $query->execute();
        $data = array($query->rowCount(), $query->fetchAll());
        return $data;
    }

    public function Sessao(int $id){
        $select = "{$this->migration->sessaoTable()} WHERE id = :id ORDER BY id DESC ";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":id", $id);
        $query->execute();
        $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
        return $data;
    }

    public function SessaoPacienteDataAtual(int $fk, string $data){
        $select = "{$this->migration->sessaoTable()} WHERE fk = :fk AND data = :data";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":fk", $fk);
        $query->bindParam(":data", $data);
        $query->execute();
        return $query->rowCount();
    }

    public function responsavlPaciente(int $fk){
        $select = "{$this->migration->responsavelTable()} WHERE fk = :fk ORDER BY nome ASC";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":fk", $fk);
        $query->execute();
        $data = array($query->rowCount(), $query->fetchAll());
        return $data;
    }
}
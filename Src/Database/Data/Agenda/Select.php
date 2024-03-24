<?php 

namespace Src\Database\Data\Agenda;
use Src\Database\Migrations\Agenda;
use Src\Database\Config\Database;

class Select {
    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Agenda("SELECT * FROM");
    }

    public function agenda(){
        $select = "{$this->migration->agendaTable()}";
        $query = $this->db->getConnection()->prepare($select);
        $query->execute();
        $data = array($query->rowCount(), $query->fetchAll());
        return $data;
    }

    public function id(int $id){
        $select = "{$this->migration->agendaTable()} WHERE id = :id";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":id", $id);
        $query->execute();
        $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
        return $data;
    }

    public function DataHoraInicioFinal(string $data, string $horaIncial, string $horaFinal){
        $select = "{$this->migration->agendaTable()} WHERE dataInicio = :data AND horaInicio = :inicio AND horaFim = :final";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":data", $data);
        $query->bindParam(":inicio", $horaIncial);
        $query->bindParam(":final", $horaFinal);
        $query->execute();
        return $query->rowCount();
    }

    public function DataAgendaPaciente(int $fk, string $data){
        $select = "{$this->migration->agendaTable()} WHERE dataInicio = :data AND fk = :fk";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":data", $data);
        $query->bindParam(":fk", $fk);
        $query->execute();
        return $query->rowCount();
    }
}
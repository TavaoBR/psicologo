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

    public function remarcar(int $id, string $data, string $inicio, string $fim){
        $update = "{$this->migration->agendaTable()} SET dataInicio = :dInicio, horaInicio = :hInicio, dataFim = :dFim, horaFim = :hFim WHERE id = :id";
        $query = $this->db->getConnection()->prepare($update);
        $query->bindParam(":id", $id);
        $query->bindParam(":dInicio", $data);
        $query->bindParam(":hInicio", $inicio);
        $query->bindParam(":dFim", $data);
        $query->bindParam(":hFim", $fim);
        $query->execute();
        return $query->rowCount();
    }
}
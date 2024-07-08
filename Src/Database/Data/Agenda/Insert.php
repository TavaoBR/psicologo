<?php 

namespace Src\Database\Data\Agenda;
use Src\Database\Migrations\Agenda;
use Src\Database\Config\Database;

class Insert {
    private $db;
    private $migration;

    public function __construct(){
        $this->db = Database::connect();
        $this->migration = new Agenda("INSERT INTO");
    }

    public function inserirAgenda(int $fk, string $paciente, string $data, string $horaInicio, string $horaFinal){

        $insert = "{$this->migration->agendaTable()} (fk, paciente, dataInicio, horaInicio, dataFim, horaFim) VALUES(:fk, :p, :dataI, :inicio, :dataF, :final ) ";
        $query = $this->db->prepare($insert);
        $query->bindParam(":fk", $fk);
        $query->bindParam(":p", $paciente);
        $query->bindParam(":dataI", $data);
        $query->bindParam(":inicio", $horaInicio);
        $query->bindParam(":final", $horaFinal);
        $query->bindParam(":dataF", $data);
        $query->execute();
        return $query->rowCount();

    }
}
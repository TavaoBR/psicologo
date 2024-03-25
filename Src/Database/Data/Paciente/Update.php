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

    public function Envioavatar(int $id, string $avatar){
      $update = "{$this->migration->pacienteTable()} SET avatar = :avatar WHERE id = :id";
      $query = $this->db->getConnection()->prepare($update);
      $query->bindParam(":avatar", $avatar);
      $query->bindParam(":id", $id);
      $query->execute();
      return $query->rowCount();
   }

    public function atualizarSessao(int $id, string $anotacao, string $horaInicial, string $horaFinal, string $cronometro){
      $update = "{$this->migration->sessaoTable()} SET horaInicio = :inicio, horaFinal = :final, cronometro = :cronometro, anotacao = :anotacao WHERE id = :id";
      $query = $this->db->getConnection()->prepare($update);
      $query->bindParam(":id", $id);
      $query->bindParam(":inicio", $horaInicial);
      $query->bindParam(":final", $horaFinal);
      $query->bindParam(":cronometro", $cronometro);
      $query->bindParam(":anotacao", $anotacao);
      $query->execute();
      return $query->rowCount();
    }
}
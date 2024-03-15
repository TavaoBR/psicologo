<?php 

namespace Src\Database\Data\Usuario;
use Src\Database\Config\Database;
use Src\Database\Migrations\Usuario;

class Select {

    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Usuario("SELECT * FROM");
    }

    public function usuario(string $user){
       $select = "{$this->migration->userTable()} WHERE usuario = :usuario";
       $query = $this->db->getConnection()->prepare($select);
       $query->bindParam(":usuario", $user);
       $query->execute();
       $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
       return $data;
    }
    
    public function userToken(string $token){
        $select = "{$this->migration->userTable()} WHERE token = :token";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":token", $token);
        $query->execute();
        $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
        return $data;
    }

    public function userId(int $id){
        $select = "{$this->migration->userTable()} WHERE id = :id";
        $query = $this->db->getConnection()->prepare($select);
        $query->bindParam(":id", $id);
        $query->execute();
        $data = array($query->rowCount(), $query->fetch(\PDO::FETCH_ASSOC));
        return $data;
    }

    public function usuarios(){
        $select = "SELECT * FROM {$this->migration->userTable()}";
    }




}
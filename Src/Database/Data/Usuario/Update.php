<?php 

namespace Src\Database\Data\Usuario;
use Src\Database\Config\Database;
use Src\Database\Migrations\Usuario;
class Update {

    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Usuario("UPDATE");
    }

    

    public function TentatativasLogin(int $id):void{
        $update = "{$this->migration->userTable()} SET tentativasLogin = tentativasLogin + 1 WHERE id = :id";
        $query = $this->db->getConnection()->prepare($update);
        $query->bindParam(":id", $id);
        $query->execute();
    }

    public function ResetarTentativasLogin(int $id):void{
        $update = "{$this->migration->userTable()} SET tentativasLogin = 1 WHERE id = :id";
        $query = $this->db->getConnection()->prepare($update);
        $query->bindParam(":id", $id);
        $query->execute();
    }

    public function TemaColor(int $id, string $tema){
        $update = "{$this->migration->userTable()} SET tema = :tema WHERE id = :id";
        $query = $this->db->getConnection()->prepare($update);
        $query->bindParam(":id", $id);
        $query->bindParam(":tema", $tema);
        $query->execute();
        return $query->rowCount();
    }
    
    public function UpdateToken(int $id, string $token):void{
        $update = "{$this->migration->userTable()} SET token = :token WHERE id = :id";
        $query = $this->db->getConnection()->prepare($update);
        $query->bindParam(":id", $id);
        $query->bindParam(":token", $token);
        $query->execute();
    }

}
<?php 

namespace Src\Database\Config;

use PDO;
use PDOException;

class Database extends ConfigDatabase{
 
    protected $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("{$this->db()}:host={$this->host()};port={$this->port()};dbname={$this->dbname()}", $this->user(), $this->password());
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
    
}
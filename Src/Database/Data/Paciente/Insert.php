<?php

namespace Src\Database\Data\Paciente;
use Src\Database\Migrations\Paciente;
use Src\Database\Config\Database;
class Insert{

    private $db;
    private $migration;

    public function __construct(){
        $this->db = new Database;
        $this->migration = new Paciente("INSERT INTO");
    }

    public function inserirPaciente(string $cpf, string $nome, string $data, string $idade, string $cep, string $uf, string $cidade, string $bairro, string $endereco, string $celular, string $email){
          $insert = "{$this->migration->pacienteTable()} (cpf, nome, dataNasc, idade, cep, estado, cidade, bairro, endereco, celular, email) 
          VALUES (:cpf, :nome, :data, :idade, :cep, :estado, :cidade, :bairro, :endereco, :celular, :email)";
          $query = $this->db->getConnection()->prepare($insert);
          $query->bindParam(":cpf", $cpf);
          $query->bindParam(":nome", $nome);
          $query->bindParam(":data", $data);
          $query->bindParam(":idade", $idade);
          $query->bindParam(":cep", $cep);
          $query->bindParam(":estado", $uf);
          $query->bindParam(":cidade", $cidade);
          $query->bindParam(":bairro", $bairro);
          $query->bindParam(":endereco", $endereco);
          $query->bindParam(":celular", $celular);
          $query->bindParam(":email", $email);
          $query->execute();
          return $query->rowCount();
    }

}
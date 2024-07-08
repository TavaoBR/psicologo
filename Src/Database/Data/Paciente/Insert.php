<?php

namespace Src\Database\Data\Paciente;
use Src\Database\Migrations\Paciente;
use Src\Database\Config\Database;
class Insert{

    private $db;
    private $migration;

    public function __construct(){
        $this->db = Database::connect();
        $this->migration = new Paciente("INSERT INTO");
    }

    public function inserirPaciente(string $cpf, string $nome, string $data, string $idade, string $cep, string $uf, string $cidade, string $bairro, string $endereco, string $celular, string $email){
          
          $insert = "{$this->migration->pacienteTable()} (cpf, nome, dataNasc, idade, cep, estado, cidade, bairro, endereco, celular, email) 
          VALUES (:cpf, :nome, :data, :idade, :cep, :estado, :cidade, :bairro, :endereco, :celular, :email)";
          $query = $this->db->prepare($insert);
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


    public function inserirResponsavel(int $id, string $nome, string $responsavel, string $celular){
       
       $insert = "{$this->migration->responsavelTable()} (fk, responsavel, nome, celular) 
       VALUES (:fk, :responsavel, :nome, :celular)";
       $query = $this->db->prepare($insert);
       $query->bindParam(":fk", $id);
       $query->bindParam(":responsavel", $responsavel);
       $query->bindParam(":nome", $nome);
       $query->bindParam(":celular", $celular);
       $query->execute();
       return $query->rowCount();
    } 

    public function inserirAnamnese(int $id, string $motivo, string $historico, string $impacto, string $infancia, string $expectativas){
      $insert = "{$this->migration->anamneseTable()} (fk, motivo, historico, impacto, infancia, expectativas) 
      VALUES (:fk, :motivo, :historico ,:impacto, :infancia, :expectativas)";
      $query = $this->db->prepare($insert);
      $query->bindParam(":fk", $id);
      $query->bindParam(":motivo", $motivo);
      $query->bindParam(":historico", $historico);
      $query->bindParam(":impacto", $impacto);
      $query->bindParam(":infancia", $infancia);
      $query->bindParam(":expectativas", $expectativas);
      $query->execute();
      return $query->rowCount();
    }

    public function inserirSessao(int $fk, string $data){
       $insert = "{$this->migration->sessaoTable()} (fk, data) 
       VALUES(:fk, :data)";
       $query = $this->db->prepare($insert);
       $query->bindParam(":fk", $fk);
       $query->bindParam(":data", $data);
       $query->execute();
       return $query->rowCount();
    }

}
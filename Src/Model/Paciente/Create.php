<?php 

namespace Src\Model\Paciente;
use Src\Database\Data\Paciente\Insert;

class Create {

    private $insert;

    public function __construct(){
       $this->insert = new Insert;
    }
 
    public function createPaciente(string $cpf, string $nome, string $data, string $idade, string $cep, string $uf, string $cidade, string $bairro, string $endereco, string $celular, string $email){
       $insert = $this->insert->inserirPaciente( $cpf,  $nome,  $data,  $idade,  $cep,  $uf,  $cidade,  $bairro,  $endereco,  $celular,  $email);  
       return $insert;
    }




}
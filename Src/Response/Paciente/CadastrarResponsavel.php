<?php 

namespace Src\Response\Paciente;
use Src\Model\Paciente\Create;

class CadastrarResponsavel {

    private string $nome;
    private string $responsavel;
    private string $celular;
    private $create;

    public function __construct(){

        $this->nome = $_POST['nome'];
        $this->responsavel= $_POST['responsavel'];
        $this->celular = $_POST['celular'];
        $this->create = new Create;
    }

    public function result($data){
       
    }

    private function allNull(){

    }

    private function nomeNull(){

    }

    private function responsavelNull(){

    }

    private function celularNull(){

    }

    private function inserir(int $id){

       if($this->create->createResponsavel($id, $this->nome, $this->responsavel, $this->celular) > 0){
         
       }else{

       }
    }

}
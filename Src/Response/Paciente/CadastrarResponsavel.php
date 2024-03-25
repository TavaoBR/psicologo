<?php 

namespace Src\Response\Paciente;
use Src\Model\Paciente\Create;
use Src\Services\VariaveisForm;

class CadastrarResponsavel extends VariaveisForm{

    private string $nome;
    private string $responsavel;
    private string $celular;
    private $create;

    public function __construct(){

        $this->nome = $this->POST('nome');
        $this->responsavel= $this->POST('responsavel');
        $this->celular = $this->POST('celular');
        $this->create = new Create;
    }

    public function result($data){
       session_start();
       if(!$this->allNull() && !$this->nomeNull() && !$this->responsavelNull() && !$this->celularNull()){
         $id = $data['id'];
         $this->inserir($id);
       }
    }

    private function allNull(){
        if($this->nome == "" && $this->responsavel == "" && $this->celular == ""){
          setSession("CadastrarResponsavel", sweetAlertWarning("Preencha todos os campos")); 
          redirectBack();
          return true;
        }
    
          return false;
    }

    private function nomeNull(){
        if($this->nome == "" ){
            setSession("CadastrarResponsavel", sweetAlertWarning("Coloque o nome")); 
            redirectBack();
            return true;
          }
      
            return false;
    }

    private function responsavelNull(){
        if($this->responsavel == "" ){
            setSession("CadastrarResponsavel", sweetAlertWarning("Selecione o grau do responsavel")); 
            redirectBack();
            return true;
          }
      
            return false;
    }

    private function celularNull(){
        if($this->celular == ""){
            setSession("CadastrarResponsavel", sweetAlertWarning("Preencha todos os campos")); 
            redirectBack();
            return true;
          }
      
            return false;
    }

    private function inserir(int $id){

       if($this->create->createResponsavel($id, $this->nome, $this->responsavel, $this->celular) > 0){
        setSession("CadastrarResponsavel", sweetAlertSuccess("Responsavel adicionado com sucesso"));  
        redirectBack();  
       }else{
        setSession("CadastrarResponsavel", sweetAlertError("Erro ao cadastrar, tente novamente, caso erro persiste, entre em contato com o suporte")); 
        redirectBack();
       }
    }

}
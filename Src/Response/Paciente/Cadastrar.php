<?php 

namespace Src\Response\Paciente;

class Cadastrar {

    private string $nome;
    private string $dataNasc;
    private int $idade;
    private string $email;
    private string $celular;
    private string $cep;
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $endereco;

    public function __construct(){
       $this->nome = $_POST['nome'];
       $this->dataNasc = $_POST['dataNasc'];
       $this->idade = $_POST['idade'];
       $this->email = $_POST['email'];
       $this->celular = $_POST['celular'];
       $this->cep = $_POST['cep'];
       $this->estado = $_POST['uf'];
       $this->cidade = $_POST['cidade'];
       $this->bairro = $_POST['bairro'];
       $this->endereco = $_POST['endereco'];    
    } 

    public function data(){
       session_start();
       if(!$this->allNull() && !$this->nomeNull() && !$this->dataNascNull() && !$this->emailNull() && !$this->celularNull() &&
        !$this->cepNull() && !$this->idadeNull() && !$this->estadoNull() && !$this->cidadeNull() && !$this->bairroNull() && !$this->enderecoNull()){

       }
    }

    private function allNull(){
        if($this->nome == "" && $this->dataNasc == "" && $this->idade == 0 && $this->email == "" && 
          $this->celular == "" && $this->cep == "" && $this->estado == "" && $this->cidade == "" && $this->bairro == "" && $this->endereco == ""){
          setSession("CadastroPaciente", sweetAlertWarning("Preencha todos os campos"));
          redirectBack();
          return true;
       } 
       return false;      
    }

    private function nomeNull(){
      if($this->nome == ""){
         setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Nome"), 
          "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
          "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
          "bairro" => $this->bairro, "endereco" => $this->endereco
        ]);
        redirectBack();
        return true;
      }

      return false;
    }

    private function dataNascNull(){
        if($this->dataNasc == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Coloque a Data de Nascimento"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function idadeNull(){
        if($this->idade == 0){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Coloque a Idade"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function emailNull(){
        if($this->email == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o email"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function celularNull(){
        if($this->celular == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Celular"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function cepNull(){
        if($this->cep == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Cep"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function estadoNull(){
        if($this->estado == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Estado"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function cidadeNull(){
        if($this->cidade == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Cidade"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function bairroNull(){
        if($this->bairro == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Bairro"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function enderecoNull(){
        if($this->endereco == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Endereco"), 
             "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

}
<?php 

namespace Src\Response\Paciente;
class Cadastrar {

    private string $cpf;
    private string $nome;
    private string $dataNasc;
    private string $idade;
    private string $email;
    private string $celular;
    private string $cep;
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $endereco;

    public function __construct(){
       $this->cpf = $_POST['cpf'];
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
       if(!$this->allNull() && !$this->cpfNull() && !$this->nomeNull() && !$this->dataNascNull() && !$this->emailNull() && !$this->celularNull() &&
        !$this->cepNull() && !$this->idadeNull() && !$this->estadoNull() && !$this->cidadeNull() && !$this->bairroNull() && !$this->enderecoNull() && !$this->verificarCpfDigitado()){
          $this->verificarCpfExiste();
       }
    }

    private function allNull(){
        if($this->cpf == "" && $this->nome == "" && $this->dataNasc == "" && $this->idade == "" && $this->email == "" && 
          $this->celular == "" && $this->cep == "" && $this->estado == "" && $this->cidade == "" && $this->bairro == "" && $this->endereco == ""){
          setSession("CadastroPaciente", sweetAlertWarning("Preencha todos os campos"));
          redirectBack();
          return true;
       } 
       return false;      
    }

    private function cpfNull(){
      if($this->cpf == ""){
        setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Cpf"), 
         "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
         "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
         "bairro" => $this->bairro, "endereco" => $this->endereco
       ]);
       redirectBack();
       return true;
     }

     return false;
    }

    private function nomeNull(){
      if($this->nome == ""){
         setSessions(["CadastroPaciente" => sweetAlertWarning("Preencha o campo Nome"), 
         "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function idadeNull(){
        if($this->idade == ""){
            setSessions(["CadastroPaciente" => sweetAlertWarning("Coloque a Idade"), 
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
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
            "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
             "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
             "bairro" => $this->bairro, "endereco" => $this->endereco
           ]);
           redirectBack();
           return true;
         }
   
         return false;
    }

    private function verificarCpfDigitado(){
      $instacia = new \Src\Services\Cpf;

      if($instacia->validarCpf($this->cpf) === false){
        setSessions(["CadastroPaciente" => sweetAlertWarning("Invalido", "Cpf: {$this->cpf}"), 
         "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
         "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
         "bairro" => $this->bairro, "endereco" => $this->endereco
       ]);
       redirectBack();
        return true;
      }

      return false;
    }

    private function verificarCpfExiste(){
      $instacia = new \Src\Model\Paciente\Read;

        if($instacia->PacienteCpf($this->cpf)[0] > 0){
          setSessions(["CadastroPaciente" => sweetAlertWarning("Já cadastrado", "Cpf: {$this->cpf}"), 
          "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
          "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
          "bairro" => $this->bairro, "endereco" => $this->endereco
        ]);
        redirectBack();
      }
       
      return $this->inserirDados();
  }

    private function inserirDados(){
       
       $instacia = new \Src\Model\Paciente\Create;
       $create = $instacia->createPaciente($this->cpf, $this->nome, $this->dataNasc, $this->idade, $this->cep, 
       $this->estado, $this->cidade, $this->bairro, $this->endereco, $this->celular, $this->email);

       if($create > 0){
        $read = new \Src\Model\Paciente\Read;
        $data = $read->PacienteCpf($this->cpf)[1];
        $id = $data['id'];
        redirect(routerConfig()."/pacientes/cadastrar/avatar/$id");
       }else{
        setSessions(["CadastroPaciente" => sweetAlertError("Não foi possivel cadastrar o paciente, entre em contato com o desenvolvedor"), 
        "cpf" => $this->cpf, "nome" => $this->nome, "data" => $this->dataNasc, "idade" => $this->idade, "email" => $this->email,
         "celular" => $this->celular, "cep" => $this->cep, "uf" => $this->estado, "cidade" => $this->cidade,
         "bairro" => $this->bairro, "endereco" => $this->endereco
       ]);
       redirectBack();
       }
    } 

}
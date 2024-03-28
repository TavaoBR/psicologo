<?php 

namespace Src\Response\Paciente;
use Src\Services\VariaveisForm;
class EditarPaciente extends VariaveisForm{
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
        $this->cpf = $this->POST('cpf');
        $this->nome = $this->POST('nome');
        $this->dataNasc = $this->POST('dataNasc');
        $this->idade = $this->POST('idade');
        $this->email = $this->POST('email');
        $this->celular = $this->POST('celular');
        $this->cep = $this->POST('cep');
        $this->estado = $this->POST('uf');
        $this->cidade = $this->POST('cidade');
        $this->bairro = $this->POST('bairro');
        $this->endereco = $this->POST('endereco');    
     } 


     public function result($data){
       session_start();
       $id = $data['id'];

       if(!$this->verificarCpfDigitado() && !$this->verificarCpfExiste($id)){
          $this->update($id);
       }

     }

     private function verificarCpfExiste(int $id){
          $instacia = new \Src\Model\Paciente\Read;
          
          $comparar = $instacia->PacienteId($id)[1];

          if($comparar['cpf'] != $this->cpf){
            
            if($instacia->PacienteCpf($this->cpf)[0] > 0){
              setSessions(["EditarPaciente" => sweetAlertWarning("Já cadastrado", "Cpf: {$this->cpf}")]);
              redirectBack();
              return true;
            }
 
          }

          return false;
         
    }


    private function verificarCpfDigitado(){
        $instacia = new \Src\Services\Cpf;
  
        if($instacia->validarCpf($this->cpf) === false){
          setSessions(["EditarPaciente" => sweetAlertWarning("Invalido", "Cpf: {$this->cpf}")]);
          redirectBack();
          return true;
        }
  
        return false;
      }


      private function update(int $id){

         $update = new \Src\Model\Paciente\Update;

         if($update->atualizarDadosPaciente($id,$this->cpf, $this->nome, $this->dataNasc, $this->idade, $this->cep, $this->estado, $this->cidade, $this->bairro, $this->endereco, $this->celular, $this->email) > 0){
          setSession("EditarPaciente", sweetAlertSuccess("Dados editados com sucesso"));
          redirectBack();
         }else{
          setSession("EditarPaciente", sweetAlertError("Tente novamente, caso persista o erro, entre em contato com o suporte"));
          redirectBack();
         }
      }
}
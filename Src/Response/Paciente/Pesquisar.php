<?php 

namespace Src\Response\Paciente;
use Src\Services\VariaveisForm;
use Src\Model\Paciente\Read;

class Pesquisar extends VariaveisForm{
    private string $cpf;
    private $read;

    public function __construct(){
        $this->cpf = $this->POST('cpf');
        $this->read = new Read;
    }

    public function result(){
       session_start();
       $this->pesquisa();
    }

    private function pegarDados(){
        $result = $this->read->PacienteCpf($this->cpf);
        return $result[1];
    }

    private function pesquisa(){
        $result = $this->read->PacienteCpf($this->cpf);

        if($result[0] > 0){
           $id = $this->pegarDados()['id'];
           redirect(routerConfig()."/pacientes/perfil/$id"); 
        }else{
          setSession("Pesquisar", sweetAlertError("Nenhum paciente com esse cpf {$this->cpf} encontrado no sistema"));
          redirectBack();
        }
    }
}
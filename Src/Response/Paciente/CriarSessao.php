<?php 

namespace Src\Response\Paciente;
use Src\Model\Paciente\Create;
use Src\Model\Paciente\Read;
use Src\Services\Datas;
use Src\Services\VariaveisForm;

class CriarSessao extends VariaveisForm{

    private $read;
    private $create;
    private $date;

    public function __construct(){
      $this->create = new Create;
      $this->read = new Read;
      $this->date = new Datas;
    } 

    public function result($data){
       session_start();
       $fk = $data['id'];
       if($this->verificaSeExisteSessoesPaciente($fk)){
          $this->verificaSeSessaoExisteAtualmente($fk, $this->date->dataAtual());
       }else{
        $this->create($fk, $this->date->dataAtual());
       }

       
    }

    private function create(int $fk, string $data){
         $create = $this->create->createSessao($fk, $data);
         if($create > 0){
              $read = $this->read->ultimaSessaoPaciente($fk);
              $dados = $read[1];
              $id = $dados['id'];
              redirect(routerConfig()."/pacientes/sessao/iniciar/$id");
         }else{
            setSession("CriarSessao", sweetAlertError("Desculpa, tente novamente ou entre em contato com suporte ou desenvolvedor"));
            redirectBack();
         }
    }

    private function verificaSeExisteSessoesPaciente(int $fk){
       $read = $this->read->sessoesPaciente($fk);
       if($read[0] > 0){
        return true;
       }
       return false;
    }

    private function verificaSeSessaoExisteAtualmente(int $fk, string $data){
        $read = $this->read->SessaoPacienteDataAtual($fk, $data);
        if($read > 0){
           setSession("CriarSessao", sweetAlertError("Já existe uma sessão criada na data atual"));
           redirectBack();
        }else{
            $this->create($fk, $this->date->dataAtual()); 
        }
    }
}
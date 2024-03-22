<?php 

namespace Src\Response\Paciente;
use Src\Model\Paciente\Update;
use Src\Services\VariaveisForm;

class FimSessao extends VariaveisForm{

    private string $anotacao;
    private string $horaInicial;
    private string $horaFinal;
    private string $cronometro;
    private $update;

    public function __construct(){
        $this->update = new Update;
        $this->anotacao = $this->POST("anotacao");
        $this->horaInicial = $this->POST("inicial");
        $this->horaFinal = $this->POST("final");
        $this->cronometro = $this->POST("cronometro");
    }

    public function result($data){
      $id = $data['id'];  
      $this->atualizarSessao($id);
    }

    private function atualizarSessao(int $id){
     $update = $this->update->atualizarSessaoDados($id, $this->anotacao, $this->horaInicial, $this->horaFinal, $this->cronometro);
     if($update > 0){
        redirect(routerConfig()."/pacientes/sessao/sucesso");
     }else{
      setSessions(["IniciarSessao" => sweetAlertError("Tente novamente ou entre em contato com suporte ou desenvolvedor")]);  
      redirectBack();
     } 
    }

}
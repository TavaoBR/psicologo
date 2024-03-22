<?php 

namespace Src\Response\Paciente;

use Src\Services\VariaveisForm;
use Src\Model\Paciente\Create;
use Src\Model\Paciente\Read;

class CadastrarAnamnese extends VariaveisForm{

    private string $motivo;
    private string $historico;
    private string $impacto;
    private string $infancia;
    private string $expectativas;
    private $read;
    private $create;

    public function __construct(){
        $this->create = new Create;
        $this->read = new Read;

        $this->motivo = $this->POST('motivo');
        $this->historico = $this->POST('historico');
        $this->impacto = $this->POST('impacto');
        $this->infancia = $this->POST('infancia');
        $this->expectativas = $this->POST('expectativas');
    }

    public function result($data){
        session_start();
        if(!$this->NullOrVoid()){
            $fk = $data['id'];
            $this->verificarExisteFicha($fk);
        }
    } 

    

    private function NullOrVoid() {
        $dados = [
            "Motivo da Consulta" => $this->motivo,
            "Historico do Pro" =>  $this->historico,
            "Impacto Biografico" => $this->impacto,
            "Infância" =>  $this->infancia, 
            "Expectativas" => $this->expectativas
        ];
    
        $mensagens = '<ol>'; 
        
        $camposEmBranco = false;
        
        foreach ($dados as $data => $value) {
            if (!isset($value) || empty($value)) {
                $camposEmBranco = true;
                $mensagens .= "
                
                 <li>O CAMPO <strong>'$data'</strong> está em branco. Por favor, preencha esse campo.<br></li>
                
                ";
            }
        }

        $mensagens .= '</ol>';
    
        if ($camposEmBranco) {
            setSessions(["CadastroAnamnese" =>  messageWarning($mensagens), 
            "Motivo" => $this->motivo,
            "Historico" =>  $this->historico,
            "Impacto" => $this->impacto,
            "Infância" =>  $this->infancia, 
            "Expectativas" => $this->expectativas]);
            redirectBack();
            return true;
        }
    
        return false;
    }


    private function verificarExisteFicha(int $fk){
       if($this->read->fichaAnamnese($fk)[0] > 0){
          $paciente = $this->read->PacienteId($fk)[1];
          setSessions(["CadastroAnamnese" => sweetAlertError("Paciente: {$paciente['nome']} já posui ficha Anamnese"), 
            "Motivo" => $this->motivo,
            "Historico" =>  $this->historico,
            "Impacto" => $this->impacto,
            "Infância" =>  $this->infancia, 
            "Expectativas" => $this->expectativas
        ]); 
          redirectBack();
       }

       $this->inserirFicha($fk);


    }

    private function inserirFicha(int $fk){
        if($this->create->createAnamnese($fk, $this->motivo, $this->historico, $this->impacto, $this->infancia, $this->expectativas) > 0){
          redirect(routerConfig()."/pacientes/sessao/criar/$fk");
        }else{
            setSessions(["CadastroAnamnese" => sweetAlertError("Erro ao inserir Ficha, tente novamente, caso continue o erro, entre em contato com desenvolvedor"), 
            "Motivo" => $this->motivo,
            "Historico" =>  $this->historico,
            "Impacto" => $this->impacto,
            "Infância" =>  $this->infancia, 
            "Expectativas" => $this->expectativas
        ]); 
        redirectBack();
        }
    
    }


}
<?php 

namespace Src\Response\Agenda;
use Src\Services\VariaveisForm;


class Editar extends VariaveisForm{

    private int $id;
    private string $data;
    private string $inicio;
    private string $final;
    
    public function __construct(){
        $this->id = $this->POST("id");
        $this->data =  $this->POST('data');
        $this->inicio = $this->POST('inicio');
        $this->final = $this->POST('final');
    }

    public function result(){
        
    }

    private function pegarDadosAgenda(){
        
    } 

}
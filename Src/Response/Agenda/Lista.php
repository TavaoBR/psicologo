<?php 

namespace Src\Response\Agenda;
use Src\Model\Agenda\Read;

class Lista {

    private $read;
    public function __construct(){
       $this->read = new Read;
    }

    public function getAll(){
        $eventos = [];
        $dados = $this->read->list();

        foreach($dados[1] as $row){
           
          if($row['status' == 1]){
            $color = "#0867D1";
          }elseif($row['status' == 2]){
            $color = "#A80808";
          }else{
            $color = "#06AA4E";
          }

           $eventos[] = [
             "id" => $row['id'],
             "title" => $row['paciente'],
             "color" => $color,
             "start" => $row['dataInicio']." ".$row['horaInicio'],
             "end" => $row['dataFim']." ".$row['horaFim'],
           ];

        }

        echo json_encode($eventos);
        
    }
}
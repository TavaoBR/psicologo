<?php
function listResponsaveis(int $fk){
   $data = new \Src\Model\Paciente\Read;

   if($data->responsavelPaciente($fk)[0] > 0){
    $responsavel = $data->responsavelPaciente($fk)[1];
   
    $html = "";
 
    foreach($responsavel as $r){
       $html .= "
       
             <div class='col-sm-3 mb-3'>
             <p class='mb-0'>Nome</p>
         </div>
         <div class='col-sm-9'>
             <p class=' mb-0'>
                {$r['nome']}
             </p>
         </div>
         <div class='col-sm-3 mb-3'>
             <p class='mb-0'>Grau Responsavel</p>
         </div>
         <div class='col-sm-9'>
             <p class=' mb-0'>
                 {$r['responsavel']}
             </p>
         </div>
 
         <div class='col-sm-3 mb-3'>
             <p class='mb-0'>Celular</p>
         </div>
         <div class='col-sm-9'>
             <p class=' mb-0'>
                 {$r['celular']}
             </p>
         </div>
         <hr>
        
       "; 
    }
 
    return $html;
   }


}
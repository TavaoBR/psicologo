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

function fichaAnamnese(int $fk){
    $data = new \Src\Model\Paciente\Read;

    $rota = routerConfig();

    $html = "";

    if($data->fichaAnamnese($fk)[0] > 0){

        $ficha = $data->fichaAnamnese($fk)[1];
      
        $html .= "
        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#fichaAnamnese'>
            Anamnese
        </button>

            <div class='modal fade' id='fichaAnamnese' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-xl'>
                <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='exampleModalLabel'>Anamnese</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <dl class='row'>
                        <dt class='col-sm-3'>Motivo</dt>
                        <dd class='col-sm-9'>{$ficha['motivo']}</dd>
                        <hr>
                        <dt class='col-sm-3'>Historico</dt>
                        <dd class='col-sm-9'>{$ficha['historico']}</dd>
                        <hr>
                        <dt class='col-sm-3'>Impacto</dt>
                        <dd class='col-sm-9'> {$ficha['impacto']}</dd>
                        <hr>
                        <dt class='col-sm-3'>Infancia</dt>
                        <dd class='col-sm-9'>{$ficha['infancia']}</dd>
                        <hr>
                        <dt class='col-sm-3'>Expectativas</dt>
                        <dd class='col-sm-9'>{$ficha['expectativas']}</dd>
                    </dl>    

                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                </div>
                </div>
            </div>
            </div>
        ";
        
    }else{
        $html .= "
            <a href='$rota/pacientes/cadastrar/anamnese/$fk' class='btn btn-primary'>Anamnese</a>
        ";
    }

    return $html;
}
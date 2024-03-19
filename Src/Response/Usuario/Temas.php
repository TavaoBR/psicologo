<?php 

namespace Src\Response\Usuario;
use Src\Model\Usuario\Update;
use Src\Services\VariaveisForm;

class Temas extends VariaveisForm{
    private $userUpdate;

    public function __construct(){
        $this->userUpdate = new Update;
    }

    public function TemaColor($data){
       
        $id = $data['id'];
        $tema = $this->POST('tema');
         
        $update = $this->userUpdate->temaColor($id, $tema);

        if($update > 0){
           setSession("TemaMessage", sweetAlertSuccess("Cor do tema alterado com sucesso")); 
           redirectBack();
        }else{
            setSession("TemaMessage", sweetAlertError("Deu algum erro, tente novamente mais tarde")); 
            redirectBack();
        }
    }

}
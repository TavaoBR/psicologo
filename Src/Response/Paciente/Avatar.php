<?php 

namespace Src\Response\Paciente;
use Src\Model\Paciente\Update;
use Src\Services\VariaveisForm;

class Avatar extends VariaveisForm{

    private $update;

    public function __construct(){
      $this->update = new Update;
    }

    public function tirarFoto($data){
        $id = $data['id'];
        $file = $this->POST('photoStore');
        $imagemName = uniqid().".png";
        $this->update->attAvatar($id, $imagemName);
        $_UP['pasta'] = 'Public/assets/img/paciente/'.$id.'/';
        mkdir($_UP['pasta'], 0777);
        $encoded_data = $file;
        $binary_data = base64_decode($encoded_data);
        $resultado = file_put_contents($_UP['pasta'].$imagemName,$binary_data);

        if($resultado){
            echo "success";
       }else{
           echo die('Could not save image! check file permission.');
       }
        
    }

    public function enviarFoto($data){
       $id = $data['id'];
       $file = $_FILES[''];
    }

}
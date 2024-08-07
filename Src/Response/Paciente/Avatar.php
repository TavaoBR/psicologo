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
            echo json_encode("Avatar criado com sucesso") ;
       }else{
           echo json_encode("Erro ao criar avatar");
       }
        
    }

    public function enviarFoto($data){
       session_start();
       $id = $data['id'];
       $file = $this->FILE('foto');

       if($file['error']){
        setSession("enviarFoto", sweetAlertWarning("Selecione a foto"));
        redirectBack();
       }

       $foto = $file["tmp_name"];
       $Fotoname = $file['name'];

       $update = $this->update->attArquivoEnviadoAvatar($id, $Fotoname);

       if($update > 0){
            $_UP['pasta'] = 'Public/assets/img/paciente/'.$id.'/';
            mkdir($_UP['pasta'], 0777);
            move_uploaded_file($foto, $_UP['pasta'].$Fotoname);
            redirectBack();
        }else{
            setSession("enviarFoto", sweetAlertError("Ocorreu um erro, tente novamente, caso persiste, entre em contato com o suporte"));
            redirectBack();
       }




       
    }

}
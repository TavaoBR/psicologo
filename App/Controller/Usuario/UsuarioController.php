<?php 

namespace App\Controller\Usuario;

use App\Config\TemplateConfig;

use Src\Model\Usuario\Read;
use Src\Model\Usuario\Update;

class UsuarioController extends  TemplateConfig{

    private $userUpdate;
    private $userRead;

    public function __construct(){
        $this->userUpdate = new Update;
        $this->userRead = new Read;
    }

    public function login(){
        include_once("App/Web/usuario/login.php");
   }

   public function perfil($data){
        session_start();
       if(is_numeric($data['data'])){
         $selectUser = $this->userRead->userId($data['data']); 
       }else{
         $selectUser = $this->userRead->userToken($data['data']);
       }

       $user = $selectUser[1];
       $conta = $selectUser[0];



      $this->view("usuario/perfil", ["title" => $user['usuario'], "conta" => $conta, "dados" => $user]);
   }

    private function resetarTentativasLogin(int $id){
        $this->userUpdate->resetarTentativasLogin($id);
    }
 

    public function recupararConta($data){
        session_start();
        $this->resetarTentativasLogin($data['id']);
        setSession("Mensagem", sweetAlertSuccess("Sua conta foi recuperada, agora coloque o nome de usuario e senha correta"));
        redirect(routerConfig()."/usuario/login");
    }

}
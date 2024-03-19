<?php

namespace Src\Response\Usuario;

use Src\Model\Usuario\Read;
use Src\Model\Usuario\Update;
use Src\Services\Mail;
use Src\Services\TokenUser;
use Src\Services\VariaveisForm;

class Login extends VariaveisForm{

    private string $user;
    private string $password;
    private $userRead;
    private $userUpdate;
    //private $mail;

    public function __construct(){
        $this->user = $this->POST('user');
        $this->password = $this->POST('password');
        $this->userRead = new Read;
        $this->userUpdate = new Update;
        //$this->mail = new Mail;
    }

    public function Data(){
        session_start();
        if(!$this->inputsNull() && !$this->inputUserNull() && !$this->inputPasswordNull()){
           $this->login(); 
        }
    }

    private function inputsNull(){
       if($this->user == "" && $this->password == ""){
         setSession("Mensagem", sweetAlertWarning("Preencha todos os campos"));
         redirectBack();
         return true;
       }

       return false;
    }

    private function inputUserNull(){
        if($this->user == ""){
          setSessions(["Mensagem" => sweetAlertWarning("Coloque o nome de usuario"), "senhaForm" => $this->password]);
          redirectBack();
          return true;
        }

        return false;
    }

    private function inputPasswordNull(){

        if($this->password == ""){
            setSessions(["Mensagem" => sweetAlertWarning("Digite a senha"), "userForm" => $this->user]);
            redirectBack();
            return true;
          }
  
          return false;

    }

    private function tentativaLogin(int $id){
       $this->userUpdate->updateTentativasLogin($id);
    }

    private function resetarTentativasLogin(int $id){
       $this->userUpdate->resetarTentativasLogin($id);
    }
    
    private function login(){
        $user = $this->user;
        $select = $this->userRead->usuario("$user");

        if($select[0] == 0){
            setSessions(["Mensagem" => sweetAlertError("Dados Inválidos")]);
            redirectBack();
        }

        $dados = $select[1];
        $id = $dados["id"];
        $senha = $dados["senha"];

        if($dados['tentativasLogin'] == 5){
           //$this->mail->from("jamesgustavo133@gmail.com")->to($dados['email'])->message("Seu Login foi Bloqueado por conta das inumeras tentivas de logar")->template("usuario/LoginBloqueado", ["user" => $this->user, "id" => $id])->subject("Aviso")->send(); 
           setSession("Mensagem", sweetAlertError("Login Bloqueado por conta das inumeras tentivas de logar. Enviamos um e-mail para recuperação da conta"));
           redirectBack();
        }elseif($senha != md5($this->password)){
            $this->tentativaLogin($id);
            $tentativas = 5;
            $totalTentativasRestantes = $tentativas - $dados['tentativasLogin'];
            setSession("Mensagem", sweetAlertError("Login Inválido. Restão apenas $totalTentativasRestantes"));
            redirectBack();
        }else{
            $this->resetarTentativasLogin($id);
            setSessions(["id" => $id, "usuario" => $dados['usuario'], "token" => $dados['token'], "avatar" => $dados['avatar']]);
            $token = new TokenUser(getSession("id"));
            $token->token();
            redirect(routerConfig()."/perfil/{$dados['token']}");
        }
    }
    
}
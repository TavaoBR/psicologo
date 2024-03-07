<?php 

namespace Src\Services;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mail {

    private array|string $to;
    private string $from;
    private string $fromName;
    private string $template = '';
    private array $templateData = [];
    private string $subject;
    private string $message;
    private PHPMailer $mail;

    public function __construct(){
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->Host = 'sandbox.smtp.mailtrap.io';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'e7145d6dfd0d27';
        $this->mail->Password = '4e7e60455a34ef';
        $this->mail->Port = 465;
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }
    

    public function from(string $from, string $name = ""): Mail 
    {
        $this->from = $from;
        $this->fromName = $name;
        return $this;
    }

    public function to(string | array $to):Mail
    {
        $this->to = $to;
        return $this;
    }

    public function template(string $template, array $templateData):Mail
    {
        $this->template = $template;
        $this->templateData = $templateData;
        return $this;
    }


    public function subject(string $subject):Mail
    {
        $this->subject = $subject;
        return $this;
    }

    public function message(string $message):Mail
    {
         $this->message = $message; 
        return $this;
    }

    private function addAddress(){
        if(is_array($this->to)){
            foreach($this->to as $to){
                $this->mail->addAddress($to);
            }
        }

        if(is_string($this->to)){
             $this->mail->addAddress($this->to);
        }
    }

    private function sendWithTemplate()
    {
       $path = "App/Web/mail/".$this->template.".php";

       if(!file_exists($path)){
           throw new Exception("Rapaz, esse template {$this->template} não existe");
       }

       $template = file_get_contents($path);

       $this->templateData['message'] = $this->message;

       foreach($this->templateData as $key => $data){
         $dataTemplate["@{$key}"] = $data;
       }

       return str_replace(array_keys($dataTemplate), array_values($dataTemplate), $template);
    }

    public function send()
    {

            $this->mail->setFrom($this->from, $this->fromName);
            $this->addAddress();
            $this->mail->CharSet = "UTF-8";
            $this->mail->isHTML(true);
            $this->mail->Subject = $this->subject;
            $this->mail->Body    = empty($this->template) ? $this->message : $this->sendWithTemplate();
            $this->mail->AltBody = $this->message;

            return $this->mail->send();

    }

}
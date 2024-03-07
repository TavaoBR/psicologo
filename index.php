<?php 

use Server\Web\Routers;

require_once("vendor/autoload.php");
error_reporting(1);

class Index {

    protected $webRota;
    protected $metodo;

    public function __construct(){
        try{
           $this->webRota = new Routers;
           $this->metodo = $_SERVER['REQUEST_METHOD'];
        }catch (Exception $e){
         error_log($e->getMessage(), 0);
         exit('Desculpe, ocorreu um erro interno.');
        }
     }
 
     protected function method($metodo)
     {
         if($this->webRota){
             switch($metodo)
             {
                case 'Get':
                 case 'GET':
                  case 'get':
                       $this->webRota->get();
                 break;
 
                 case 'Post':
                  case 'POST':
                   case 'post':
                     $this->webRota->post();
                 break;  
             }
         }
     }
 
 
     public function Rotas()
     {
       return $this->method($this->metodo);
     }
 }
 
 
 $index = new Index;
 $index->Rotas();
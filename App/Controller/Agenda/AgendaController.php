<?php 

namespace App\Controller\Agenda;

use App\Config\TemplateConfig;

class AgendaController extends TemplateConfig{

    public function index(){
        session_start();
        $this->view("agenda/index", ["title" => "Index"]);
    }

}
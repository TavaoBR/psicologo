<?php 

namespace App\Config;

use Exception;
use League\Plates\Engine;

abstract class TemplateConfig {

    protected function view($view, $data = [])
    {
      $viewPath = "App/Web/".$view.'.php';
  
      if(!file_exists($viewPath)){
          throw new Exception("A view {$view} não existe");
      }
  
      $template = new Engine("App/Web");
      echo $template->render($view, $data);
     }

}
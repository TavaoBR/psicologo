<?php 

namespace Src\Services;

abstract class VariaveisForm {
 
    protected function POST(string $name){
       return $_POST["$name"];
    }
    
    protected function FILE(string $name){
      return $_FILES["$name"];      
    }
}
<?php 

namespace Src\Services;

class TwoFactory {
    
    private int $id;
    private $readUser;
    private $updateUser;

    public function __construct(){
        
    }

    private function verificaNumeroExiste(){
        
    }
    private function gerarNumeros(){
        $string = "-";
        $Primeirosnumeros = rand(100, 999);
        $Segundosnumeros = rand(100,990);
        $resultado = $Primeirosnumeros.$string.$Segundosnumeros;
        return $resultado;
    }

    private function insereNumeros(){

    }

    
}
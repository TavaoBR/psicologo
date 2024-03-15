<?php 

namespace Src\Services;

class Cpf   {

    public function validarCpf(string $cpf){

        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if(strlen($cpf) != 11){
            return false;
        }

        // Adicione a verificação de sequências aqui
        if (!$this->verificaDigitosSequencias($cpf)) {
            return false;
        }

        $cpfValidacao = substr($cpf, 0, 9);
        $cpfValidacao .= $this->calcularDigitosCpf($cpfValidacao);
        $cpfValidacao .= $this->calcularDigitosCpf($cpfValidacao);

        if($cpfValidacao == $cpf){
            return true;
        }

        // Adicione o retorno false para CPFs inválidos
        return false;
    }

    private function verificaDigitosSequencias($num){
        // Verificar sequências de números repetidos (000.000.000-00, 111.111.111-11, etc.)
        for($i = 0; $i <= 9; $i++){
            $sequencia = str_repeat($i, 11);
            if($num === $sequencia){
                return false;
            }
        }

        // Se não houver sequências, retorna true
        return true;
    }

    private function calcularDigitosCpf($num){
       // Calcular os dígitos verificadores
        $tamanho = strlen($num);
        $multiplicador = $tamanho + 1;
        $soma = 0;

        //ITERA os Numeros Cpf  
        for($i = 0; $i < $tamanho; $i++){
            $soma += $num[$i] * $multiplicador;
            $multiplicador--;
        }

        //RESTO DIVISÃO
        $resto = $soma % 11;

        return $resto > 1 ? 11 - $resto : 0;
    }
}
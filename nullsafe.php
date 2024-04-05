<?php

$objeto = null;

// if (isset($objeto) && $objeto !=null) {
//     # code...
//     $objeto->total;
// }

// $objeto?->total();
class Funcionario {
    public function __construct (
        private string $nome = "",
        private float $salario = 0
    ){}
    public function info() {
        return "Nome: $this->nome - Salário : $this->salario";
    }
}

class FolhaPagamento {

    private $funcionarios = null;
    public function __construct(){
        $this->funcionarios = [
            new Funcionario('Maria',1200),
            new Funcionario('Fernando',1300),
            new Funcionario('Paulo',500),
        ];
    }
    public function getTotalFuncionario()
    {
        return count($this->funcionarios);
    }

    public function getFuncionario()
    {
        return $this->funcionarios[1];
    }
}

$folhaPagamento= new FolhaPagamento();
echo $folhaPagamento?->getTotalFuncionario();
echo'<br>';
print_r($folhaPagamento?->getFuncionario()->info());
echo'<br>';
##echo $folhaPagamento?->getFuncionario(); metodo echo não serve para essa ocasião


?>
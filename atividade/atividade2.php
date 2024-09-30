<?php 
class Veiculo {
    private $modelo;

    public function __construct($pModelo)
    {
        $this->modelo = $pModelo;
    }

    public function mostrarModelo() {
        echo "O modelo é: " . $this->modelo . "\n";
    }
}

class Carro extends Veiculo {
    private $cor;

    public function __construct($pCor)
    {
        $this->cor = $pCor;
    }
    
    public function mostrarCor() {
        echo "A cor é: " . $this->cor . "\n";
    }
}

class Moto extends Carro {
    private $preco;

    public function __construct($pPreco)
    {
        $this->preco = $pPreco;
    }

    public function mostrarPreco() {
        echo "O preço é: " . $this->preco . "\n";
    }
}

$objetoVeiculo = new Veiculo("Sedan");
$objetoCarro = new Carro("Azul");
$objetoMoto = new Moto("R$ 20.000");
/*Acessando funções das Classe padrão*/
$objetoVeiculo->mostrarModelo();
$objetoCarro->mostrarCor();
$objetoMoto->mostrarPreco();
/*Acessando funções de todas as Classe atraves 
das heranças*/
$objetoMoto->mostrarModelo();
$objetoMoto->mostrarCor();
$objetoMoto->mostrarPreco();
?>
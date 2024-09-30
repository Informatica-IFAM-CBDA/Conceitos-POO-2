<?php 
class Animal {
    public function fazerSom() {
        echo "Gruht..." . "\n";
    }
}
class Cachorro extends Animal {
    public function fazerSom() {
        echo "Aulf..." . "\n";
    }
}
class Gato extends Animal {
    public function fazerSom() {
        echo "Manuel.." . "\n";
    }
}

$objetoAnimal = new Animal();
$objetoCachorro = new Cachorro();
$objetoGato = new Gato();

$objetoAnimal->fazerSom();
$objetoCachorro->fazerSom();
$objetoGato->fazerSom();
?>
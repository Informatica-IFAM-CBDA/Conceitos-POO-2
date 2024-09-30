<?php
class Animal {
    public function fazerSom() {
        echo "Som genérico...";
    }

}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miando...";
    }
}

$animal = new Gato();
$animal->fazerSom(); // Saída: Miando...
?>
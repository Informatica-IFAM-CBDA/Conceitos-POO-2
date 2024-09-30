<?php 
abstract class Forma {
    abstract function calcularArea();
}
class Circulo extends Forma {
    public function calcularArea() {
        echo "Circulo calculado" . "\n";
    }
}
class Retangulo extends Forma {

    public function calcularArea() {
        echo "Retangulo calculado";
    }
}

$objeto1 = new Circulo();
$objeto1->calcularArea();

$objeto2 = new Retangulo();
$objeto2->calcularArea();

?>
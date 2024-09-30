<?php 
interface Voavel {
    public function voar();
}

class Passaro implements Voavel {

    public function voar()
    {
        echo "Passaro voando...";
    }
}
class Aviao implements Voavel {
    public function voar()
    {
        echo "Avião voando...";
    }
}

$objetoPassaro = new Passaro();
$objetoAviao = new Aviao();

$objetoPassaro->voar();
$objetoAviao->voar();
?>
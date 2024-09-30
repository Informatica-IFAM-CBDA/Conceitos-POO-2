<?php
abstract class Evento {
    abstract public function fazerShow(); // Método abstrato

    public function tirarFoto() {
        echo "Tirando foto...";
    }
}

// APRESENTAR O LOCAL DO SHOW!
class Show extends Evento {

    private $local;

    public function receberLocal($pLocal) {
        $this->local = $pLocal;
    }

    public function fazerShow() {
        echo "O show será feito no local: " . $this->local;
    }
}

$Shows = new Show();
$Shows->receberLocal("Boca do Acre.");
$Shows->fazerShow(); // Saída: O show será feito no local: Boca do Acre
?>
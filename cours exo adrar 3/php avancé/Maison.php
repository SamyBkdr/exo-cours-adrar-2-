<?php

class Maison {
        public $nomMaison;
        public $longueurMaison;
        public $largeurMaison;
        public $nbEtages;

    public function surface() {
        $surface = $longueurMaison*$largeurMaison*$nbEtages;
        return $surface;
        echo "<p>La surface de $this->nomMaison est égale à: $surface m²</p>";
    }
}

$maison = new Maison();
$maison->nomMaison = "Villa";

$maison->demarrer();

var_dump($maison);


?>
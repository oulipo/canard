<?php
// Simulateur de canard...

abstract class Canard {

    public function cancane() {
        echo "coin coin\n";
    }

    public function nage() {
        echo "Je nage...\n";
    }

    abstract protected function affiche();
}

class Colvert extends Canard {
    public function affiche() {
        echo "Je suis un colvert\n";
    }
}

class TeteRouge extends Canard {
    public function affiche() {
        echo "Je suis un fuligule à tête rouge\n";
    }
}

$c1 = new Colvert();
$c2 = new TeteRouge();
$c1->affiche();
$c1->nage();
$c2->affiche();
$c2->cancane();
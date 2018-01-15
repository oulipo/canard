<?php
// Simulateur de canard...

interface Volable {
    public function vole();
}

interface Cancanable { // néologisme !
    public function cancane();
}

abstract class Canard {

    public function nage() {
        echo "Je nage...\n";
    }

    abstract protected function affiche();
}

class Colvert extends Canard implements Cancanable, Volable {
    public function affiche() {
        echo "Je suis un colvert\n";
    }
    public function vole() {
        echo "Je vole...\n";
    }
    public function cancane() {
        echo "coin-coin\n";
    }
}

class TeteRouge extends Canard implements Cancanable, Volable {
    public function affiche() {
        echo "Je suis un fuligule à tête rouge\n";
    }
    public function vole() {
        echo "Je vole...\n";
    }
    public function cancane() {
        echo "coin-coin\n";
    }
}

class CanardEnCaoutchouc extends Canard implements Cancanable {
    public function affiche() {
        echo "Je suis un canard en caoutchouc\n";
    }
    public function cancane() { 
        echo "couic couic...\n";
    }
}

class LeurreDeCanardEnBois extends Canard {
    public function affiche() {
        echo "Je suis un un faux canard\n";
    }
}

$c1 = new Colvert();
$c2 = new TeteRouge();
$c3 = new CanardEnCaoutchouc();
$c4 = new LeurreDeCanardEnBois();

// Que pensez-vous de ce design ?



// Que faire ?
// Séparer ce qui change de ce qui ne change pas
// prochaine étape : on va créer des classes pour séparer les comportements de la classe Canard
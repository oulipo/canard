<?php
// Simulateur de canard...

interface FlyBehavior { // c'est plus simple en anglais...
    public function vole();
}

class FlyWithWings implements FlyBehavior {
    public function vole() {
        echo "Je vole avec mes ailes...\n";
    }
}
class FlyNoWay implements FlyBehavior {
    public function vole() {
        echo "Je ne peux pas voler...\n";
    }
}

interface QuackBehavior {
    public function cancane();
}
// exercice : trouver des comportements pour les "quacks" des Colverts, etc.

abstract class Canard {

    protected $flyBehavior;
    protected $quackBehavior;

    public function performFly() {
        $this->flyBehavior->vole();
    }

    public function performQuack() {
        $this->quackBehavior->cancane();
    }

    public function nage() {
        echo "Je nage...\n";
    }

    abstract protected function affiche();
}

class Colvert extends Canard {

    public function __construct() {
        $this->flyBehavior = new FlyWithWings();
    }

    public function affiche() {
        echo "Je suis un colvert\n";
    }
    
}

class TeteRouge extends Canard {
    public function affiche() {
        echo "Je suis un fuligule à tête rouge\n";
    }
}

class CanardEnCaoutchouc extends Canard {
    public function affiche() {
        echo "Je suis un canard en caoutchouc\n";
    }
}

class LeurreDeCanardEnBois extends Canard {
    public function affiche() {
        echo "Je suis un un faux canard\n";
    }
}

// 1- faire des tests
// 2- changer dynamiquement le comportement
// 3- setFlyBehavior(FlyBehavior $fb) { flyBehavior = $fb;  }

$c1 = new Colvert();
$c1->performFly();
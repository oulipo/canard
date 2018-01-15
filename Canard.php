<?php
// Simulateur de canard...

abstract class Canard {

    public function cancane() {
        echo "coin coin\n";
    }

    public function nage() {
        echo "Je nage...\n";
    }

    public function vole() { // tous les canards volent désormais...
        echo "Je vole...\n";
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

// mais un autre développeur ajoute la classe CanardEnCaoutchouc...
class CanardEnCaoutchouc extends Canard {
    public function affiche() {
        echo "Je suis un canard en caoutchouc\n";
    }
    public function cancane() { // on override ici car ce type de canard ne cancane pas pas mais fait couic-couic...
        echo "couic couic...\n";
    }
}

$c1 = new Colvert();
$c2 = new TeteRouge();
$c1->affiche();
$c1->nage();
$c2->affiche();
$c2->cancane();

// désormais les canards en caoutchouc peuvent voler...
$c3 = new CanardEnCaoutchouc();
$c3->vole();
// L'héritage semble être une bonne idée pour réutiliser le code mais cela devient problématique la maintenance et l'évolution du projet devient plus compliquée...
// on va devoir overrider vole() pour que ce canard ne vole pas.

// idem si l'on doit ajouter une classe pour les leurres de canard en bois
// celle-ci ne doit pas voler, ni cancaner...

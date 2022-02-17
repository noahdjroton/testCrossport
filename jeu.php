<?php 
class Jeu {
    function __construct() {
        echo "*************************\n 2 joueurs s'affrontent. Qui aura le plus haut score au lancer de dés? \n Attention, un score supérieur à 9 et c'est perdu ! \n
        ***********************************\n
        Le joueur 1 commence\n
        ***********************************\n
        Résultat du tirage : " .$this->de() ."\n"
        ;

    }

    function de() {
         return rand(0, 20);
    }

    function continue() {
        if($this->de() < 9) {
            return print "Voulez-vous continuer ? \n";
        }
    }

    function perdu () {
        if ($this->de() >= 9) {
            return print "Voulez perdu\n";
        }
    }
}

$hok = new Jeu();
$hok->continue();
$hok->perdu();
?>
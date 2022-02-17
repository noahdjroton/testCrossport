<?php 
class Chien {
    public $nom;
    public $age;
    public $race;
    function __construct($nom, $age, $race) {
        $this->nom=$nom;
        $this->age=$age;
        $this->race=$race; 
            
    }

    function getChienInfo() {
        echo "Nom : " .$this->nom ." - Age : " .$this->age ." - Race: " .$this->race ."\n";
    }
}

$pam = new Chien( "Pam", 15, "Yorshire");
$mina = new Chien( "Mina", 5, "Yorshire");
$hok = new Chien( "Hok", 12, "Jack Russell");
$pam->getChienInfo();
$mina->getChienInfo();
$hok->getChienInfo();
?>
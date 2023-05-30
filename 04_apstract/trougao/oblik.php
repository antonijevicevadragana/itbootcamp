<?php
//apstraktna klasa je klasa koja sadrzi barem jednu apstraktnu metodu
// ne mozemo da kreiramo objekte ove klase ovo NE MOZE $o=new Oblik(); 

abstract class Oblik {
    private $nazivOblika;

    const TROUGAO="Trougao";
    const PRAVOUGAONIK="Pravougaonik";
    const KVADRAT="Kvadrat";
    const ROMB="Romb";

    public function __construct($n)
    {
        $this->nazivOblika=$n;
    }

    public abstract function obim();
    //ako neka klasa sadrzi apstraktnu metodu: 
    //nema implemantacije te metode u toj klasi, 
    //izvedene klase moraju da ponude implementaciju varijantu te metode
 
    public abstract  function povrsina();


    public function ispis() {
        echo "<p>$this->nazivOblika: " . $this->obim(). ", " .$this->povrsina() . "</p>";
    }
    
}


?>
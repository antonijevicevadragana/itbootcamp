<?php

class Film {
    var $naslov;
    var $reziser;
    var $godinaIzdanja;

    function stampaj() {
        echo "Film je naslova " .$this->naslov. "reziser je ". $this->reziser . "godina izdanja filma je ".$this->godinaIzdanja."</p>";
    }

}
$f1 = new Film();
$f1->naslov = 'Lajanje na zvezde';
$f1->reziser="Zdravko Sotra";
$f1->godinaIzdanja=1998;

$f1 -> stampaj();

$f2 = new Film();
$f2->naslov="another round";
$f2->reziser ="Tomas Vinterberg";
$f2->godinaIzdanja=2020;

$f2->stampaj();

$f3= new Film();
$f3->naslov="artic";
$f3->reziser="Dzo Pena";
$f3->godinaIzdanja=2018;

$f3->stampaj();


?>
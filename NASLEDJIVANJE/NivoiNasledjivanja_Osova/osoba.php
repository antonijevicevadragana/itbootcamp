<?php

class Osoba {
    protected $ime;
    protected $prezime;
    protected $godinaRodjenja;

//konstruktor

public function __construct($i, $p, $g) {
    $this->setIme($i);
    $this->setPrezime($p);
    $this->setGodinaRodjenja($g);
}




// geteri

public function getIme() {
    return $this->ime;
}

public function getPrezime() {
    return $this->prezime;
}

public function getGodinaRodjena() {
    return $this->godinaRodjenja;
}



//seter

public function setIme($i) {
    $this->ime=$i;
}

public function setPrezime($p) {
    $this->prezime=$p;
}

public function setGodinaRodjenja($g) {
    $this->godinaRodjenja=$g;
}

//metode

public function ispis() {
    echo " <p> Ime: " . $this->ime. " Prezime: ".$this->prezime . " godina rodjenja: ". $this->godinaRodjenja ."</p>";
}


}

?>
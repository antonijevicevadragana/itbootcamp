<?php

class Film {
    private $naslov;
    private $reziser;
    private $godinaIzdanja;

    public function stampaj() {
        echo "Film je naslova " .$this->naslov. "reziser je ". $this->reziser . "godina izdanja filma je ".$this->godinaIzdanja."</p>";
    }

//metode 
//geter
public function getNaslov(){
    return $this->naslov;
}
public function getReziser(){
    return $this->reziser;
}

public function getGodinaIzdanja(){
    return $this->godinaIzdanja;
}

///seter
public function setNaslov($n) {
    $this->naslov=$n;
}

public function setReziser($r) {
    $this->reziser=$r;
}

public function setGodina($god) {
    if ($god > 1800) {
        $this->godinaIzdanja= $god;
    }
    else {
        $this->godinaIzdanja=1800;
    }
}

}

//ispisujemo 
$f1= new Film();
$f1->setNaslov("Artic");
$f1->setGodina(1500);
echo $f1->getGodinaIzdanja();
echo $f1->getNaslov();


?>
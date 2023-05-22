<?php

class Knjiga {
    private $naslov;
    private $autor;
    private $godIzdanja;
    private $brojStrana;
    private $cena;

//konstruktor

public function __construct($n, $a, $god, $br, $c) 
{
    $this->setNaslov($n);
    $this->setAutor($a);
    $this->setGodIzdanja($god);
    $this->setBrojStrana($br);
    $this->setCena($c);
}

//geteri

public function getNaslov() {
    return $this->naslov;
}

public function getAutor() {
    return $this->autor;
}

public function getGodIzdanja() {
    return $this->godIzdanja;
}

public function getBrojStrana() {
    return $this->brojStrana;
}

public function getCena() {
    return $this->cena;
}


///seteri

public function setNaslov($n) {
    $this->naslov ="$n"; //string
}

public function setAutor($a) {
    $this->autor="$a";
}

public function setGodIzdanja($god) {

    if (is_int($god)) {
        $this->godIzdanja=$god;
    }

    else{
        $this->godIzdanja=(int)$god;
    }
    
}

public function setBrojStrana($br) {
    $br=$this->brojStrana;
    if (is_int($br)) {
        $this->brojStrana=$br;
    }
    else {
        $this->brojStrana=(int)$br;
    }
}

public function setCena($c) {
    if (is_int($c)) {
        $this->cena=$c;
    }
    else {
        $this->cena=(int)$c;
    }
}


///metode

public function obimna() {
    if ($this->brojStrana> 600) {

        return true;
    }

    else {
        return false;
    }
}

public function skupa() {
    if ($this->cena > 8000) {
        return true;
    }

    else {
        return false;
    }
}

public function dugackoIme() {
    $duzina=strlen($this->autor);
    if ($duzina > 18) {
        return true;
    }
    else {
        return false;
    }
}

public function stampa(){
    echo "Knjiga ima " .$this->brojStrana . "naslov je " .$this->naslov . "autora " .$this->autor . "cena je " . $this->cena;;
}

}

$knjiga1=new Knjiga("Orkanski Visovi", "Emili Bronte",1991, 850, 900 );
$knjiga1->stampa();

if($knjiga1->obimna() == true) {
    echo "Knjiga je obimna";
} else {
    echo "Knjiga nije obimna";
}
echo "<hr>";
if($knjiga1->skupa() == true) {
    echo "Ova knjiga je skupa";
} else {
    echo "Ova knjiga je jeftina";
}
echo "<hr>";
if($knjiga1->dugackoime() == true) {
    echo "Ime i prezime autora je dugacno";
} else {
    echo "Ime i prezime ovog autora nije dugacko";
}














?>
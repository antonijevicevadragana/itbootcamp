<?php

class Film{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;
    private $ocene;


public function __construct($n, $g, $r, $o) {
    $this->setNaslov($n);
    $this->setReziser($r);
    $this->setGodinaIzdanja($g);
    $this->setOcene($o);
}

    //set i get Naslov
    public function setNaslov($n) {
        $this->naslov=$n;
    }

    public function getNaslov() {
        return $this->naslov;
    }
//reziser
public function setReziser($r) {
    $this->reziser=$r;
}

public function getReziser() {
    return $this->reziser;
}

//izdanje 
public function setGodinaIzdanja($g) {
    $this->godinaIzdanja=$g;
}

public function getGodinaIzdanja() {
    return $this->godinaIzdanja;
}

//ocene
public function setOcene($o) {
    $this->ocene=$o;
}

public function getOcene() {
    return $this->ocene;
}


public function stampaj() {
    echo "<p>Film " . $this->getNaslov() . ", reziser: $this->reziser,
    godina: $this->godinaIzdanja,
    ocene: " . implode(", ", $this->ocene) ."prosek".$this->prosek(). ".</p>";
}


public function prosek() {
    $sum=0;
    foreach ($this->ocene as $o) {
        $sum+=$o;
    }
    $n=count($this->ocene);
    return ($n>0)?($sum /$n):0;
}
}





?>
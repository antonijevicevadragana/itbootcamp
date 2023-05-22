<?php

use Pacijent as GlobalPacijent;

class Pacijent
{
    private $ime;
    private $visina;
    private $tezina;

    public function Stampaj()
    {
        echo "<p>Ime: $this->ime, visina: $this->visina, tezina: $this->tezina</p>";
    }
    function Bmi()
    {
        return $this->tezina / pow($this->visina, 2);
    }
    function Kritican()
    {
        $bmi = $this->Bmi();
        return $bmi < 15 || $bmi > 40;
    }

//metode
//geteri

public function getIme(){
    return $this->ime;
}

public function getVisina(){
    return $this->visina;
}

public function getTezina(){
    return $this->tezina;
}

//seteri

public function setIme($i) {
    return $this->ime=$i;
}

public function setVisina($v) {
    if ($v > 0 && $v < 250) {
     $this->visina=$v;
    }

    elseif ($v <= 0) {
         $this->visina=0;
    }

    else {
         $this->visina =250;
    }
}

public function setTezina($t) {    //set nema return!!
    if ($t > 0 && $t < 550) {
         $this->tezina =$t;
    }
    elseif ($t <= 0) {
         $this->tezina =0;
    }

    else {
         $this->tezina =250;
    }
}

}

$Pacijent1 = new Pacijent();
$Pacijent1->setIme("Prvi. Prvi");
$Pacijent1->setVisina(800);
$Pacijent1->setTezina(-800);

echo $Pacijent1->getIme();
echo $Pacijent1->getVisina();
echo $Pacijent1->getTezina();













?>
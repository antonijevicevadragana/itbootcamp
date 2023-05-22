<?php

class Pacijent
{
    var $ime;
    var $visina;
    var $tezina;

    function Stampaj()
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
}

$p1 = new Pacijent();
$p1->ime = "Pera";
$p1->visina = 1.8;
$p1->tezina = 80;
$p1->Stampaj();
echo $p1->Bmi() . "<br>";
echo "Kritican: {$p1->Kritican()}<br>";

$p2 = new Pacijent();
$p2->ime = "Zika";
$p2->visina = 1.5;
$p2->tezina = 30;
$p2->Stampaj();
echo "Kritican: {$p2->Kritican()}<br>";

$p3 = new Pacijent();
$p3->ime = "Mika";
$p3->visina = 1.7;
$p3->tezina = 150;
$p3->Stampaj();
echo "Kritican: {$p3->Kritican()}<br>";











?>
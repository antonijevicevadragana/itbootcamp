<?php


class Auto {
    //polja

    var $marka;
    var $boja;
    var $imaKrov;

    function sviraj() {
        echo "<p>Beep! Beep!</p>";
    }

    function ispis() {

        echo "<p> automobil marke " . $this->marka . "boje " .$this->boja. "ima krov " .$this->imaKrov . "</p>";
        if ($this->imaKrov) {
            echo 'ima krov';
        }
        else {
            echo 'nema krov';
        }
    }
}

//objekti klase auto

$a1=new Auto();
var_dump($a1);
$a1->marka = "Opel";
$a1->boja="plava";
$a1->imaKrov=false;
var_dump($a1);

$a2=new Auto();
$a2->marka = "Peugeot";
$a2->boja="bela";
$a2->imaKrov=false;
//$a2->sediste=5;
var_dump($a2);

$a3=new Auto();
$a3->marka = "audi";
$a3->boja="siva";
$a3->imaKrov=true;

echo"<p>Auto marke". $a3->marka."boja" .$a3->boja ."ima krov".$a3->imaKrov ."</p>";




$a1->sviraj();

$a3->ispis();









?>
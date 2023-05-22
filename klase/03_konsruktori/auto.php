<?php


class Auto {
    //polja

    private $marka;
    private $boja;
    private $imaKrov;

    //metode
//KONSTRUKOTOR

public function __construct($m, $b, $ik) {
$this->setMarka($m);
$this->setBoja($b);
$this->setImaKrov($ik);

}




//geteri: uloga da vracaju vrednosti polja

public function getMarka() {
    return $this->marka;
}
public function getBoja() {
    return $this->boja;
}

public function getImaKrov() {
    return $this->imaKrov;
}


//seteri: postavljaju vrednosti polja
public function setMarka($m)
{
    if ($m != "")
    {
        $this->marka = $m;
    }
    else
    {
        $this->marka = "Fiat";
    }
}

public function setBoja($b) {
    $this->boja = $b;
}

public function setImaKrov($ik) {
    if ($ik === true || $ik === false) {
        $this->imaKrov = $ik;
    }
    else {
        $this->imaKrov=false;
    }
    
}



    function sviraj() {
        echo "<p>Beep! Beep!</p>";
    }

    // function ispis() {

    //     echo "<p> automobil marke " . $this->marka . "boje " .$this->boja. "ima krov " . $this->imaKrov . "</p>";
    //     if ($this->imaKrov) {
    //         echo 'ima krov';
    //     }
    //     else {
    //         echo 'nema krov';
    //     }
    // }

    public function ispis()
    {
        $this->sviraj();
        echo "<p>Automobil marke " . $this->marka . " boje " . $this->boja;
        if ($this->imaKrov)
        {
            echo " ima krov";
        }
        else
        {
            echo " nema krov";
        }

        echo "</p>";
    }
}

//objekti klase auto

//1 ) kreiramo objekat

$a1=new Auto("BMW", "plava", false);

//2) setujemo vrednosti polja
// $a1->setMarka("BMW");
// $a1->setBoja("plava");
// $a1->setImaKrov(false);

//3) koristimo objekat
$a1->ispis();

$a1->setMarka('Opel'); //naknadna promena objekta















?>









<?php




class Auto {
    //polja

    private $marka;
    private $boja;
    private $imaKrov;

    //metode
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
public function setMarka($m) {

    if ($m != "") {
         $this->marka ="pezo";
    }
    else {
        $this->marka = $m;
    }
   
}

public function setBoja($b) {
    $this->boja = $b;
}

public function setImaKrov($ik) {
    if ($ik === true || $ik === false) {
        $this->marka = $ik;
    }
    else {
        $this->imaKrov=false;
    }
    
}



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

//$a1->marka = "Opel"; nije moguce zato sto je marka privatno polje
 $a1->setMarka("audi");   //prvo se poziva set pa onda get
 $a1->setImaKrov("audi");

if ($a1->getImaKrov()===true) {
    echo "Automobil marke " .$a1->getMarka() . " ima krov";
}

elseif ($a1->getImaKrov() === true) {
    echo "Automobil marke " .$a1->getMarka() . " nema krov";
}
else {
    echo "Automobil marke " .$a1->getMarka() . " nema dobro postavljene vrednosti";
}

echo"<br>";
echo $a1->getMarka();

echo $a1->sviraj(); //zato sto je public


//echo"<p>Auto marke". $a3->marka."boja" .$a3->boja ."ima krov".$a3->imaKrov ."</p>";

//geter dohvata cita vrednost
//seter postavlja novu vednost polja












?>









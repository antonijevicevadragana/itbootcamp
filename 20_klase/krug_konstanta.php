<?php

class Krug{
    protected $r;
    const PI =3.14;  //konstate nemaju $ ispred i velikim slovima su
 

    //seter
    public function __construct($r)
    {
        $this->setR($r);
    }

    public function setR($r) {
        if ($r > 0) {
            $this->r=$r;
        }

        else {
            $this->r=0;
        }
        
    }

    public function getR() {
        return $this->r;
    }


    //metode

    public function obimKruga() {
        //$pi=3.14;
        
        $obim=2 * $this->r * Krug::PI;   
        return $obim;
    }

    public function povrsinaKruga() {
        $pi=3.14;
        
        $p= ($this->r **2) * self::PI;   
        return $p;
    }
}

//$p= ($this->getR() **2) * $pi; pozivanje moze i preko getera

//konstati moze da se pristupi na 2 nacina
// Krug::PI;  i ovako moze da se pozove bilo gde
//self::PI;  ili ovako kad se poziva u klasi u kojoj je difinisano const PI

?>
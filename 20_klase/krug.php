<?php

class Krug{
    protected $r;
    const PI =3.14;  //konstate nemaju $ ispred i velikim slovima su
    private static $pi = self::PI;
    private static $brojDecimala=2;

    private static $brojKrugova=0;  //da ne bi moglo da se menja
    //ovo polje ima samo geter zato sto ne sme da se menja!!! nema setera
 

    //seteri
    public function __construct($r)
    {
        self::$brojKrugova++;  //isto kao i Krug::$brojKrugova++
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

    public static function setPi($vr) {
        self::$pi=$vr;                //set za private static pi
    }

   

    public static function setBrojDecimala($br) {
        self::$brojDecimala=$br;
    }

        //getrei

    public static function getBrojKrugova() {
        return self::$brojKrugova;
    }

    public static function getPi() {  //get za pi
        return self::$pi->pi;
    }

    public function getR() {
        return $this->r;
    }

    public static function getBrojDecimala() {
        return self::$brojDecimala->brojDecimala;
    }


    //metode

    public function obimKruga() {
        //$pi=3.14;
        
        $obim=2 * $this->r * self::$pi;   
        return round($obim, self::$brojDecimala);
    }

    public function povrsinaKruga() {
        $pi=3.14;
        
        $p= ($this->r **2) * self::$pi;   
        return round($p,self::$brojDecimala);
    }
}

//$p= ($this->getR() **2) * $pi; pozivanje moze i preko getera

//konstati moze da se pristupi na 2 nacina
// Krug::PI;  i ovako moze da se pozove bilo gde
//self::PI;  ili ovako kad se poziva u klasi u kojoj je difinisano const PI

?>
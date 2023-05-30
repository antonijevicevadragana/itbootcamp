<?php
require_once "oblik.php";

class Kvadrat extends Oblik {

    private $a;

    //konstrukt

    public function __construct($a) {
        parent::__construct(Oblik::KVADRAT);
        $this->setA($a);
    }
    

    //set

    public function setA($a) {
        if ($a > 0) {
            $this->a=$a;
        }
        else {
            $this->a=0;
        }
       
    }

    //get

    public function getA() { //override
        return $this->a;
    }

    //metode

    public function obim() {
        $obim=$this->a *4;
        return $obim;
    }

    public function povrsina() { //override imamo istu metodu u nadklasi/osnovnoj klasi oblici
        $povrsina=$this->a**2;
        return $povrsina;
    }

//    public function obim($a, $b)  {overload, dve razlicite metode nisu vezane. 

//    }

// public function ispis() {
//     echo "<p>$this->nazivOblika: " . $this->obim(). ", " .$this->povrsina() . "</p>";
// }
    
}


?>
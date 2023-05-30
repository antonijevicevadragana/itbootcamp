<?php
class Kvadrat {

    private $a;

    //konstrukt

    public function __construct($a) {
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

    public function getA() {
        return $this->a;
    }

    //metode

    public function obimKvadrata() {
        $obim=$this->a *4;
        return $obim;
    }

    public function povrsinaKvadrata() {
        $povrsina=$this->a**2;
        return $povrsina;
    }
    
}


?>
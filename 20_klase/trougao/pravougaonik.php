<?php

class Pravougaonik{
    protected $a;
    protected $b;

    //constuktor

    public function __construct($a, $b) {
        $this->setA($a);
        $this->setB($b);
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

    public function setB($b) {
        if ($b > 0) {
            $this->b=$b;
        }
        else {
            $this->b=0;
        }
    }

    //get

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    //metode

    public function obimPravougaonika() {
        $obim=2*$this->a + 2* $this->b;
        return $obim;
    }

    public function povrsinaPravougaonika() {
        $povrsina= $this->a * $this->b;
        return $povrsina;
    }
}


?>
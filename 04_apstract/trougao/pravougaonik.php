<?php
require_once "oblik.php";

class Pravougaonik extends Oblik {
    protected $a;
    protected $b;

    //constuktor

    public function __construct($a, $b) {
        parent::__construct(Oblik::PRAVOUGAONIK);
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

    public function obim() {  //override
        $obim=2*$this->a + 2* $this->b;
        return $obim;
    }

    public function povrsina() {
        $povrsina= $this->a * $this->b;
        return $povrsina;
    }
}


?>
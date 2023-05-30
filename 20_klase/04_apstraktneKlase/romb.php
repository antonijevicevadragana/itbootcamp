<?php
require_once "kvadrat.php";

class Romb extends Kvadrat {
    private $ugao;


    public function __construct($a, $u) {

        parent::__construct($a);
        Oblik::__construct(Oblik::ROMB);
        $this->setUgao($u);
    }
   

    public function getUgao() {
        return $this->ugao;
    }

    public function setUgao($u) {
        if ($u > 0) {
            $this->ugao=$u;
        }
        else {
            $this->ugao=0;
        }
    }


    public function povrsina() {
        // $d=sqrt($a**2 + $a**2);
        return $this->getA() * $this->getA() * sin($this->ugao);
    }
}


?>
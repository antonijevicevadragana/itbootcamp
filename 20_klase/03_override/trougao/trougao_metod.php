<?php

require_once "oblik.php";
class Trougao extends Oblik
{
    private $a;
    private $b;
    private $c;

    private static function uslovZaTrougao($a, $b, $c) {
        return ($a > 0 && $b > 0 && $c > 0 && $a + $b > $c && $a + $c > $b && $b + $c > $a);
    }

    //construktor

    public function __construct($a, $b, $c)
    {
        parent::__construct(Oblik::TROUGAO);

         if (self::uslovZaTrougao($a, $b, $c)) {
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }
        else{
            $this->a=0;
            $this->b=0;
            $this->c=0;
        }
    }


    //seteri

    public function setA($a)
    {
        if (self::uslovZaTrougao($a, $this->b, $this->c)) {
            $this->a = $a;
        }
        else {
            echo "Ne moze da se promeni vrednost stranie a";
        }
    }

    public function setB($b)
    {
        if (self::uslovZaTrougao($this->a, $b, $this->c)) {
            if ($b > 0 ) {
            $this->b = $b;
        }
        else {
            echo "Ne moze da se promeni vrednost stranie b";
        }
    }
}

    public function setC($c)
    {
        if (self::uslovZaTrougao($this->a, $this->b, $c)) {
            $this->c = $c;
        }
        // else {
        //     $this->c = 0;
        //     $this->a=0;
        //     $this->b=0;
        // }
        else {
            echo "Ne moze da se promeni vrednost stranie c";
        }
    }

    //seteri

    public function getA()
    {
        return  $this->a;
    }

    public function getB()
    {
        return  $this->b;
    }

    public function getC()
    {
        return  $this->c;
    }


    //metode

    public function obim()
    {
        $obim = ($this->a + $this->b + $this->c);
        return $obim;
       
    }

    public function povrsina()
    {
        $povrsina = (sqrt(($this->a + $this->b + $this->c) * ($this->a + $this->b - $this->c) * ($this->b + $this->c - $this->a) * ($this->c + $this->a - $this->b))) / 4;
        return $povrsina;

       

    }
}

//$s=$this->obimTrougla() /2;
//$p=sqrt($s*($s-$this->a) *($s-$this->b)*($s-$this->c));
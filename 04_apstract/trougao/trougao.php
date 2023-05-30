<?php

class Trougao
{
    private $a;
    private $b;
    private $c;

    //construktor

    public function __construct($a, $b, $c)
    {

         if ($a > 0 && $b > 0 && $c > 0 && $a + $b > $c && $a + $c > $b && $b + $c > $a) {
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
        if ($a > 0 && $a + $this->b > $this->c && $a + $this->c > $this->b && $this->b + $this->c > $a) {
            $this->a = $a;
        }
        else {
            echo "Ne moze da se promeni vrednost stranie a";
        }
    }

    public function setB($b)
    {
        if ($b > 0 && $this->a + $b > $this->c && $this->a + $this->c > $this->b && $b + $this->c > $this->a) {
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
        if ($c > 0 && $this->a + $this->b > $c && $this->a + $c > $this->b && $this->b + $c > $this->a) {
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

    public function obimTrougla()
    {
        $obim = ($this->a + $this->b + $this->c);
        return $obim;
    }

    public function povrsinaTrougla()
    {
        $povrsina = (sqrt(($this->a + $this->b + $this->c) * ($this->a + $this->b - $this->c) * ($this->b + $this->c - $this->a) * ($this->c + $this->a - $this->b))) / 4;
        return $povrsina;
    }
}

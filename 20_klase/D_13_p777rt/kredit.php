<?php

abstract class Student {
    protected $ime;
    protected $osvojeniESPB;
    protected $prosecnaOcena;
    



    //construktor

    public function __construct($i, $ob, $o) {
        $this->setIme($i);
        $this->setOsvojeniESPB($ob);
        $this->setProsecnaOcena($o);
        
    }
    
    //set

    public function setIme($i) {
        if (is_string($i)) {
            $this->ime=$i;
        }
        else {
            $this->ime=strval($i);
        }
    }

    public function setOsvojeniESPB($ob) {
        if (is_int($ob)) {
            $this->osvojeniESPB=$ob;
        }
        else {
            $this->osvojeniESPB=(int)$ob;
        }
    }

    public function setProsecnaOcena($o) {
        if (is_double($o)) {
            $this->prosecnaOcena=$o;
        }
        else {
            $this->prosecnaOcena=floatval($o);
        }
    }

    

    //set
    public function getIme() {
       return $this->ime;
    }

    public function getOsvojeniESPB() {
        return $this->osvojeniESPB;
     }

    public function getProsecnaOcena() {
        return $this->prosecnaOcena;
     }

    
//metod

    abstract public function skolarina();

    abstract public function cenaPrijaveIspita();

    public function ispis() {
        echo "<p>Ime studenta: " . $this->ime . " Osvojeni ISPB bodovi: " . $this->osvojeniESPB . " prosecna ocena: " . $this->prosecnaOcena. " Iznos skolarina : " .$this->skolarina(). "</p>";
    }

   
} 















?>
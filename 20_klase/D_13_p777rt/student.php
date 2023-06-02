<?php

abstract class Student {

    protected $ime;
    protected $osvojeniESPB;
    protected $prosecnaOcena;

    //construktor

    public function __construct($i, $bodovi, $po) 
    {
        $this->setIme($i);
        $this->setOsvojeniESPB($bodovi);
        $this->setProsecnaOcena($po);
    }

    
    //seteri

    public function setIme($i) {
        if (is_string($i)) {
            $this->ime=$i;
        }
        else {
            echo "Parametar Ime ne ispunjava date uslove: Upisati ime studenta";
        }
    }

    public function setOsvojeniESPB($bodovi) {
        if (is_int($bodovi)) {
            $this->osvojeniESPB=$bodovi;
        }
        else {
            $this->osvojeniESPB=(int)$bodovi;
        }
    }

    public function setProsecnaOcena($po) {
        if (is_double($po)) {
           $this->prosecnaOcena=$po;
        }
        else {
            $this->prosecnaOcena=floatval($po);
        }
    }

    //geter

    public function getIme() {
        return $this->ime;
    }

    public function getOsvojeniESPB() {
        return $this->osvojeniESPB;
    }

    public function getProsecnaOcena() {
        return $this->prosecnaOcena;
    }

    //metode

    abstract public function skolarina();

    abstract public function cenaPrijaveIspita();

    public function ispis() {
        echo "<p> Student: " .$this->ime . " ima osvojenih ESPB bodova: " .$this->osvojeniESPB. " prosecna ocena :" .$this->prosecnaOcena . ", iznos skolarine je: " >$this->skolarina() . ", iznos prijave ispita: " . $this->cenaPrijaveIspita() ."</p>";
     }

}


?>
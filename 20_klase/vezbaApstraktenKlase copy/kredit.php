<?php

use Kredit as GlobalKredit;

abstract class Kredit {
    protected $naziv;
    protected $osnovica;
    protected $godisnjaKamata;
    protected $brojGodinaOtplate;

    const AUTO="AUTO KREDIT";
    const STAN="STAMBENI KREDIT";

    //construktor

    public function __construct($n, $o, $k, $god) {
        $this->setNaziv($n);
        $this->setOsnovica($o);
        $this->setGodisnjaKamata($k);
        $this->setBrojGodinaOtplate($god);
    }
    
    //set

    public function setNaziv($n) {
        // if (is_string($n)) {
        //     $this->naziv=$n;
        // }
        // else {
        //     $this->naziv=strval($n);
        // }
        if ($n == Kredit::AUTO || $n == Kredit::STAN) {
            $this->naziv=$n;
        }
    }

    public function setOsnovica($o) {
        if (is_double($o)) {
            $this->osnovica=$o;
        }
        else {
            $this->osnovica=floatval($o);
        }
    }

    public function setGodisnjaKamata($k) {
        if (is_double($k) && $k > 0 && $k < 100) {
            $this->godisnjaKamata=$k;
        }
        else {
            $this->godisnjaKamata=floatval($k);
        }
    }

    public function setBrojGodinaOtplate($god) {
        if (is_int($god)) {
            $this->brojGodinaOtplate=$god;
        }
        else {
            $this->brojGodinaOtplate=floatval($god);
        }
    }

    //set
    public function getNaziv() {
       return $this->naziv;
    }

    public function getOsnovica() {
        return $this->osnovica;
     }

    public function getGodisnjaKamata() {
        return $this->godisnjaKamata;
     }

     public function getBrojGodinaOtplate() {
        return $this->brojGodinaOtplate;
     }

//metod

    abstract public function mesecnaRataKredita();

    public function ispis() {
        echo "<p>Naziv kredita: " . $this->naziv . " Osnovica: " . $this->osnovica . " Godisnja kamata: " . $this->godisnjaKamata. " Godine otplate kredita : " .$this->brojGodinaOtplate ." Mesecna radta kredita je:". $this->mesecnaRataKredita().  "evra.</p>";
    }

    public function ispis1() {
        echo "<p> Mesecna radta kredita je: " . $this->mesecnaRataKredita(). "</p>";
    }
} 















?>
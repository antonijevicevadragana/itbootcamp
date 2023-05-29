<?php

require "osoba.php";

class Zaposleni extends Osoba {
    protected $plata;
    protected $pozicija;

    public function __construct($i, $p, $g, $plata, $pozicija) {

        parent::__construct($i, $p, $g);

        $this->plata=$plata;
        $this->pozicija=$pozicija;
    }
    
    //seter

    public function setPlata($plata) {
        $this->plata=$plata;
    }

    public function setPozicija($pozicija) {
        $this->pozicija=$pozicija;
    }

    //geteri

    public function getPlata() {
        return $this->plata;
    }

    public function getPozicija() {
        return $this->pozicija;
    }


    public function ispisZaposleni() {
        echo "<p>Zaposleni - Ime: " . $this->ime. " Prezime: ".$this->prezime . " godina rodjenja: ". $this->godinaRodjenja . " Plata: ".$this->plata . " Pozicija: " .$this->pozicija."</p>";
    }


}



?>
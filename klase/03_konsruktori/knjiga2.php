<?php

class Knjiga {

        private $naslov;
        private $autor;
        private $godIzdanja;
        private $brojStrana;
        private $cena;


        public function __construct($n, $a, $g, $b, $c){
            $this->setNaslov($n);
            $this->setAutor($a);
            $this->setGodIzdanja($g);
            $this->setBrojStrana($b);
            $this->setCena($c);
        }

        public function getNaslov() {
            return $this->naslov;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function getGodIzdanja() {
            return $this->godIzdanja;
        }
        public function getBrojStrana() {
            return $this->brojStrana;
        }
        public function getCena() {
            return $this->cena;
        }

        public function setNaslov($n) {
            $this->naslov = $n;
        }
        public function setAutor($a) {
            $this->autor = $a;
        }
        public function setGodIzdanja($g) {
            $this->godIzdanja = $g;
        }
        public function setBrojStrana($b) {
            $this->brojStrana = $b;
        }
        public function setCena($c) {
            $this->cena = $c;
        }


        public function stampa() {
            echo "<p>Knjiga: " . $this->naslov . ", od autora: " . $this->autor . ", godina izdanja: " . $this->godIzdanja . ", sadrzi broj strana: " . $this->brojStrana . ", cena ove knjige je: " . $this->cena. " din.</p>";
        }

        public function obimna() {
            if($this->brojStrana > 600) {
                return true;
            } else {
                return false;
            }
        }

        public function skupa() {
            if($this->cena > 8000) {
                return true;
            } else {
                return false;
            }
            
        }
        

        public function dugackoime() {
            if($this->autor > 18) {
                return true;
            } else {
                return false;
            }
        }
    }

    $knjiga = new Knjiga("Bela Griva", "René Guillot", 1959, 120, 490);

    $knjiga->stampa();
    if($knjiga->obimna() == true) {
        echo "Knjiga je obimna";
    } else {
        echo "Knjiga nije obimna";
    }
    echo "<hr>";
    if($knjiga->skupa() == true) {
        echo "Ova knjiga je skupa";
    } else {
        echo "Ova knjiga je jeftina";
    }
    echo "<hr>";
    if($knjiga->dugackoime() == true) {
        echo "Ime i prezime autora je dugacno";
    } else {
        echo "Ime i prezime ovog autora nije dugacko";
    }

    ?>
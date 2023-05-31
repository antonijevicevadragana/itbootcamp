<?php
require_once "kredit.php";

class AutoKredit extends Kredit{

    protected $AutoKamata;

    public function __construct($n, $o, $k, $god, $Akamata) {
        parent::__construct($n, $o, $k, $god);
        $this->setAutoKamata($Akamata);
    }
    


    public function setAutoKamata($Akamata) {
        if (is_double($Akamata)) {
            $this->AutoKamata = $Akamata;
        }
        else {
            $this->AutoKamata = floatval($Akamata);
        }
    }

    public function getKamata() {
        return $this->AutoKamata;
    }
    
    //metode

    public function mesecnaRataKredita() {
        $kamata = $this->osnovica * $this->brojGodinaOtplate * ($this->godisnjaKamata + $this->AutoKamata)/100;
        $ukupan_iznos=$this->osnovica + $kamata;
        $mesecna_rata=$ukupan_iznos/($this->brojGodinaOtplate*12);
        return $mesecna_rata;
    }

    public function ispisK() {
        "<p>Naziv kredita: " . $this->naziv . " Osnovica: " . $this->osnovica . " Godisnja kamata: " . $this->godisnjaKamata. " Godine otplate kredita : " .$this->brojGodinaOtplate . "I auto kamata je: ". $this->AutoKamata ."</p>";
    }
}
?>
<?php

class Vozilo {
    protected $boja;
    protected $tip;

    public function getBoja() {
        return $this->boja;
    }

    public function getTip() {
        return $this->tip;
    }

    //set

    public function setBoja($b) {
        $this->boja=($b);
    }

    public function setTip($t) {
        $this->tip=($t);
    }

    //kon
    public function __construct($b, $t) {
        $this->setBoja($b);
        $this->setTip($t);
    }
    
    
    public function voziVozilo() {
        echo "<p>Vozilo  $this->tip ($this->boja) u pokretu</p>";
    }

}






















?>
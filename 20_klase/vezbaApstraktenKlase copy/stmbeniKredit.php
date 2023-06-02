<?php
require_once "kredit.php";

class StambeniKredit extends Kredit {

    public function __construct($n, $o, $k, $god) {
        parent::__construct($n, $o, $k, $god);
       
    }

    public function mesecnaRataKredita() {
        $mesecna_kamata=$this->godisnjaKamata /12/100;
        $stepen=pow(1+$mesecna_kamata,$this->brojGodinaOtplate *12 );
        $mesecna_rata=($this->osnovica *$mesecna_kamata * $stepen) / ($stepen-1);
        return round($mesecna_rata,2);
        
    }
}






?>
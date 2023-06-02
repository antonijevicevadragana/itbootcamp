<?php
require_once "kredit.php";

class SamofinansirajuciStudent extends Student{

    protected $prijavljeniESPB;

    public function __construct($i, $ob, $o, $pbod) {
        parent::__construct($i, $ob, $o);
        $this->setPrijavljeniESPB($pbod);
    }
    


    public function setPrijavljeniESPB($pbod) {
        if (is_int($pbod) && $pbod > 35 && $pbod < 60 && (($this->osvojeniESPB+$pbod) <= 300)) {
            $this->prijavljeniESPB = $pbod;
        }
        else {
            echo "Parametar nije dobro unet";
        }
    }

    public function getPrijavljeniESPB() {
        return $this->prijavljeniESPB;
    }
    
    //metode

    public function skolarina() {
        // $kamata = $this->osnovica * $this->brojGodinaOtplate * ($this->godisnjaKamata + $this->AutoKamata)/100;
        // $ukupan_iznos=$this->osnovica + $kamata;
        // $mesecna_rata=$ukupan_iznos/($this->brojGodinaOtplate*12);
        // return $mesecna_rata;

        if ($this->prosecnaOcena < 8) {
            $s=1900* $this->prijavljeniESPB;
        }
        else {
            $s=1600* $this->prijavljeniESPB;
        }
        return $s;
    }

    public function cenaPrijaveIspita()
    {
        return 400;
    }

  
}
?>
<?php
require_once "student.php";

class SamofinansirajuciStudent extends Student {

    protected $prijavljeniESPB;

    //konsturktor
    public function __construct($i, $bodovi, $po, $pbod) 
    {
      parent::__construct($i, $bodovi, $po);
      $this->setPrijavljeniESPB($pbod);
     
    }

    //set

    public function setPrijavljeniESPB($pbod) {
        if ($pbod > 35 && $pbod < 60 && (($this->osvojeniESPB+$pbod) <= 300))   {
            $this->prijavljeniESPB=$pbod;
        }

        else {
            echo "<br>Parametar prijavljeni ESPB bodovi nisu uneti trazenom formatu";
        }
    }

    public function getPrijavljeniESPB() {
        return $this->prijavljeniESPB;
    }

    //metode

    public function skolarina() {
        if ($this->prosecnaOcena < 8) {
           $skolarina= 1900* $this->prijavljeniESPB;
           return $skolarina;
        }
        else {
            $skolarina=1600*$this->prijavljeniESPB;
            return $skolarina;
        }
    }

    public function cenaPrijaveIspita(){
        $prijavaIspita=400;
        return $prijavaIspita;
    }

}





?>
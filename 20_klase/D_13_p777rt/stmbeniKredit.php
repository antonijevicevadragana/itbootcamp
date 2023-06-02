<?php
require_once "kredit.php";

class BudzetskiStudent extends Student {

    public function __construct($i, $bodovi, $po)
    {
        parent::__construct($i, $bodovi, $po);
    }

    public function skolarina() {

    $s= (300-$this->osvojeniESPB) *2000;
    return $s;
        
    }

    public function cenaPrijaveIspita()
    {
        if ($this->osvojeniESPB == 60 || $this->osvojeniESPB==120 ||$this->osvojeniESPB==180 ||$this->osvojeniESPB==240)  {
            $p=0;
        }

        else {
            $p=100;
        }

    return $p;
    }
}






?>
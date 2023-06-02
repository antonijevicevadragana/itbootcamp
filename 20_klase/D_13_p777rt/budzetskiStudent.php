<?php
require_once "student.php";

class BudzetskiStudent extends Student{

    public function __construct($i, $bodovi, $po)
    {
        parent::__construct($i, $bodovi, $po);
    }



    //metode

    public function skolarina() {
        $skolarina = (300- $this->osvojeniESPB)*2000;
        return $skolarina;
       
    }

    public function cenaPrijaveIspita(){
        if ($this->osvojeniESPB == 60 || $this->osvojeniESPB==120 ||$this->osvojeniESPB==180 ||$this->osvojeniESPB==240)  {
            return 0;
        }

        else {
            return 100;
        }
      
    }
}


?>
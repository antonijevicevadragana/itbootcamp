<?php

require_once "vozilo.php";

class Automobil extends Vozilo {

    //klasa automobil nasledjuje sva polja i metode iz klse vozilo.

    //moze da pristupa samo public poljima i metodama iz Vozila, a ona koja su private ona se nasledjuju ali ne moze direktno da se pristupi jer nismo u klasi vozilo
    public function voziAutomobil() {
        echo "<p>Automobil $this->tip ($this->boja) u pokretu</p>";

        // echo "<p>Automobil ". $this->getTip(). " (" . $this->getBoja(). ") u pokretu</p>";
        // I nacin - posto su polja privatna pristupamo pomocu getera

        // II nacin- kad se stavi protected ne normalno se poziva bez getera.echo "<p>Automobil $this->tip ($this->boja) u pokretu</p>";



    }
}




?>
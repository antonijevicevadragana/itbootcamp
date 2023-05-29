<?php

// include "Film.php"; // ako ne postoji fajjl samo ignorisi
// include_once "Film.php"; //isto  kao include, ali ako je ovaj fajl vec ukljucen ranije onda ga ne ukljucuj ponovo

// require "Film.php";  //ako ne postoji fajl prijavljuje gresku
// require_once "Film.php"; //isto kao require ali ako je ovaj fajl vec ukljucen onda ga ne ukljucuj ponovo

require "Film.php";


$f1=new Film("Lord of the Rings", 2001, "Piter Jackston", [7,5.8,8.7,10]);

$f1->stampaj();


$f2=new Film("Kill Bill", 2003, "Quentin Tarantino", [10, 9.5, 9.8, 7.5]);
$f2->stampaj();
$f3= new Film("Titanik", 1991, "James Cameron", [7.6, 5.5]);
$f3->stampaj();

// $filmoviTemp = [

//     ["naslov"=>"Lotr", "godinaIzdanja"=>2001, "reziser"=>"PJ"],
//     ["naslov"=>"KilBil", "godinaIzdanja"=>2003, "reziser"=>"PJ"],
//     ["naslov"=>"Titanik", "godinaIzdanja"=>1999, "reziser"=>"PJ"],
// ];


$filmovi = [$f1, $f2, $f3];

foreach ($filmovi as $film) {  //echo film->getGodinaizdanja();
    $film->stampaj();
}

function prosecnaOcena($films) {
    $zbir =0;
    foreach ($films as $f) {
        $zbir+=$f->prosek();
    }
$n=count($films);
if ($n>0) {
    return $zbir/$n;
}
else {
    return 0;
}
}

$prosecna =prosecnaOcena($filmovi);
echo "<p>Prosecna ocena svih filmova je $prosecna</p>";

function vekFilmova($films, $vek) {
    foreach ($films as $film) {

        $godinaIzdanja=$film->getGodinaIzdanja();
        
        $vekIzdanja=ceil($godinaIzdanja/100);

        if ($vekIzdanja ==$vek) {
            $film->stampaj();
        }
    }

}
echo "FImovi iz 21 veka su:";
vekFilmova($filmovi, 21);
echo "<hr>";
echo "FImovi iz 20 veka su:";
vekFilmova($filmovi, 20);

//osrednji film - film najblizi prosecnoj oceni svih filmova
function osrednjiFilm($niz) {
    $prosek= prosecnaOcena($niz);
    $najblizaVrednost=abs($niz[0]->prosek() - $prosek);

    $najbliziFIlm=$niz[0];

  foreach ($niz as $film) {
    $vrednost=abs($film->prosek() - $prosek);
    if ($vrednost < $najblizaVrednost) {
        $najblizaVrednost=$vrednost;
        $najbliziFIlm=$film;
    }
  }
return $najbliziFIlm;
}

$osf= osrednjiFilm($filmovi);
echo "<p>Najblizi porsecnoj vr je: </p>";
$osf->stampaj();
echo "<hr>";

//najbolje ocenjieni vraca najbolje ocenjenjeni film

function najboljeOcenjeni($niz) {
//$prosek= prosecnaOcena($niz);
//$maks=0;
$MaxFilm=$niz[0];                              //film prvi u nizu
$NajboljiOcenjen= $niz[0]->prosek();          //prosek ocena za prvi film
    foreach ($niz as $film) {
        $vrednost=$film->prosek();              //vrednost koja se vrti u for petlji
        if ($vrednost >$NajboljiOcenjen) {
            $NajboljiOcenjen = $vrednost;
            $MaxFilm=$film;
        }
    }
    return $MaxFilm;
}

echo "<hr>";
echo "Najbolje ocenjen je: ";
$naj= najboljeOcenjeni($filmovi);
echo $naj->stampaj();


//najmanja ocena najbolje ocenjenog filma

function najmanjaOcenaNajboljeg($niz) {
    $najboljiFilm=najboljeOcenjeni($niz);
    $sveOcene=$najboljiFilm->getOcene();
    $minOcena = $sveOcene[0];

    foreach ($sveOcene as $ocena) {
      if ($ocena < $minOcena) {
       $minOcena = $ocena;
      }
    }
    return $minOcena;
}
echo"<hr>";
$minOcena=najmanjaOcenaNajboljeg($filmovi);
echo "<p>Najmanja ocena najbolje ocenjenog filma je: $minOcena</p>";

//najmanja ocena koju je neki film dobio
function najmanjaOcena($niz) {
$ocenePrvogFilm=$niz[0]->getOcene();
$minOcena=$ocenePrvogFilm[0];
foreach ($niz as $film) {
    $ocene = $film->getOcene();
    foreach ($ocene as $o) {
        if ($o < $minOcena) {
            $minOcena = $o;
        }
    }
}
return $minOcena;
}

echo "<hr>";
$mo=najmanjaOcena($filmovi);
echo "<p>Najmanja ocena koju je neki film dobio je $mo</p>";
echo "<hr>";


?>
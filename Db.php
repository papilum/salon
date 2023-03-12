<?php

class Db
{
    private $konekcija;

    function __construct() {
        $this->konekcija = new Mysqli('localhost', 'root', '', 'salon_automobila');
        $this->konekcija->set_charset("utf8");
      }

      public function vratiMarkeAutomobila(){
        $upit = "SELECT * FROM marka";
        $niz = [];
        
        $rs = $this->konekcija->query($upit);

        while($red = $rs->fetch_object()){
            $niz[] = $red;
        }

        return $niz;
      }

      public function vratiAutomobilePoMarki($idMarke){
        $upit = "SELECT * FROM automobili a JOIN marka m ON a.markaID = m.markaID JOIN drzavaproizvodnje dp ON a.drzavaProizvodnjeID = dp.drzavaProizvodnjeID ";

        if($idMarke != 0){
            $upit .= " WHERE m.markaID = " . $idMarke;
        }

        
        $niz = [];
        
        $rs = $this->konekcija->query($upit);

        while($red = $rs->fetch_object()){
            $niz[] = $red;
        }

        return $niz;
      }
}
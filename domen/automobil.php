<?php
class Automobil {
    private $automobilID;
    private $model;
    private $cena;
    private $boja;
    private $slika;
    private $markaID;
    private $drzavaProizvodnjeID;
    
    public function __construct($automobilID, $model, $cena, $boja, $slika, $markaID, $drzavaProizvodnjeID) {
        $this->automobilID = $automobilID;
        $this->model = $model;
        $this->cena = $cena;
        $this->boja = $boja;
        $this->slika = $slika;
        $this->markaID = $markaID;
        $this->drzavaProizvodnjeID = $drzavaProizvodnjeID;
    }
    
    public function getAutomobilID() {
        return $this->automobilID;
    }
    
    public function setAutomobilID($automobilID) {
        $this->automobilID = $automobilID;
    }
    
    public function getModel() {
        return $this->model;
    }
    
    public function setModel($model) {
        $this->model = $model;
    }
    
    public function getCena() {
        return $this->cena;
    }
    
    public function setCena($cena) {
        $this->cena = $cena;
    }
    
    public function getBoja() {
        return $this->boja;
    }
    
    public function setBoja($boja) {
        $this->boja = $boja;
    }
    
    public function getSlika() {
        return $this->slika;
    }
    
    public function setSlika($slika) {
        $this->slika = $slika;
    }
    
    public function getMarkaID() {
        return $this->markaID;
    }
    
    public function setMarkaID($markaID) {
        $this->markaID = $markaID;
    }
    
    public function getDrzavaProizvodnjeID() {
        return $this->drzavaProizvodnjeID;
    }
    
    public function setDrzavaProizvodnjeID($drzavaProizvodnjeID) {
        $this->drzavaProizvodnjeID = $drzavaProizvodnjeID;
    }
}
?>

<?php
class DrzavaProizvodnje {
    private $drzavaProizvodnjeID;
    private $imeDrzave;
    
    public function __construct($drzavaProizvodnjeID, $imeDrzave) {
        $this->drzavaProizvodnjeID = $drzavaProizvodnjeID;
        $this->imeDrzave = $imeDrzave;
    }
    
    public function getDrzavaProizvodnjeID() {
        return $this->drzavaProizvodnjeID;
    }
    
    public function setDrzavaProizvodnjeID($drzavaProizvodnjeID) {
        $this->drzavaProizvodnjeID = $drzavaProizvodnjeID;
    }
    
    public function getImeDrzave() {
        return $this->imeDrzave;
    }
    
    public function setImeDrzave($imeDrzave) {
        $this->imeDrzave = $imeDrzave;
    }
}
?>

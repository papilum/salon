<?php

class Marka {
    private $markaID;
    private $naziv;
    
    public function __construct($markaID, $naziv) {
        $this->markaID = $markaID;
        $this->naziv = $naziv;
    }
    
    public function getMarkaID() {
        return $this->markaID;
    }
    
    public function setMarkaID($markaID) {
        $this->markaID = $markaID;
    }
    
    public function getNaziv() {
        return $this->naziv;
    }
    
    public function setNaziv($naziv) {
        $this->naziv = $naziv;
    }
}
?>
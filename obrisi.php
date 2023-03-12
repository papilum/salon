<?php
include 'init.php';

$id = trim($_POST['automobiliBrisanje']);

$poruka = "";

if($db->obrisiAutomobil($id)){
    $poruka = "Uspesno ste obrisali automobil";
}else{
    $poruka = "Neuspesno ste obrisali automobil";
}
  

header("Location: administracija.php?poruka=$poruka");

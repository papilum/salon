<?php
include 'init.php';

$id = trim($_POST['automobiliIzmena']);
$cena = trim($_POST['cena']);

$poruka = "";

if($db->izmeniAutomobil($id, $cena)){
    $poruka = "Uspesno ste izmenili cenu automobila";
}else{
    $poruka = "Neuspesno ste izmenili cenu automobila";
}
  

header("Location: administracija.php?poruka=$poruka");

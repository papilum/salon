<?php
include 'init.php';

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["slika"]["name"]);

$model = trim($_POST['model']);
$cena = trim($_POST['cena']);
$drzava = trim($_POST['drzava']);
$marka = trim($_POST['marka']);
$boja = trim($_POST['boja']);

$poruka = "";

$slika = basename($_FILES["slika"]["name"]);

  if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file)) {
        if($db->unesiAutomobil($model, $cena, $slika, $drzava, $marka, $boja)){
            $poruka = "Uspesno ste uneli automobil";
        }else{
            $poruka = "Neuspesno ste uneli automobil";
        }
  } else {
    $poruka = "Doslo je do greske pri uploadu slike";
  }

header("Location: administracija.php?poruka=$poruka");

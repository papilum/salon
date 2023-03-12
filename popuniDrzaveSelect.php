<?php

include 'init.php';

$drzave = $db->vratiDrzaveAutomobila();

?>

<?php

foreach($drzave as $drzava){
?>
<option value="<?= $drzava->drzavaProizvodnjeID ?>" ><?= $drzava->imeDrzave ?> </option>
<?php

}

?>
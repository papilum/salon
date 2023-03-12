<?php

include 'init.php';

$automobili = $db->vratiAutomobilePoMarki(0);

?>

<?php

foreach($automobili as $automobil){
?>
<option value="<?= $automobil->automobilID ?>" ><?= $automobil->naziv . " " . $automobil->model ?> (<?= $automobil->cena ?> eura)</option>
<?php

}

?>
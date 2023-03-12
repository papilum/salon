<?php

include 'init.php';

$marke = $db->vratiMarkeAutomobila();

?>

<?php

foreach($marke as $marka){
?>
<option value="<?= $marka->markaID ?>" ><?= $marka->naziv ?> </option>
<?php

}

?>
<?php

include 'init.php';

$marke = $db->vratiMarkeAutomobila();

?>

<li onclick="pretrazi(0)">Sve marke</li>

<?php

foreach($marke as $marka){
?>
<li onclick="pretrazi(<?= $marka->markaID ?>)"><?= $marka->naziv ?></li>
<?php

}

?>
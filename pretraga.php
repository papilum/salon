<?php
include 'init.php';

$id = trim($_GET['id']);

$automobili = $db->vratiAutomobilePoMarki($id);




foreach($automobili as $auto){
?>


<div class="col-sm-6 col-lg-4">
    <div class="box">
        <div>
            <div class="img-box">
                <img src="images/<?= $auto->slika ?>" alt="">
            </div>
            <div class="detail-box">
                <h5>
                <?= $auto->naziv . " " . $auto->model ?>
                </h5>
                <p>Boja: <?= $auto->boja ?> 
                </br>
                Zemlja porekla: <?= $auto->imeDrzave ?>
                </p>
                <div class="options">
                <h6>
                <?= $auto->cena ?> eura
                </h6>
                
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    }
?>

<?php 
    $smerovi = $pdo->query("select * from smers")->fetchAll();

    // print_r($smerovi);


?>


    <div class="panel-heading">
        Smerovi
    </div>


<div class="panel-body">
        <?php foreach($smerovi as $smer){ ?>
        <a href="smer.php?id=<?= $smer['id'] ?>">
        <?= $smer['naziv'] ?>
        <br> </a>
        
        <?php } ?>
</div>

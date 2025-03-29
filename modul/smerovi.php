<?php 
    $smerovi = $pdo->query("select * from smers")->fetchAll();

    // print_r($smerovi);


?>

<div class="panel panel-primary">
    <div class="panel-heading">
        Smerovi
    </div>
    <div class="panel-body">
        <?php foreach($smerovi as $smer){ ?>
        <a href=""><?= $smer['naziv'] ?> <br> </a>
        
        <?php  }
        ?>
    </div>
</div>
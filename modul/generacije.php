<?php 
    $generacije = $pdo->query("select distinct generacija from students")->fetchAll(PDO::FETCH_COLUMN);

    // print_r($smerovi);


?>

<div class="panel-heading">
    Generacije
</div>
<div class="panel-body">
    <!-- /generacija.php?generacija=2020 -->
    <?php foreach($generacije as $generacija) { ?>
        <a href="generacija.php?generacija=<?= $generacija ?>"><?= $generacija ?></a> <br>
    <?php } ?>
</div>
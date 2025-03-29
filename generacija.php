<?php

// generacija.php ? generacija=2020 => GET REQUEST 

// $_GET['generacija']

$generacija = $_GET['generacija'];

$title = "Studenti " . $generacija . ". generacije";
?>

<?php require_once "db.php" ?>
<?php include "modul/head.php" ?>

<?php 

$studenti = $pdo->query(
    "select students.*, smers.naziv as `smer`
    from students
    join smers on
    smers.id = students.smer_id
    where students.generacija = $generacija
    "
    )->fetchAll();

// print_r($studenti);

?>

<div class="row">
    <div class="col-sm-3">
        <div class="panel panel-primary">
            
        <?php include "modul/smerovi.php" ?>
        <?php include "modul/generacije.php" ?>
            
        </div>
    </div>

    <div class="col-sm-9">
        <table class="table">
            <thead>
                <tr>
                    <th>Ime i prezime</th>
                    <th>Generacija</th>
                    <th>Smer</th>
                    <th>Opsirnije</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($studenti as $student) { ?>
                    <tr>
                        <td><?= $student['ime'] ?> <?= $student['prezime'] ?></td>
                        <td><?= $student['generacija'] ?></td>
                        <td><?= $student['smer'] ?></td>
                        <td>
                            <a href="student.php?id=<?= $student['id'] ?>">Opsirnije...</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "modul/foot.php" ?>
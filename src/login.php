<?php include "../src/bdd.php"; ?>
<?php

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

if (isset($_POST['nom']) && ($_POST['prenom'])) {

    $connect = getConnection();
    $sql = 'SELECT id FROM chaussettes WHERE nom = :nom AND prenom = :prenom';
    $result = execSql($connect, $sql);

}
<?php include "../src/bdd.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 22/09/16
 * Time: 11:08
 */

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$photo = $_POST['photo'];

//echo $nom, $prenom, $age, $photo;

$connect = getConnection();

$sql = "INSERT INTO chaussettes (nom, prenom, photo) values ('$nom', '$prenom', '$photo')";
execSql($connect, $sql);

header("location:../public/gallerie.php");

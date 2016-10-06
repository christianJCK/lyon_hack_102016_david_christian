<?php include "../src/bdd.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 22/09/16
 * Time: 11:08
 */

$prenom = $_POST['nom'];
$nom = $_POST['prenom'];
$photo = $_POST['photo'];
$vote = $_POST[]

//echo $nom, $prenom, $photo;

$connect = getConnection();

$sql = "INSERT INTO chaussettes (nom, prenom, photo, vote) values ('$prenom', '$nom', '$photo')";
execSql($connect, $sql);

header("location:../public/index.php");

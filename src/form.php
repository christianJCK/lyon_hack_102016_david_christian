<?php include "../src/bdd.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 22/09/16
 * Time: 11:08
 */

$first_name = $_POST['nom'];
$last_name = $_POST['prenom'];
$photo = $_POST['photo'];

//echo $nom, $prenom, $age, $photo;

$connect = getConnection();

$sql = "INSERT INTO socksandlove (nom, prenom, photo) values ('$first_name', '$last_name', '$photo')";
execSql($connect, $sql);

header("location:../public/index.php");

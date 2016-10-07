<?php include "../src/bdd.php"; ?>
<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$file_path = "../public/images/";
$file_path = $file_path . time(). basename( $_FILES['photo']['name']);

move_uploaded_file($_FILES['photo']['tmp_name'], $file_path);



//echo $nom, $prenom, $age, $photo;

$connect = getConnection();

$sql = "INSERT INTO chaussettes (nom, prenom, photo) values ('$nom', '$prenom', '$file_path')";
execSql($connect, $sql);

header("location:../public/gallerie.php");

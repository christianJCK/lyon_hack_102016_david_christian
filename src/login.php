<?php include "../src/bdd.php"; ?>
<?php


// Vérification des identifiants

$req = $socksandlove->prepare('SELECT id FROM chaussettes WHERE nom = :nom AND prenom = :prenom');

$req->execute(array(

    'nom' => $nom,

    'prenom' => $prenom));


$resultat = $req->fetch();

if (!$resultat)

{
    echo 'Mauvais identifiant!';
}

else

{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['nom'] = $nom;
    echo 'Vous êtes connecté !';
}

<?php include "../src/bdd.php"; ?>
<?php
//session_start();


if (isset($_POST['nom']) && ($_POST['prenom'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if (!empty($nom) && !empty($prenom)) {
        $connect = getConnection();
        $sql = "SELECT id FROM chaussettes WHERE nom = '$nom' AND prenom = '$prenom'";
        $result = execSql($connect, $sql);

          if (mysqli_num_rows($result) == 1)
           $user = mysqli_fetch_assoc($result);
           // $_SESSION['id'] = $user['id'];
           // $_SESSION['nom'] = $user['nom'];
            //$_SESSION['prenom'] = $user['prenom'];
           // echo "Bienvenue " . htmlspecialchars($user['nom']);
            header("location:../public/galerie.php?id=");




        } else {
            echo "Mauvais nom d'utilisateur et/ou mot de passe !";
        }

    //
    //mysqli_free_result($result);
    //mysqli_close($);

}



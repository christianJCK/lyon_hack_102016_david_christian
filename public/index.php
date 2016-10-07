<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
        <head>
            <meta charset="utf-8" name="viewport">
            <link rel="stylesheet" href="css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SocksAndLove</title>
        </head>
        <body>
        <img src="img/happysocks.jpg" id="bg" alt="socks"/>
        <img src="img/logo.jpg" id="logo" alt="wildcodeschool" class="img-responsive"/>
        <header>
            <div class="row">
                <div class=" col-xs-12 col-md-offset-4 col-md-4">
                    <h1>Socks&Love</h1>
                </div>
            </div>
        </header>
        <div id="formulaire">
            <section class="container-fluid" id="section1">
                <div class="container">
                <div class="col-xs-12 col-md-offset-4 col-md-4" id="bloc">
                    <form enctype="multipart/form-data" action="../src/form.php" method="post">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>Nom:<br>
                                        <input type="text" value="" name="nom"/>
                                        <br/>
                                    </label>
                                </div>
                            </div>


                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>Prénom:<br>
                                        <input type="text" value="" name="prenom"/>
                                        <br/>
                                    </label>
                                </div>
                            </div>



                            <div class="col-xs-12">

                                <div class="form-group">
                                    <label for="fileupload"> Sélectionner une photo:<br>
                                    <input type="file" name="photo" accept="image/*">
                                    </label>
                                </div>
                            </div>


                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </form>
                    </div>
                </div>
            </section>

            <section class="container-fluid">
                <div class="container">

                    <h1>Connexion à la galerie</h1>

                    <div class="col-xs-12 col-md-offset-4 col-md-4" id="bloc2">
                    <form action="../src/login.php" method="post">

                        <div class="form-group">
                            <label>Nom:<br>
                            <input type="text" name="nom" />
                            </label>
                        </div>


                        <div class="form-group">
                            <label>Prénom:<br>
                                <input type="text" name="prenom" />
                            </label>
                        </div>
                        <input type="submit" value="Valider" />

                    </form>
                        </div>
                </div>
            </section>
        </div>
        <a href="galerie.php">galerie</a>

        <footer>

        </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </body>
</html>
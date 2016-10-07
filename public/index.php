<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
        <head>
            <meta charset="utf-8" name="viewport">
            <link rel="stylesheet" href="css/style.css">
            <title>SocksAndLove</title>
        </head>
        <body>
        <header>
            <div class="row">
                <div class="col-md-offset-3 col-md-3 col-xs-12">
                    <h1>SocksAndLove</h1>
                </div>
            </div>
        </header>
            <section class="container-fluid">
                <div class="container">
                    <form enctype="multipart/form-data" action="../src/form.php" method="post">

                            <div class="col-md-offset-3 col-md-10 col-xs-12">
                                <div class="form-group">
                                    <label>Nom:
                                        <input type="text" value="" name="nom"/>
                                        <br/>
                                    </label>
                                </div>
                            </div>


                            <div class="col-md-offset-3 col-md-10 col-xs-12">
                                <div class="form-group">
                                    <label>Prénom:
                                        <input type="text" value="" name="prenom"/>
                                        <br/>
                                    </label>
                                </div>
                            </div>


                            <div class="col-md-offset-3 col-md-10 col-xs-12">
                                <div class="form-group">
                                    <label for="fileupload"> Sélectionner une photo:
                                    <input type="file" name="photo" accept="image/*">
                                    </label>
                                </div>
                            </div>


                        <div class="col-md-offset-3 col-md-3 col-xs-12">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </form>
                </div>
            </section>
        <a href="gallerie.php">gallerie</a>

        <footer>

        </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        </body>

    </html>
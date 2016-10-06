<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" name="viewport">
            <title>SocksAndLove</title>
        </head>
        <body>
        <header>
            <h1>Ajout d'image</h1>
        </header>
            <section class="container-fluid">
                <div class="container">
                    <form name="contact" action="../src/form.php" method="post">
                        <div class="form-group">
                            <label>Nom:
                                <input type="text" value="" name="first_name"/>
                                <br/>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Prénom:
                                <input type="text" value="" name="last_name"/>
                                <br/>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="fileupload"> Sélectionner une photo
                            <input type="file" name="photo" value="fileupload" id="fileupload">
                            </label>

                        <div>
                            <button type="submit" class="btn btn-default">Envoyer</button>
                    </form>
                </div>
            </section>
        <footer>

        </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                    crossorigin="anonymous"></script>
        </body>

    </html>
<?php include "../src/bdd.php"; ?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" name="viewport">
            <link rel="stylesheet" href="css/style.css">
            <title>SocksAndLove</title>
        </head>
        <body>
        <img src="img/happysocks.jpg" id="bg_galerie" alt="socks">
        <header>
            <div id="titre"><h1>Galerie</h1></div>
        </header>

        <table>
            <tr>
                <th>Photo des participants</th>
            </tr>


            <?php
            $connect = getConnection();
            $request = "select * from chaussettes";
            $result = execSql($connect, $request);
            ?>
            <?php while ($chaussettes = $result->fetch_assoc()): ?>
                <tr>
                    <td><img src=" <?php echo $chaussettes['photo']; ?>" width="300" height="400"></td>
                </tr>
            <?php endwhile; ?>
        </table>



        <footer>

        </footer>
        </body>
    </html>
<?php include "../src/bdd.php"; ?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" name="viewport">
            <title>SocksAndLove</title>
        </head>
        <body>
        <header>
            <h1>Gallerie</h1>
        </header>

        <table>
            <tr>
                <th>Photo</th>
            </tr>


            <?php
            $connect = getConnection();
            $request = "select * from chaussettes";
            $result = execSql($connect, $request);
            ?>
            <?php while ($chaussettes = $result->fetch_assoc()): ?>
                <tr>
                    <td><img src=" <?php echo $chaussettes['photo']; ?>"></td>
                </tr>
            <?php endwhile; ?>
        </table>



        <footer>

        </footer>
        </body>
    </html>
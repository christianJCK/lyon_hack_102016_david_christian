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
            $request = "select * from socksandlove";
            $result = execSql($connect, $request);
            ?>
            <?php while ($user = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $photo['Photo']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>



        <footer>

        </footer>
        </body>
    </html>
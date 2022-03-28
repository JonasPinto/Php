<!doctype html>
<<html>
    <head>
        <meta charset="UTF-8">
        <title>while 02</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
        <div>
            <form method="get" action="while02.php">
                <?php
                $c = 1;
                while ($c <= 5) {
                    echo "valor $c: <input type='number' name='v$c' max='100' min='0' required/><br/>";
                    $c += 1;
                }
                ?>
                <input type="submit" value="Enviar" style="background-color: #273747; color: white;"/>
            </form>
        </div>
    </body>
</html>

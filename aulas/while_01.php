<!doctype html>
<<html>
    <head>
        <title>Laço de repetição while 01</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
            $n = 40;

            while ($n >= 1) {
                echo $n ."<br>";
                $n -= 3;
            }
            ?>
        </div>
    </body>
</html>

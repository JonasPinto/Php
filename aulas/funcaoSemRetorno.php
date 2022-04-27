<!doctype html>
<html>
    <head>
        <title>Função 01</title>
        <link rel="stylesheet" href="../_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                function soma ($a, $b) {
                    $s = $a + $b;
                    echo "<p> A soma é = $s</p>";
                }
                 
                soma(3, 4);
                soma(10, 20);
                $x = 5;
                $y = 23;
                soma($x, $y);
            ?>
        </div>
    </body>
</html>
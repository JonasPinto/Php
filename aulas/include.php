<?php include_once "../functions/functions.php";?> 

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../_css/estilo.css">
        <meta charset="utf-8">
        <title>Include</title>
    </head>
    <body>
        <div>
            <?php
                $x = 25;
                $y = 3;
                $resultado = soma(2,25);
                $m = mutltiplica($x, $y);
                echo "A soma de 10 + 25 é = $resultado<br>A multiplicação de $x por $y é = $m";
            ?>
        </div>
    </body>
</html>

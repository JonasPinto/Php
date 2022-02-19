<!doctype html>
<html>
    <head>
        <title>Exercício_03</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    <body>
        <?php
        /*Exercício - 3  http://localhost/PHP/exercicios/ex03.php?prc=16.99
        A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco) 
        prestações sem juros.
        Faça um algoritmo que receba um valor de uma compra e mostre o valor das prestações*/
        
        $prc = $_GET["prc"];
        echo "<h2> Sua compra será parcelada em 5 x de ". number_format($prc / 5,2) ." sem juros <h2/>";

        ?>
    </body>
</html>

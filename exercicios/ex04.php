<!doctype html>
<html>
    <head>
        <title>Exercício_04</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    <body>
        <?php
        /*Exercício - 4 http://localhost/PHP/exercicios/ex04.php?prc=22.50&ajp=12.5 
        Faça um algoritmo que receba o preço de custo de um produto e mostre
        o valor de venda. Sabese o preço de custo receberá um
        acréscimo de acordo com um percentual informado pelo usuário.*/
        
        /* $prc == preço de custo*/
        $prc = $_GET["prc"];
        
        /* $ajp == ajuste de preço em % */
        $ajp = $_GET["ajp"];
        
        /* $vlv == valor de venda*/
        $vlv = number_format(($prc * $ajp / 100) + $prc,2);
        
        echo "<h2> ${$prc} com {$ajp} % de acrecimo é = {$vlv}<h2/>";
        ?>
    </body>
</html>
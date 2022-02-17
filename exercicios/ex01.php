<!doctype html>
<html>
    <head>
        <title>Exercicio_01</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    <body>
    <?php
    /*Exercício - 1  http://localhost/PHP/PHP/exercicios/ex01.php?qtd=50&ct=5.45
        Faça o algoritmo que calcule o valor em Reais,
     *  correspondente aos dólares que um turista possui no cofre do hotel. O programa deve
        solicitar os seguintes dados: Quantidade de
     *  dólares guardados no cofre e cotação do dólar naquele dia.*/
              
    $qtd = $_GET["qtd"];
    $ct = $_GET["ct"];
    $calc = $qtd * $ct;
    echo "<h2> US$$qtd dolares convertidos em reais são $$calc <h2/>";
    
    ?>
    </body>
</html>

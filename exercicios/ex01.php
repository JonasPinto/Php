<!doctype html>
<html>
    <head>
        <title>Exercicio _01</title>
    </head>
    <body>
    <?php
    /*Exercício - 1 
        Faça o algoritmo que calcule o valor em Reais,
     *  correspondente aos dólares que um turista possui no cofre do hotel. O programa deve
        solicitar os seguintes dados: Quantidade de
     *  dólares guardados no cofre e cotação do dólar naquele dia.*/
              
    $qtd = $_GET["qtd"];
    $ct = $_GET["ct"];
    $calc = $qtd * $ct;
    echo " $ ".$qtd." dolares convertidos em reais são ".$calc;
    
    ?>
    </body>
</html>

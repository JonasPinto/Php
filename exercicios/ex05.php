<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício_05</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css">
    </head>
     <body>
        <?php
            /*Exercício - 5 Ler uma temperatura em graus Celsius e apresentala
            convertida em graus Fahrenheit. A fórmula de conversão é:
            F=(9*C+160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.*/
        $temp_c = $_GET["temp_c"];
        $temp_f = ($temp_c * 1.8) + 32;
        
        echo "<h2> $temp_c ° C são equivalentes a $temp_f ° F <h2/> "
        
        ?>
    </body>
</html>

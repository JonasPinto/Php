<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Do Wile 01</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>

    <body>
        <div>
            <?php
            /* $c = 100;     # contagem regressiva subtraindo 2 a cada ciclo 
              do {
              echo " $c";
              $c -= 2;
              }while ($c >= 1); */
             
            $c = 0;          # contagem progressiva somando 1 a cada ciclo
            do {         
                echo " $c";
                $c ++;
            }while ($c <= 100);
            ?>
            <div/>    
    </body>
</html>

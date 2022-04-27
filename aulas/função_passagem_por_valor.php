<!doctype html>
<html>
    <head>
        <title>Função 01</title>
        <link rel="stylesheet" href="../_css/estilo.css">
    </head>
    <body>
        <div>
            <?php

            // neste caso a passagem de parametros por valor não altera a variavel $a
                function funcValor($x) {
                    $x += 2;
                    echo "<p>X = $x</p>";
                }
               $a = 3;
               funcValor($a);              
               echo "<p>A = $a</p>";


            // neste caso a passagem de parametros por referencia altera o resultado da variavel $a      
               function funcReferencia(&$x) {
                $x += 2;
                echo "<p>X = $x</p>";
            }
                $a = 3;
                funcReferencia($a);              
                echo "<p>A = $a</p>";
            ?>
        </div>
    </body>
</html>
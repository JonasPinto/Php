<!doctype html>
<html>
    <head>
        <title>Função 01</title>
        <link rel="stylesheet" href="../_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                function soma () {
                    $p = func_get_args();
                    $t = func_num_args();
                    $s = 0;
                    for ($i = 0; $i < $t; $i++) {
                        $s += $p[$i];
                    }
                    return $s;
                }
                $r = soma(10, 20, 4, 3, 9, 44);
               echo "A soma dos valores passados é = $r";
            ?>
        </div>
    </body> 
</html>
<!doctype html>
<<html>
    <head>
        <title>while 03</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../_css/estilo.css"/> 
    </head>
    <body>
        <div>
            <?php
            $inicio = $_GET["inicio"];
            $final = $_GET["final"];
            $opcoes = $_GET["opcoes"];

            if ($inicio > $final){
                while ($final <= $inicio){
                    echo $inicio.' ';
                    $inicio -= $opcoes;
                } 
            }
            else{
                while ($inicio <= $final) {
                echo $inicio.' ';
                $inicio += $opcoes;
            }
            }
            ?>
            <a href="while_03.php"><br>Voltar</a>
        </div>
    </body>
</html>
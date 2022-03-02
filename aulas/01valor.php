<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <title>01valor</title>
    </head>
    <body>
        <div>
            <?php
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "O valor enviado foi $valor<br/>A sua raiz é = ".number_format($rq, 2);              
            ?>
            <a href="formularios.php"><botton>Voltar</botton></a>       
        </div>
    </body>
</html>

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
            <br><a href="formulario_valor.php" class="voltar">Voltar</a>       
        </div>
    </body>
</html>

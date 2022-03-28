<!doctype html>
<<html>
    <head>
        <title>while 02</title>
        <link rel="stylesheet" href="../_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $c = 1;
                while ($c <= 5){
                    $v = $_GET['v'.$c];
                    if ($v === '') {
                        $v = 'Não digitado';
                    } 
                    echo "Valor : $c = $v <br>";
                    $c ++;
                }
            ?>
            <a href='while_02.php' value='Voltar' style="background-color: #273747; color: white; text-decoration: none; font-weight: bold; font: 11pt Helvetica;">Voltar</a>
        </div>
    </body>
</html>

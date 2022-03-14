<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/switch.css"/>
        <title>Switch 01</title>
    </head>
    <body>
        <div class="form">
            <?php
            $n = $_GET["num"];
            $o = $_GET["oper"];

            switch ($o) {
                case 1:
                    $r = $n * 2;
                    $tipo = "o Dobro";
                    break;
                case 2:
                    $r = pow($n, 3); 
                    $tipo = " o Cubo";
                    break;
                case 3:
                    $r = sqrt($n); 
                    $tipo = " a Raiz Quadrada";
                    break;
                default:
                    break;
            }
            echo "A operação escolhida foi $tipo<br>$tipo de $n = $r<br>";
            ?>
            <a><a class="botao" href="switch_01.php">Voltar</a>
        </div>
    </body>
</html>

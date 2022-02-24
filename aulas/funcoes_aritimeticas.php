
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funções aritimeticas</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
        <style>
            h2{
                font: 15pt arial;
                color: #80a2ff
            }
        </style>
    </head>

    <body>
        <div>
            <h2>
                <?php
                $v1 = $_GET["x"];
                $v2 = $_GET["y"];
                echo " Valores recebidos: $v1 e $v2 ";
                echo "<br/> O valor absoluto de $v1 é = " . abs($v1);
                echo "<br/> O valor de $v1<sup>$v2</sup> é = " . pow($v1, $v2);
                echo "<br/> A raiz de $v1 é = " . sqrt($v1);
                echo "<br/> O valor arredondado de $v2 é = " . round($v2); // ceil(teto) ou floor(chão)
                echo "<br/> A parte inteira de $v2 é = ". intval($v2);
                ?>
            </h2>
        <div/>    
    </body>
</html>

<!doctype html>
<<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
        <div>
        <?php /*http://localhost/PHP/PHP/aulas/aula05.php?a=5.2&b=8.5&c=12.56*/
            $a = $_GET["a"];
            $b = $_GET["b"];
            $c = $_GET["c"];
            
            $soma = number_format($a + $b, 2);
            $sub = number_format($soma - $c, 2);            
            $mult = number_format($sub * $a, 2);
            $div = number_format($mult / $b, 2);
            $mod = number_format($div % 2, 2);
            $media = number_format(($soma + $sub + $mult + $div + 1000) / 5, 2);
            
        echo "<h3><br/> A soma de $a + $b = $soma 
              <br/> A subtração de $soma - $c = $sub
              <br/> A multiplicação de $sub x $a = $mult
              <br/> A divisão de $mult / $b = $div 
              <br/> O resto da divisão entre $div e 2 = $mod 
              <br/> A média entre $soma + $sub + $mult + $div + 1000 = $media <h3/>";
        ?>
        </div>
    </body>
</html>


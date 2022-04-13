<!doctype html>
<<html>
    <head>
        <title>for 03</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
            $n = $_GET['num'];
            if ($n < 1) {
                echo "O número digitado é invalido!";
                exit("<br><a href='for03.php'>Voltar<a/>");
            }
            $mult = 0;
            $qtm = [];
            for ($i = 1; $i <= $n; $i++) {
                if ($n % $i == 0) {
                    $mult++;
                    $qtm[] = $i;
                }
            }
            $epnp = '';
            if ($mult <= 2) {
			$epnp = " É PRIMO! ";
		} else {
			$epnp = " NÃO E PRIMO! ";
		}
            $qtm = implode(' ', $qtm);
            echo "<h4>Analisando o número $n ....</h4>"
            . "Valores multiplos: $qtm<br>"
            . "Total de multiplos: $mult<br>"
            . "Resultado: $n $epnp<br>";
            ?>
            <a type="submit" href="for03.php"><button>Voltar</button></a>
        </div>
    </body>
</html>


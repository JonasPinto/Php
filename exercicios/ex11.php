<!<!doctype html>
<<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Exercicio_11</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
        
    </head>
    <body>
        <?php
        /*  Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média 
            aritmética simples e escrever uma mensagem que diga se o aluno foi ou não
            aprovado (considerar que nota igual ou maior que 6 o aluno é aprovado). 
            Escrever também a média calculada. */
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        
        $media = ($n1 + $n2) / 2;
        $resultado = ($media >= 6 ? 'Aprovado' : 'Reprovado');
        
        echo "<h2>Com uma média de $media !!!!<br/> Você foi $resultado<h2/>";
        
        ?>
    </body>
        
</html>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <<link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
        <div>
        <?php
        /* Os operadores lógicos em php são 
          &&/and = e
          ||/or  = ou
          !/not  = não
          xor    = ou exclusivo*/
        
            $ano = 1987;
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos <br/>";
            $tipo = ($idade >= 18 && $idade < 65)? "Obrigatório!!!" : "Não Obrigatorio!!!";
            echo "<br/>E o seu voto é $tipo";
        ?>
        </div>
    </body>
</html>
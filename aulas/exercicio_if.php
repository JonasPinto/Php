<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio IF</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <?php 
        $a = isset($_GET["ano"])? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem atualmente $i anos<br/>"; 
        if (($i >= 18) && ($i < 66)){
            echo "Você pode dirigir e tem obrigação de votar<br/>";
        }
        elseif ($i >= 16 && $i < 18) {
                echo "Você não pode dirigir mas pode votar se quiser";
            }
        elseif ($i > 65) {
                echo "Você pode dirigir mas não precisa mais votar";
        }
        else {
                echo "Você não pode votar também não pode dirigir";
        }
        ?>
        <a href="condicionais_if_else.php"><botton>Voltar</botton></a>
    <div/>    
    </body>
</html>

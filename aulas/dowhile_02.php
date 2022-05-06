<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <?php 
        $v = $_GET["val"];
        echo "<h>caluculando o fatorial de $v </h2><br>";
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c --;
            
        } while ($c >= 1);
        echo "O fatorial de $v! = $fat "
        ?>
        <br><a href="dowhile02.php" class="voltar">Voltar</a>
    </div>    
    </body>
</html>

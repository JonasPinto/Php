<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Get url</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <?php 
        $a = 2;
        $b = 2;
        
        # O operador spaceship verifica e retorna a comparação entre $a e $b      
        
        # se $a < $b  o retorno será -1
        # se $a == $b o retorno será 0
        # se $a > $b  o retorno será 1
        
        echo $a <=> $b; 
        ?>
    <div/>    
    </body>
</html>

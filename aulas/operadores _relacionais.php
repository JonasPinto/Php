<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>operadores relacionais</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
        
    </head>
    <body>
        <div>
            <?php
            /* 
                == -> igual
               === -> identico
          != / <>  -> diferente
               !== -> não identico
               <   -> menor que
               >   -> maior que
               <=  -> menor ou igual
               >=  -> maior ou igual
               <=> -> spaceship  */
            
           
           
                $a = 3;
                $b = "3";
                
                # o valor das duas variaveis é 3 mas não são identicas pois em $b o tipo é string
                echo "Os valores passados foram $a e $b<br/>";
                
                $r = $a == $b ? "sim" : "não";    
                echo "As duas variaveis são iguais? $r<br/>";
                
                $r = $a === $b ? "sim" : "não";
                echo "As duas variaveis são identicas? $r<br/>";
            ?>
        </div>
    </body>
</html>
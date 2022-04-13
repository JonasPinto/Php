<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
    <div>
         <?php
         $t = $_GET['tab'];
         $c = 0;
         $r = 0;
         echo "Tabuada $t <br><br>"; 
         do {
             echo "$t X $c = $r<br>";
             $c ++;
             $r = $t * $c;
         }while ($c <= 10);
         ?>
        <br><a href="dowhile03.php">Voltar</a>
    </div>    
    </body>
</html>
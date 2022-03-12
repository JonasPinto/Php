<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../_css/notas.css"/>
        <meta charset="UTF-8">
        <title>Notas</title>
    </head>
    <body>
        <div class="texto">
            <?php
            
               $n1 = $_GET["n1"]; 
               $n2 = $_GET["n2"];
               
               if (($n1 === "" || $n1 <= 0) || ($n2 === "" || $n2 <= 0)){
                   echo "Nota inválida";
                   exit("<br><a href='media.php' class='voltar'>Voltar<a/>");
               }
               else {
                   $m = ($n1 + $n2) / 2;
                   
                   if(($m > 0) && ($m < 5)){
                       $sit = "REPROVADO";
                   }
                   elseif (($m >= 5) && ($m < 7)){
                       $sit = "RECUPERAÇÃO";
                   }
                   else{
                       $sit = "APROVADO";
                   }
               }
               echo "A média entre <span>$n1</span> e <span>$n2</span> é igual a <span>$m</span><br/>Situação do aluno: <span>$sit</span><br>";   
            ?> 
            <a href="media.php" class="voltar">Voltar<a/>
        </div>
    </body>
</html>
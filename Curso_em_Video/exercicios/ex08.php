<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício_08</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    
    <body>
    <div>
        <h2>
        <?php /*http://localhost/PHP/exercicios/ex08.php?a=26&m=5&d=29
          Faça um algoritmo que leia a idade de uma pessoa expressa em anos, 
          meses e dias e escreva a idade dessa pessoa expressa apenas em dias. 
          Considerar ano com 365 dias e mês com 30 dias.*/
        
        $anos = $_GET["a"];
        $meses = $_GET["m"];
        $dias = $_GET["d"];
        
        $tot_dias = number_format(($anos * 365) + ($meses * 30) + $dias,3,".",",");
        
        echo " A idade em dias é = ". $tot_dias;      
        ?>
        </h2>
    <div/>    
    </body>
</html>

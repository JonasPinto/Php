<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 12</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    <body>
        <?php /*http://localhost/PHP/exercicios/ex12.php?ht=241&salh=13.55
            A jornada de trabalho semanal de um funcionário é de 40 horas. O funcionário 
           que trabalhar mais de 40 horas receberá hora extra, cujo cálculo é o valor da 
           hora regular com um acréscimo de 50%.Escreva um algoritmo que leia o número de 
           horas trabalhadas em um mês, o salário por hora e escreva o salário total do 
           funcionário, que deverá ser acrescido das horas extras, caso tenham sido 
           trabalhadas(considere que o mês possua 4 semanas exatas).*/
        
        $horas_trabalhadas = $_GET["ht"];
        $salario_hora = $_GET["salh"];
        $hora_extra = ($salario_hora += $salario_hora * .5 );
        
        $salario_total = ($horas_trabalhadas > 180 ? $horas_trabalhadas * $hora_extra : $horas_trabalhadas * $salario_hora );
        
        echo "<h2>O salário do funcionario será de R$$salario_total<h2/>";
        
        ?>    
    </body>
</html>

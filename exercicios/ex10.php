<!doctype html>
<html>
    <head>
        <title>Exercício_10</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
 
    <body>
    <?php
    /*Exercício - 10 url -> http://localhost/PHP/exercicios/ex10.php?sf=1500&qtcv=6&tv=2155&vlu=530
      Uma revendedora de carros usados paga a seus funcionários vendedores um salário 
      fixo por mês,mais uma comissão também fixa para cada carro vendido e mais 5% do 
      valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de carros 
      por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele 
      recebe por carro vendido. Calcule e escreva o salário final do vendedor.*/
    
    $carros_vendidos = $_GET["qtcv"];
    $tot_vendas = $_GET["tv"];
    $sal_fix = $_GET["sf"];
    $vl_unit = $_GET["vlu"];
            
    $sal = number_format(($carros_vendidos * $vl_unit) + (($tot_vendas * 5) / 100) + $tot_vendas + $sal_fix, 2, ",", ".");
    
    echo " <h2> O salario do vendedor será de R$ $sal <h2/> ";
    ?>
    </body>
</html>
<!doctype html>
<html>
    <head>
        <title>exercicio_02</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
 
    <body>
    <?php
 /*   Exercicio - 2 url -> http://localhost/PHP/PHP/exercicios/ex02.php?dist=1500&vl=20
      Faça um algoritmo que após a entrada de uma determinada distância entre dois pontos(Km),
  *     e uma determinada velocidade(Km/h), diga qual o tempo médio que levará para chegada à esse 
  *     local e qual a velocidade em metros/segundos*/
    
    $dist = $_GET["dist"];
    $vl = $_GET["vl"];
    $km_h = $dist / $vl;
    $ms = number_format($vl / 3.6,2);
    echo " <h2> $dist Km são percorridos em um tempo médio de $km_h Horas a uma
          velocidade de $vl Km/h <br/> 
          A velocidade média em m/s(metros por segundos) será de
          $ms m/s <h2/> ";
    ?>
    </body>
</html>


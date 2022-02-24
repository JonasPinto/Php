<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 09</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    
    <body>
    <div>
        <h2>
        <?php /*http://localhost/PHP/exercicios/ex09.php?el=285000&vtv=212000&vb=8000&nu=6500
           Escreva um algoritmo para ler o número total de eleitores de um município, 
           o número de votos brancos, nulos e válidos. Calcular e escrever o percentual 
           que cada um representa em relação ao total de eleitores.*/
        
        $tot_eleitores = $_GET["el"];
        $vt_valido = $_GET["vtv"];
        $vt_branco = $_GET["vb"];
        $vt_nulo = $_GET["nu"];
                
        $vt_branco = number_format(($vt_branco / $tot_eleitores) * 100, 1); 
        $vt_nulo = number_format(($vt_nulo / $tot_eleitores) * 100, 1);
        $vt_valido = number_format(($vt_valido / $tot_eleitores) * 100, 1);
        
       echo " PERCENTUAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VOTO <br/>
          &nbsp;&nbsp; $vt_branco %&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branco<br/>
          &nbsp;&nbsp; $vt_nulo %&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nulo<br/>
          &nbsp;$vt_valido %&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valido<br/>
          <br/>O total de eleitores do municipio é de $tot_eleitores ";
       
       ?>
        </h2>
    <div/>    
    </body>
</html>
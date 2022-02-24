
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício_06</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    
    <body>
        <?php /* http://localhost/PHP/exercicios/ex06.php?ct=100000
            Exercício - 6 O custo ao consumidor de um carro novo é a soma do custo de fábrica
            com a percentagem do distribuidor e dos impostos (aplicados,primeiro os impostos sobre
            o custo de fábrica, e depois a percentagem do distribuidor sobre o resultado). 
            Supondo que a percentagem do stribuidor seja de 28% e os impostos 45%. Escrever um 
            algoritmo que leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo.*/
        
        $ct = $_GET["ct"];
        $imposto = ($ct * 0.45) + $ct;
        $distribuidor = $imposto * 0.28;
        
        $vlrCons = number_format($imposto + $distribuidor, 2);
        
        echo "<h2> O custo do veiculo será de R$$vlrCons <h2/> ";      
        ?>    
    </body>
</html>

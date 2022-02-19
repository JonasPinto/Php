<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 07</title>
        <link rel="stylesheet" href="../_css/estilo_ex.css"/>
    </head>
    
    <body>
    <div>
        <h2>
        <?php /*http://localhost/PHP/exercicios/ex07.php?b=3&a=8
            Escreva um algoritmo para ler as dimensões de um retângulo (base e altura), 
            calcular e escrever a área do retângulo.*/
        $x = $_GET["a"];
        $y = $_GET["b"];
        echo " A área do retângulo é = ". number_format($x * $y,2);      
        ?>
        </h2>
    <div/>    
    </body>
</html>

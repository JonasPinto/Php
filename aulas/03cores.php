<!DOCTYPE html>
<html>
    <head>
        <?php
            $txt = isset($_GET["t"])? $_GET["t"] : "Texto Generico";
            $txtam = isset($_GET["tam"])? $_GET["tam"] : "12pt";
            $txcor = isset($_GET["cor"])? $_GET["cor"] : "#000000";
        ?>
        <style>
            span.text{
                font-size: <?php echo $txtam; ?>;
                color: <?php echo $txcor; ?>;
            }
        </style>
        <meta charset="UTF-8">
        <title>03 cores</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    <body>
    <div>
        <?php 
            echo "<span class= text>$txt</span>";
        ?>
        <a href="03formulario.php"><botton>Voltar</botton></a>
    <div/>    
    </body>
</html>

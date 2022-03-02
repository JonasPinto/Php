<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Get url</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <?php 
        $nome = isset($_GET["nome"])? $_GET["nome"] : "[Não informado]";
        $ano = isset($_GET["ano"])? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[sem sexo]";
        
        $idade = date("Y") - $ano;
        
        echo " $nome é $sexo e tem $idade anos de idade ";      
        ?>
       <a href="formulario_idade.php"><botton>Voltar</botton></a> 
    <div/>    
    </body>
</html>

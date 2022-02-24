
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Incremento</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <?php /*http://localhost/PHP/aulas/incremento.php?idade=34*/
        /* ++$variável a variável é incrementada primeiro
           $variável++ 
           --$variável
           $variável-- */
        
        $atual = $_GET["aa"];
        
        # incrementar ou decrementar antes ou depois da variavel resultam em valores diferentes
        echo "O ano atual é $atual e o ano anterior é ".--$atual
             ."<br/>O próximo ano depois de ".++$atual. " é ".++$atual;      
        ?>
    <div/>    
    </body>
</html>

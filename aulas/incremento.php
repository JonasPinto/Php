
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Incremento</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <?php /*http://localhost/PHP/aulas/incremento.php?a=2022*/
        /* ++$variável a variável é incrementada primeiro
           $variável++ 
           --$variável
           $variável-- */
        
        $atual = $_GET["a"];
        
        # incrementar/decrementar antes/depois da variavel resulta em valores diferentes
        echo "O ano atual é $atual e o ano anterior é ".--$atual
             ."<br/>O próximo ano depois de ".++$atual. " é ".++$atual;      
        ?>
    <div/>    
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Incremento</title>
        <link rel="stylesheet" href="../_css/estilo.css"/>
    </head>
    
    <body>
    <div>
        <?php 
        /*
           ++$variável a variável é incrementada primeiro
           $variável++ 
           --$variável
           $variável-- */
        
        $atual = $_GET["a"];
        
        # incrementar/decrementar antes/depois da variavel resulta em valores diferentes
        echo "O ano atual é $atual e o ano anterior é ".--$atual
             ."<br/>O próximo ano depois de ".++$atual. " é ".++$atual;  
        
        $a = 3;
        $b = $a;
        $b += 5;
        
        echo "<br/>A variavel A vale $a";
        echo "<br/>A variavel B vale $B";
       
        /*Logo $a e $b são completamente iguais aqui, mas não porque $a está apontando para
         $b ou vice-versa, mas sim porque $a e $b apontam para o mesmo lugar */
        ?>
    <div/>    
    </body>
</html>

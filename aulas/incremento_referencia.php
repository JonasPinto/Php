
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Incremento e referência</title>
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
        
        $atual = 2022;
        
        # incrementar/decrementar antes/depois da variavel resulta em valores diferentes
        echo "O ano atual é $atual e o ano anterior é ".--$atual
             ."<br/>O próximo ano depois de ".++$atual. " é ".++$atual;  
        
        $a = 3;
        $b = &$a;
        $b = 4;
        
        echo "<br/><br/>A variavel A vale $a";
        echo "<br/>A variavel B vale $b<br/>";
       
        /*Logo $a e $b são completamente iguais aqui, mas não porque $a está apontando para
         $b ou vice-versa, mas sim porque $a e $b apontam para o mesmo lugar */
        
        /* Variáveis de Variáveis (variáveis variantes)
       Colocar um segundo $ na frente de uma variável também possui um efeito bem peculiar. 
         Ele vai criar uma variável dinamicamente, dependendo do conteúdo da variável 
         original. Essas são as variáveis de variáveis em PHP.*/

        $nome = 'jonas';
        $$nome = 'professor';
        
        echo "<br/> O conteúdo da variavel \$nome se transforma em uma varíavel
               e pode-se atribuir valores a ela<br/><br/>   \$nome = 'jonas'<br/>
               $\$nome = 'professor'<br> $nome $jonas";
 
       /*Com essas linhas, teremos uma variável $nome, como o conteúdo “jonas” e a linha 
        de baixo vai criar uma variável $jonas, com o conteúdo “professor”.
        */
        ?>
    <div/>    
    </body>
</html>

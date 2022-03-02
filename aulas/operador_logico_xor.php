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
        /* Veja que se ambos são falsos ou ambos são verdadeiros, o comparador XOR 
          retornará falso. Ele só retornará verdadeiro mediante exclusivamente uma das 
          condições ser verdadeira.*/
        
         $masculino = 0;
         $feminino  = 0;

  if ($masculino xor $feminino) {
    print("Um sexo foi escolhido");
  } else {
    print("Nenhum ou ambos sexos foram escolhidos.");
  }    
        ?>
    <div/>    
    </body>
</html>








  
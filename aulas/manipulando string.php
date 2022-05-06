<?php include_once "../functions/functions.php";?> 

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../_css/estilo.css">
        <meta charset="utf-8">
        <title>Manipulando strings</title>
    </head>
    <body>
        <div>
            <?php
                //Função printf() : Permite exibir uma string com itens formatados.
                $p = "leite";
                $pr = 4.5;
                echo ("O $p custa R$".number_format($pr,2)); 
                printf ("<br>O %s custa R$ %.2f<br>", $p, $pr);


                //Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.
                $v1[0] = 4; $v1[1] = 10; $v1[2] = 9;                                                       
                var_dump($v1);
                echo "<br>";

                $v2 = array(3, 5, 87, 101, 200);
                print_r($v2);
                echo "<br><br>";

                var_export($v2);

                //Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.
                $t = "Aqui temos um grande texto criado para demonstrar a função wordwrap no php, o resultado da quebra deve ser verificado ao inspecionar o código";
                $r = wordwrap($t, 30, "<br>\n", true);
                echo "<br><br> $r";

                //Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
                $st = "hoje e mais um dia para treinar php    ";
                echo "<br><br>";
                echo $st;
                echo "<br><br>";
                $tam = strlen($st);
                echo "A string acima tem $tam caracteres<br>";

                //Função trim() : Elimina espaços em branco antes e depois de uma string.
                //Função ltrim() : Elimina espaços no início de uma string.
                //Função rtrim() : Elimina espaços em branco no final de uma string.
                $novo = trim($st);
                echo "<br>Abaixo usando o trim e eliminando os espaços<br>A string passa a ter ".strlen($novo)."  caracteres<br> ";

                //Função str_word_count() : Conta quantas palavras uma string possui.
                $contWords = str_word_count($st,2); /* usando 1 depois da variavel a função gera um vetor mostrando cada elemento e sua posição no vetor
                                                      usando 2 depois da variavel a função gera um vetor
                mostrando a posição de inicio de cada palavra */  
                echo "<br><br>";
                print_r($contWords);
                echo "<br><br>";

                //Função explode() : Quebra uma string e coloca os itens em um vetor mostrando as posições
                $ex = explode(" ", $novo );
                print_r($ex);
                echo "<br>";
                # Array( [0] => hoje [1] => e [2] => mais [3] => um [4] => dia [5] => para [6] => treinar [7] => php )

                //Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.
                echo "<br>Jonas<br>";
                $nome = "jonas"; 
                print_r(str_split($nome)); # o uso do echo não funciona junto com esta função.
                $nome3 = str_split($nome, 3); # podemos fatiar a string nese caso de 3 em 3 caracteres 
                echo "<br><br>";
                print_r($nome3);
                echo "<br><br>";

                //Função implode() : Transforma um vetor inteiro em uma string.  
                //Função join()    : Transforma um vetor inteiro em uma string.          
                $nome2 = array("jonas da silva pinto");
                print_r(implode("",$nome2));
                echo "<br><br>";

                //Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
                $caractere = chr(45);
                echo "O codigo ASCII 53 corresponde ao caractere [$caractere]<br><br>";

                //Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.
                $letra = " ";
                $cod = ord($letra);
                echo "O caractere $letra na tabela ASCII corresponde ao codigo $cod<br><br>";

                //Função strtolower() : Converte uma string para minusculo
                //Função strtoupper() : Converte uma string para maiusculo
                $nome  = "JoNaS da SiLVA pInTO";
                echo "Usando strtolower() o texto fica em minusculo<br>Antes = $nome<br>Depois = ".strtolower($nome);

                //Função ucfirst() : Acrecenta maiusculo a primeira letra de uma strig uc = upper case first = primeira
                $nome2 = "ana maria";
                $uc = ucfirst($nome2);
                echo "<br><br>Exemplo da fução ucfirst() abaixo<br>Antes = $nome2<br>Depois = $uc ";

                //Função ucwords() : Retorna cada palavra da string com a primeira letra em maiusculo.
                $ucw = ucwords($nome2);
                echo "<br><br>Exemplo da função ucwords() abaixo<br>Antes = $nome2<br>Dpois = $ucw ";
                
                //função strrev() : Reverte uma string 
                print"<br><br>".strrev($nome2);
                # ana maria
                # airam ana

                //Função strpos() : Retorna a posição em que se encontra a string procurada.
                $frase = "Estou aprendendo PHP";
                $pos = strpos($frase, "php"); # PHP esta sendo procurada dentro da frase, há diferença entre maiuslo e minusculo, usando a letra i ficaria stripos() e assim encontrara "php" dentro da string
                echo "<br><br>$frase<br/>A sigla PHP foi encontrada na posição $pos<br>";

                //Função substr_count() : retona quantas vezes um caractere ou palavra esta contido dentro de uma string
                $string = "Estou repetindo uma frase dentro da frase e usando a função substr_count() para encontrar as repetições da frase";
                $c = substr_count($string, "frase");
                echo "<br>$string<br><br>A palavra [frase] foi encontrada $c x dentro da string<br>";

                //Função substr() : Retorna um pedaço da string determinado pelos parametros opos a virgula. 
                $site = "Curso em Video";
                $sub = substr($site, 0, 5); # ($site, 6) ou ($site, -5, 2) ou ($site, -6)
                echo "<br>Dentro da variavel ->[$site$sub]<- da posição 0 contando 5 posições encontra-se -> $sub <br>";

                //Função str_pad() : Cria espaço antes apos ou em ambos em relação a string
                $str = "jonas";
                print ("<br>O meu professor ".str_pad($str, 10,"__",STR_PAD_RIGHT)."é lindo"); 
                print ("<br>O meu professor ".str_pad($str, 10,"__",STR_PAD_LEFT)."é lindo");
                print ("<br>O meu professor ".str_pad($str, 10,"__",STR_PAD_BOTH)."é lindo");

                //Função str_repeat() : Repete os caracteres passados 
                $txt = str_repeat("JO", 6);
                print("<br><br>O texto gerado foi $txt"); # repetição da variavel $txt 6x
                print("<br>".str_repeat("-",12)); # repetição do sinal 12 vezes

                //Função str_replace() : Replace significa substituir então neste caso troca-se de software para Programção
                $fra = "Gosto de estudar Software, Software é muito legal";
                $novafra = str_ireplace("software","Programação",$fra); # a palavra a ser trocada é software mas esta com a primeira letra em minusculo por isso deve-se adicionar [i] = ignore na função 
            
                echo "<br><br>Antes = $fra<br>Depois = ".$novafra;






            ?>
        </div>
    </body>
</html>




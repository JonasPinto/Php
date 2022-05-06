<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../_css/estilo.css">
        <meta charset="utf-8">
        <title>Array</title>
    </head>
    <body>
        <div>
            <pre>
                <?php
                    $n = array(3,5,8,2);
                    $n[] = 10; # aqui foi criado mais uma posição no array e adicionado o valor 10
                    print_r($n);

                    $c = range(2,20,5); # de 2 a 20 de 5 em 5 = [0] => 2 [1] => 7 [2] => 12  [3] => 17 
                    print_r($c);
                ?>

                <table border='1'><tr>

                <?php
                    foreach ($c as $v) {
                        echo"<td>$v ";
                    }
                ?>
                </table>
                
                <?php
                    $a = array ( 10=>5,
                                 3=>9,
                                 0=>8,
                                 5=>7   
                );
                $a[] = 6; # ao adicionar mais valores ao array ele cria novas posições apos o maior indice 
                $a[] = 10; 
                print_r($a);

                unset($a[12]); # desaloca (destrói) um indice dentro do array
                print_r($a);

                $pessoa = array(
                    "nome"=>"Jonas",
                    "idade="=>23,
                    "peso"=>78.5
                );
                $pessoa["fuma"] = true;
                print_r ($pessoa);

                foreach($pessoa as $indice => $valor){
                    echo "O indice $indice = $valor<br>";
                }

                $m = array (array(0, 1, 2), 
                            array(3, 4, 5), 
                            array(6, 7, 8));
                print_r($m);

                echo "O vetor \$m tem ".count($m)." elementos<br>"; # a função count() retorna a quantidade de elementos o vetor possui

                echo "<br>Utilizando a função vardump() podemos ver a quanti
dade de posições do vetor e os tipos de dados.";
                
                var_dump($m);

                /* Adicionando e eliminando elementos no inicio e no final dos vetores ou arrays*/

                $vet = array ("A", "J", "M", "x", "K");
                print_r($vet);

                array_push($vet,7); # inclui um elemento no final do array
                print_r($vet);

                array_pop($vet); # Elimina o ultimo elemento do vetor
                print_r($vet);

                array_unshift($vet, 7); # inclui um elemento no inicio do array
                print_r($vet);

                array_shift($vet); # Elimina o primeiro elemento do vetor
                print_r($vet);

                $n = array(3, 5, 8, 2);
                print_r($n);


                sort($n); # Ordena os elemento dentro do array ou vetor Obs -> crescente 0, 1, 2, A, B, c...
                print_r($n);

                rsort($n); # Ordena os elemento dentro do array ou vetor Obs -> reverso 3, 2, 1, 0, C, B, A...
                
                asort($n); # Ordena os elemento dentro do array OBS-> muda tambem os indices
               
                arsort($n); # Ordena os elemento dentro do array OBS->reverte e muda tambem os indices

                ksort($n); # Ordena as indices dentro do array não se importando com os elementos

                krsort($n); # Ordena de forma reversa as indices do array não se importando com os elementos

                ?>
            </pre>
        </div>
    </body>
</html>
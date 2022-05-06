<?php
function soma(){
    $num = func_get_args(); # Retorna um array contendo uma lista de argumentos da função
    $qt = func_num_args(); # Retorna o número de argumentos passados para a função
    $s = 0;
    for ($i = 0; $i < $qt; $i ++ ) {
        $s += $num[$i];  
    }
    return $s;

}

    function mutltiplica($n1, $n2){
        $m = $n1 * $n2;
        return $m;
    }

?>

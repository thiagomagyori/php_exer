<?php

$verdade = true;
$falso = false;


if(is_bool($verdade)){
echo "É um booleano $verdade"; //quando for true ele carrega o valor 1
}

echo "<br>";

if(is_bool($falso)){
    echo "É um booleano $falso"; // quando for carregado false ele vale como 0
    }

    echo "<br>";
//importante o 0 só é considerado falso quando ele é testado como ex abaixo
if(0 == false){
    echo "É um booleano";
}

echo "<br>";

if(is_bool(0)){
    echo "É um booleano testando com 0"; // não vai pegar como um falso pois aqui ele não está sendo testado na condição
    }

    echo "<br>";

    if($falso == 0){
echo"ok";
    }



//praticamente temos ligado ou desligado

?>
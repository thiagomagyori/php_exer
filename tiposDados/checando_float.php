<?php

$variavel1 = 30.65;
$variavel2 = 2.65;
$variavel3 = "thiago";

if(is_float($variavel1)){ // true vai ser imprimido na tela
echo "Variavel 1 é um float";
}

echo "<br>";

if(is_float($variavel2)){ // true vai ser imprimido na tela
    echo "Variavel 2 é um float";
    }

    echo "<br>";

    if(is_float($variavel3)){ //False não vai imprimir isso
        echo "Não é um float";
    }

    echo "<br>";

    if(is_float("teste")){ //False não vai imprimir isso
        echo "Não é um float";
    }
?>
<?php

//cast serve para saber se uma variavel é realmente string, int, float etc

$a = (int) "12";

echo "$a";
echo"<br>";
echo $a + 10;

echo"<br>";


//então resumindo que aqui temos a certeza de que é um numero int
if ($a === 12) {
    echo"é idêntico a 12 <br>";
}


//então temos a conversão de "2.37" para um float
$b = (float) "2.37";

if ($b === 2.37) {
    echo"é idêntico a 2.37 <br>";
}


$d = (int) "covertendo";

echo $d . "<br>"; //imprime 0

$e = (int) 12.9;

echo $e . "<br>"; //imprime 12 como o valor 12.9 é um float ele arredondou para baixo no 12 que vira inteiro 



$f = (int) true;

echo $f . "<br>"; //imprime 1 que true vale 1



// 1 para verdadeiro 0 para false


//convertendo array
$ar = (int) [1, 5,15, 30];

echo $ar . "<br>";




?>
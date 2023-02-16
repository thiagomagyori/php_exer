<?php

// sempre tenho que lembrar as ordem dos operadores é igual na matematica



// aqui então ele fez 5x2 e depois + 5 = 15 
echo 5 + 5 * 2;
echo "<br>";


//aqui eu isolei ele então ficou 5+5 =10 x2 =20
echo (5 + 5) * 2;
echo "<br>";

echo "CONTA DIVIDIR";
echo "<br>";
// primeiro ele vai fazer 5 dividido por 2 depois vai somar mais 5 total = 7.5
echo 5 + 5 / 2;

echo "<br>";
echo (5 + 5) / 2;

echo "<br>";

// aqui já é usando variaveis 

//as conta basicas é msm coisa de cima porem podemos fazer os calculos e guardar em uma variavel


$a = 10;
$b = 10;
$c = 10;
$resultado = NULL;

$resultado = $a * $b * $c; // nesse ponto ele multiplicou 10x10 = 100 e depois 100x10 = 1000 e guardou esse valor em resultado

echo $resultado;








?>
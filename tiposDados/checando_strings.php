<?php

$nome = "hiago";
$numero = 10;

if (is_string($nome)) { //true
    echo "Essa variavel é uma string";
}

echo "<br>";

if (is_string($numero)) { //false
    echo "Essa variavel é uma string";
}else {
    echo "Essa variavel não é uma string";
}



?>
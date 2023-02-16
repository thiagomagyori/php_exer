<?php

//forma para se checar se um numero é inteiro is_int

if(is_int(5)){ //true
echo "É um numero inteiro";
}else{
    echo "Não é um numero inteiro";
}

echo "<br>";

if(is_int(5.3)){ //false
    echo "É um numero inteiro";
    }else{
        echo "Não é um numero inteiro";
    }

    echo "<br>";

    $numero = 10;

    if(is_int($numero)){ //true
        echo "È um numero inteiro com o valor 10";
    }

?>
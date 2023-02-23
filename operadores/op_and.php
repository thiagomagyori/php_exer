<?php


// aqui no AND (&&) testamos 2 comparações 
// email AND (&&) senha é igual a que está cadastrado no banco de dados? por exemplo



//Back-end simulando um banco de dados
$passwd = 123456;
$email = "thiagosilva@gmail.com";

//aqui ele fala senha é == igual a 123456 E email é igual a thiagosilva@gmail.com
// VERDADEIRO COM VERDADEIRO TRUE ENTRA NO IF
if ($passwd == 123456 && $email == "thiagosilva@gmail.com") {
    echo "EMAIL E SENHA ESTÁ CORRETO";
} else {
      echo "EMAIL OU SENHA ESTÁ INCORRETOS";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


if ($passwd == 123456 && $email == "thiagolva@gmail.com") {
    echo "EMAIL E SENHA ESTÁ CORRETO";
} else {
      echo "EMAIL OU SENHA ESTÁ INCORRETOS <br>";
}

echo "<br>";

$a = 20;
$b = 10;
$c = 30;
$d = 5;
$e = 20;


// true e true
if ($a > $b &&   $a >= $e) {
echo "Entro no if 1";
}

echo "<br>";
echo "<br>";

// true e true
if ($a > $b &&   $c > $e) {
    echo "Entro no if 2";
    }

echo "<br>";
echo "<br>";
    
//  criar diversas operações aqui já tenho como testar varias operações o php isola da esquerda para direita

//          true             true
if ( ($a > $b &&   $c > $e) && 10 > 2) {
    echo "Entro no if 3"; //sendo 2 true entra no if
    }

echo "<br>";
echo "<br>";

//          true             true
if ( (15 > 3 &&   7 > 1) && "thiago" === "thiago") {
    echo "Entro no if 4"; //sendo 2 true entra no if
    }

    echo "<br>";
    echo "<br>";

//aqui deu true      aqui tambem true
    if(10 > 5        && 1) { //por que 1 é true então deu 2 true entro no if
        echo "Entro no if 5";
    }

    echo "<br>";
    echo "<br>";

// já aqui na primeira deu true e na segunda deu false pq 0 é false
    if(10 > 5 && 0) { 
        echo "Entro no if 6";
    }








?>
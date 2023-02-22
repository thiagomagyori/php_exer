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
      echo "EMAIL OU SENHA ESTÁ INCORRETOS";
}



?>
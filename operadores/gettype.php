<?php

$operacao = "5" * 12;


echo $operacao . "<br>" ;

echo gettype($operacao); //com gettype não precisamos mais ficar tentando adivinha o que é na variavel com is_float
echo"<br>";              // is_int etc 

echo gettype([]);// ele sabe que é um array
echo"<br>";     
echo gettype(1.2);// ele sabe que é um double/float <-- msm coisa
echo"<br>";     
echo gettype("teste");// ele sabe que é uma string













?>
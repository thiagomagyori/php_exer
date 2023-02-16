<?php

$testvar = "Thiago";
echo "$testvar Global 1 <br>";

//como true para ele entra no if
if(true){
    $testvar = "Gabriela";//trocando o valor da variavel
    echo "$testvar IF <br>";
}

echo "$testvar Global apos o IF <br>";

//aqui dentro da função eu não consigo acessar a variavel testvar se eu não declarar ela aqui dentro da função
function teste() {
    $testvar = "Thiago"; // se eu não fisesse isso eu não conseguia acessar a variavel e fui obrigado a mudar o valor dela
    echo "$testvar Global dentro da função que fui obriado a alterar o valor dela<br>";
}

teste();

function testandoG(){
    global $testvar; //nesse modo eu declaro ela dentro da função como global então se eu mudar o valor dela muda em tudo
    $testvar = 5;
    echo "$testvar Global dentro da função que ela foi definada como global<br>";

}

testandoG();
echo "$testvar o valor foi altera apos passa pela função que foi definida ela como 5<br>";

?>
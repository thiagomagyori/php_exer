<?php


//aqui ela esta com global vale por todo codigo
$variavel = 10;
echo "$variavel GLOBAL";
echo"<br>";

//aqui ela está como local e seu valor sempre vai ser carregada com 5 quando a função rodar e for finalizada 
//caso seu valor foi alterado e=no final da função ela volta para 5
function imprimir (){

$variavel = 5;
echo "$variavel LOCAL";

}


//nesse ponto falei que o valor dela passa a ser 20 agora, porem logo abaixo eu chamo ela na função e o valor dela esá 5 ainda
//então isso que defini local e global
$variavel = 20;
echo "$variavel GLOBAL";
echo"<br>";

//chamando a função
imprimir();





?>
<?php

/*para se ter uma else if tem que primeiro se ter um if 
se o primeiro if e o segundo if for true ele vai entra apenas no primeiro
se o primeiro for false e o seundo true ele entra apenas no segundo*/


if (5 >2) {
 echo "Entrou no primeiro if";
} elseif (10 >5) {
    echo "não vai entrar aqui";
}

echo "<br>";
echo "<br>";


if (5 < 2) {
    echo "Entrou no primeiro if";
   } elseif (10 >5) {
       echo "Entrou o elseif ";
   }

   echo "<br>";
   echo "<br>";

//false no 2 enão não entra em nemhum
   if (5 < 2) {
    echo "Entrou no primeiro if";
   } elseif (10 < 5) {
       echo "Entrou o elseif ";
   }

   echo "<br>";
   echo "<br>";


//if e elseif false ai ele executa o else
if (5 < 2) {
    echo "Entrou no primeiro if";
   } elseif (10 < 5) {
       echo "Entrou o elseif ";
   }else{
    echo "Entrou no else";
   }


   echo "<br>";
   echo "<br>";


   //if e elseif false ai ele executa o else
if (5 < 2) {
    echo "Entrou no primeiro if";
   } elseif (10 < 5) {
       echo "Entrou o elseif ";
   }elseif( 100 > 99 ){
    echo "Entrou no segundo else if pq apenas ele deu true";
   }else{
    echo "não entra aqui";
   }


   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";


//ex

$velocidadeMax = 60;
$velo = 60;



//se senão

//aqui primeiro checo se a velocidade atual e comparo se ela é menor que a velocidade maxima
//se for menor entra no if 
//acima de 60
if ($velo < $velocidadeMax ) {

echo "Velocidade dentro do permitido km/h";

//senão entra no ifelse
//aqui já ve se ela é igual a velocidade maxima 60
//na media
} elseif ($velo == $velocidadeMax) {
 
echo "Tome cuidado você está no limite da velocidade permitida";

// COMO JÁ FEZ 2 CHECAGEM AI ENTRA NO ULTIMA CASO QUE RESTOU
//abaixo
} else {

echo "Está acima de 60 km/h multa aplicada!";

}



















?>
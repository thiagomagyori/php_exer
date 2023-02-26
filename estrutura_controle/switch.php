
<?php

// estrutura de condição

/*ele sempre vai checar uma variavel*/


// o break serve para quando um case for executado e para a execução e não executa o restante

$tabuada = 9;

switch ($tabuada) {
    case 1;
        echo "Tabuada do 1";
        break;

        case 2;
        echo "Tabuada do 2";
        break;

        case 3;
        echo "Tabuada do 3";
        break;

        case 4;
        echo "Tabuada do 4";
        break;

        case 5;
        echo "Tabuada do 5";
        break;

        case 6;
        echo "Tabuada do 6";
        break;
    
    
    // default é usado quando nenhuma condição for satisfeita ai entra no default
    default:
    echo "Tabuada não encontrada!";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "JOGO USANDO SWITCH";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$sorteio = rand (1,10); // aqui rand vai sortear um numero aleatorio e jogar na variavel sorteio


switch ($sorteio) {

case 1;
echo"Não foi dessa vez tente novamente"; // no case pode colocar um bloco de codigo para ser executado
break;

case 2;
echo"Passou perto tente novamente";
break;

case 3;
echo"Da proxima vez você vai ganhar";
break;

case 4;
echo"Não desista você é capaz de vencer esse jogo";
break;

case 5;
echo"Parabens você ganhou 1 milhão";
break;

case 6;
echo"Se é pé frio tenta novamente";
break;

case 7;
echo"Não foi dessa vez tente novamente";
break;

case 8;
echo"Você ganhou 30 reais";
break;

case 9;
echo"Você ganhou um misto quente";
break;


case 10;
echo"Não foi dessa vez tente novamente";
break;


}



















?>
<?php
/*um valor vai na esquerda o outro na direita e o operador no meio apos isso um resultado dessa expresão 
sera retornado como boleano VERDADEIRO OU FALSO*/

//Nome digitado no front end
$nome_digitado = "Thiago";

$nome_db = "Thiago";


if ($nome_digitado == $nome_db) {
    echo "Nome está correto";//true
} else {
echo "Nome está incorreto";//false
}

echo "<br>";

//data digitada no front end
$data_nas = 13021992;

//data cadastrada no banco de dados
$datanas_db = 1302192;


if ($data_nas == $datanas_db) {
    echo "Data está correta";//true
} else {
echo "Data está incorreta";//false
}
echo "<br>";
echo "<br>";
echo " OPERADOR IDÊNTICO <br>";


//Operador idêntico ele checa os 2 valor e também ve se os 2 são string por ex ou se os 2 são um numero int por ex
// usamos quando queremos uma validação bem segura para saber se 2 valores são idênticos

if (4 === 4) {
    echo "é idêntico (true)";
}

echo "<br>";


//aqui ele pega que um é numero e o outro é um string
if (4 === "4") {
    echo "é idêntico (true)";
}else {
    echo "não é idêntico (false)";
}

//pode fazer os teste com os dados em variaveis que é msm coisa "esava com preguiça de fica criando variaveis"
echo "<br>";
echo "<br>";
echo "OPERADOR  DIFERENTE != <br>";



// OPERADOR  DIFERENTE !=

//ele sempre vai checar se o numero é diferente

//Exemplo: 5 != 5 flase pq não é diferente é igual
//Exemplo: 10 != 5 true pq é diferente
// podemos usar tambem dentro do if false != "thiago" por exemplo

if (10 != 12) {
    echo "10 é diferente de 12 true";
}

echo "<br>";

if (5 != 5){
    echo "é diferente";
}else {
    echo "5 é igual a 5 (false)"; //false
}

echo "<br>";
echo "<br>";
echo "OPERADOR  DIFERENTE != <br>";

echo "<br>";
echo "<br>";
echo "OPERADOR  NÃO IDÊNTICO A !== <br>";

//aqui temos um ponto muito importante pois esse operador é diferente do operador (===) idêntico
//no operador === ele só aceita se  5 === 5 se fosse 5 === "5" ele não aceita pois 
// um é string o outro é int 

//AQUI NO OPERADOR  NÃO IDÊNTICO A ELE ACEITA POR EX 5 !== "5"

if (5 !== 3) {
    echo "Não é idêntico (true)"; //true
}

//essa msm comparação no ===  5 é idêntico a 3 NÂO! ai ele retorna false e não entra no IF
//agr aqui temos 5 não é idêntico a 3 SIM! 5 não é idêntico a 3 retorna true entra no IF



echo "<br>";

if (5 !== "5") {
    echo "Não é idêntico (true)"; //true
}

echo "<br>";

if (5 !== 5) {
    echo "Não é idêntico (true)"; //true
} else{
    echo "E idêntico (false)";
}

echo "<br>";
echo "<br>";
echo "OPERADOR MAIOR OU IGUAL >= MENOR OU IGUAL <= <br>";

$nun1 = 20;
$nun2 = 10;
$nun3 = 50;
$nun4 = 20;

if ($nun1 > $nun2) {
    echo "20 é maior que 10 (true)"; //true entra no if
}

echo "<br>";


if ($nun2 < $nun1) {
    echo "10 é menor que 20 (true) <br>"; //true entra no if
}

echo "Maior ou igual >= <br>";


//aqui ele entra no if se for maior e se for igual o numero, temos 2 posibildade de true
if ($nun3 >= $nun1) {
    echo "Maior ou igual 50 é maior que 20 <br>";
}


if ($nun2 <= $nun3) {
    echo "10 é menor que 50 <br>"; //true
}

if ($nun1 <= $nun4) {
    echo "20 é igual a 20 <br>"; //true
}




























?>
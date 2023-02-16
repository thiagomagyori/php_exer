<?php
/*no php temos um acoisa que é a mudaça implicita que ocorre quando uma varial 
é string por ex e recebe um valor ela passa a ser int ou float dependendo do caso*/

echo 5 * 5;
echo "<br>";

if(is_int(5*5)){
    echo "É UM INTEIRO";
}


echo "<br>";
//concatenação em php ultilizamos o . porem tem que fica esperto pois o resultado não vai ser um valor inteiro 
//pq juntando 2 e 3 temos o valor 23 porem ele forma como uma string
echo 2 . 3;
echo "<br>";

//vamos testar pra ver se é 

if(is_string(2 . 3)) {
    echo "É UMA STRING TEXTO";
}
/*IMPORTANE SE ATENTAR NESSE PONTO POIS AS VEZES EU ESTAVA ESPERANDO UM VALOR COMO 23 ACHANDO QUE ESTAVA JUNTANDO OS 
2 VALOR E NÃO TIVE ENTÃO POR ISSO TEMOS QUE CHECAR ANTES COM IS_INT IS_FLOAT ETC*/

echo "<br>";
echo "<br>";
echo "<br>";


//isso é visto em um formulario de cadastro onde temos um campo nome sobrenome ai depois concatenamos tudo
$nome = "Thiao";
$sobrenome = "Magyori";

//aqui ele junta nome espaço sobrenome e guarda tudo em nome completo
$nomecompleto = $nome . " " . $sobrenome;
echo "BEM VINDO: $nomecompleto";








?>
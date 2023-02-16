<?php
//aqui nesse modelo podemos trabalhar com nomes "chaves" indicadores para cada posição do array

$array = ['nome'=>"Thiago", 'sobrenome'=>"Magyori"];

print_r($array);

//imprimindo por indice
echo "<br>";

echo "$array[sobrenome]";

echo "<br>";

//aqui já consigo testar algo que tem dentro do array 
if( $array['sobrenome'] == "Magyori" ) {
echo"O sobrenome Tem Magyori";
}


echo "<br>";

//outros ex podemos atribuir os valor que tem dentro dos array em uma variavel

$array_carro = ['modelo'=>"Gol",'ano'=>2023,'cor'=>"Red"];

$ano = $array_carro['ano'];
$cor_carro = $array_carro['cor'];

echo "<br>";
echo "<br>";

echo "Ano de Fabricação: $ano Cor: $cor_carro";



echo "<br>";
echo "<br>";

$car_pess = ['nome'=>"Thiago",'idade'=>12,'casado'=>true];

if( $car_pess['idade'] > 18){
echo "Você é maior de 18 anos";
}else
{
    echo "Você é menor que 18 anos";
}

?>
<?php

/* aqui na static o valor que carrega dentro de uma variavel dentro da função
quando não é static toda que vez que a função é exucutada o valor dela é resetado para
o valor original dela já se ela for static ela vai guardar o valor que foi passado para ela */

function normal() {

$variavel = 0;
$variavel++;
echo "$variavel <br>";
}

normal();
normal();
normal();


echo "<br>";
echo "<br>";
echo "<br>";

// lá no navegador foi imprimido 1 1 1 pois ele rodou a função incrementou + 1 e finalizou 


function normal_static() {
    static $variavel = 0; //declaração na frente da variavel
    $variavel++;
    echo "$variavel <br>";
}

normal_static();
normal_static();
normal_static();

//pronto dessa forma o valor vai ser sempre encrementado e descrementado 












?>
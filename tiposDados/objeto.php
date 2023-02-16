<?php

//para criar um objeto primeiro precisamos de um molde que é a classe

class Carro{

    //metodos ações do objeto
    function andar() {
        echo "Andando";
    }

}

//criar um objeto a partir do molde Pessoa

$modelo = new Carro();

$modelo->nome = "Gol 1.0";

echo $modelo->nome;

echo "<br>";

$modelo->andar();

?>
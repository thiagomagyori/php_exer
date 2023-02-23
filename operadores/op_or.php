<?php

//operador or || "OU" sempre vai dar verdadeiro quando um dos lados der verdadeiro
// ou os 2 lados for verdadeiro

//CONSULTAR A TABELA VERDADE


// true      OU   true
if (10 < 15  || 5 > 2){
echo"Entrou no if true e true <br>";
}


// true      OU   true
if (10 < 15  || 5 > 10){
    echo"Entrou no if true e false <br>";
    }

//false     OU   false
if (10 < 8  || 5 > 10){
    echo"Não entrou no if false e false <br>";
    }

//false     OU   true
if (10 < 8  || 5 > 1){
    echo"Entrou no if false e true <br>";
    }

//false    OU true
if (5 > 8  || 1){
    echo"Entrou no if porque 1 vale como true <br>";
    }












?>
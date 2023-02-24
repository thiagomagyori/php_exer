<?php
//if com operador logico



//true    and    true
if (10 > 3 && 2 === 2) {

echo "Entrou no if";
}

echo"<br>";
echo"<br>";

$var1 = "thiago"; //string
$var2 = 10; // int
$var3 = 12.7; // float
$var4 = true; // bool



if (is_bool ($var4)) {
    echo"entrou no if é bool";
}

echo"<br>";
echo"<br>";

if (is_bool ($var3)) {
    echo"entrou no if é bool";
}else{
    echo"entrou no else";
}


echo"<br>";
echo"<br>";


$peso = 72;


if ($peso > 80) {
    echo"pacote fora das normas";
}else {
    echo"pacote está dentro das normas";
}





?>
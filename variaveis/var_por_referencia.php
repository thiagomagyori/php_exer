<?php

//variavel por referencia


$x = 10;
$y =& $x;

echo $y;
echo "<br>";
echo $x;

$y = 30;
echo "<br>";
echo "apos a mudança";
echo "<br>";
echo $y;
echo "<br>";
echo $x;


// não importa se eu mudar o valor de y o valor de x tambem é alterado e assim por diante
// isso tambem acontece com string
?>
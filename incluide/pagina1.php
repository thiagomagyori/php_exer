<!--MUITO IMPORTANTE NESSE METODO QUE USAMOS O INCLUDE SE DER UM PAU NO ARQUIVO TODO O SITE NÃO FICA PARADO OU TRAVADO COM UMA MESSAGEM DE AVISO -->
<!-- ELE VAI PARA APENAS O ARQUIVO QUE ESTIVER OFF NÃO VAI MOSTRA ESSE PEDAÇO DO CODIGO MAIS O RESTO VAI RODAR NORMAL-->
<!-- USANDO O REQUIRE ELE DA UM FATAL ERROR ELE PARA A EXECUÇÃO-->


<?php

include "pagina2.php";

?>

<p>Apos o include</p>

<!--trazendo o valor da variavel lá da outra pagina -->

<p>Olá: <?php  echo $variavel?> </p>
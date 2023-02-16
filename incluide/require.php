<!-- trabalhando com require porem aqui tem que ficar esperto pois se ele não encontrar um arquivo ou esse arquivo esiver 
corrompido algo do tipo ele para todo o sistema com um fatal errror -->

<!-- chamando a pagina-->
<?php

require "secaoPro.php"; //por esse comando ser o primeiro a está sendo executado se ele der pau para tudo o resto que está abixo dele

?>

<h2>Mais Categorias</h2>



<?php

require "arquivos/funca.php"; // desse modo que acessamos as sub pastas

?> 



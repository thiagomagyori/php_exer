<?php
//ultilizamos para exibir conteudo
//Back-end nome cadastrado lá no banco
$nome = "thiago";


?>

<!-- Formulario HTML Fraont-end-->
<form action="">
<div>
    <input type="text" value="<?= $nome ?>"> <!-- Nesse jeito ele preenche o formulario-->
</div>

<div>
<input type="submit" value="Enviar">
</div>

</form>

<!--ISSO É USADO QUANDO O USUARIO VAI EM UM SITE ALTERAR SEU CADASTRO O FORMULARIO JÁ VEM PRE PRENCHIDO PARA ELE -->
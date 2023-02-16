<?php
// Trabalhando com imprensão dinamica

include_once "backend.php";


?>

<h1>Sistema WEB</h1>
<p><?= $nome; ?> Seja bem vindo</p>

<h2>Confira Nossos Produtos</h2>

<ul>
<?php foreach ($produtos as $produto): ?>
<li> <?= $produto; ?></li>
<?php endforeach; ?>
</ul>
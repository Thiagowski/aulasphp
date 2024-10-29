<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Arrays no PHP</h1>
    <hr>

<?php
// array numérico/tradicional
$bandas = ["tyler the creator", "System of a down", "mc carol bandida", "aerosmith"];

$cursos = array("Node.js", "Design", "Nutrição");
?>

<h2>Acessando os dados do array</h2>
<p>Rock Progressivo: <?=$bandas[2]?> </p>
<p>ontem estivemos com a turma de <?=$cursos[2]?></p>

<hr>

<?php
// Array associativo
$filme = [
"titulo" => "Senhor dos Anéis",
"autor" => "J.R.R Tolkien",
"lancamento" => 2001,
"genero" => "Fantasia"

];
?>

<h2>Acessando os dados do array associativo</h2>
<p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["lancamento"]?> </p>
<hr>

<h2>Comandos uteis para analise de Arrays</h2>

<h3>print_r(NomeArray)</h3>
<pre><?=print_r($bandas)?></pre>

<h3>var_dump(NomeArray)</h3>
<pre><?=var_dump($bandas)?></pre>

    </div>

    <?php include "redes-sociais.html" ?>

</body>
</html>
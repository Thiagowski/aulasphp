<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Revisando HTML e PHP</title>
</head>
<body>
    <h1>Revisando o básico</h1>
    <hr>
    
<?php
// criar duas variaveis e/ou constantes
const NOME = "Chapolin Colorado";
$idade = 25;


/* Exibir no HTML uma frase da seguinte forma */

// Olá! Meu nome é chapolin colorado e tenho 25 anos

/* Desafios:
- O nome deve aparecer em italico e com cor diferente no texto
- a idade deve aparecer apenas com cor de fundo diferente. */
?>


<p> Olá! Meu nome é <i class="text-danger"><?=NOME?></i> e tenho <span class="text-bg-primary"><?=$idade?></span> anos.</p>;







</body>
</html>
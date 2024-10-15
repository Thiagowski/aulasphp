<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>
    <h2>Declaração e saída usando echo</h2>

<?php
// Variaveis
$curso = "Programador Web";
$ano = 2024;
$area = "Back-End";

// Estamos no programador web em 2024.

// Saida interpolada (usando aspas duplas)
echo "<p>Estamos no $curso em $ano.</p>";

// Com aspas simples, PHP NÃO interpreta variavél
echo '<p>Estamos no $curso em $ano.</p>';

// Constantes
define("AUTOR", "Thiago"); //tradicional, antiga
const EMPRESA = "thigas ent."; // nova, moderna

echo "<p>".AUTOR." trabalha na empresa ".EMPRESA."</p>";

?>



</body>
</html>
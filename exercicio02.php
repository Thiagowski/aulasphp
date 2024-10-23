<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 02</title>
</head>
<body>
<div>    

<h2>Salario do joãozinho</h2>
<!-- ENTRADA DA DADOS , INFORMAÇÃO DO SALARIO ATUAL -->
<?php
// ANALISE DAS CONDIÇÕES E CALCULOS
$salario = 1000;
if ($salario < 500) {
    $novosalario = $salario * 1.15; 
} elseif ($salario <= 1000) {
    $novosalario = $salario * 1.10; 
} else {
    $novosalario = $salario * 1.05; 
}


?>
<!-- SAIDA DE DADOS -->
<p>O salario antigo era <?=$salario?> </p>
<p>O novo salario é de <?=$novosalario?></p>

<p>Salario antigo: R$
    <?=number_format($salario,2,",",".") ?>
</p>

<p>Novo Salario: R$
    <?=number_format($novosalario,2,",",".") ?>
</p>

</div>
</body>
</html>
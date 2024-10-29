<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 03</title>
<style>
li:nth-child(odd){
color:blue;}

li:nth-child(even){
color: blueviolet;
}


</style>

</head>
<body>


 <ol>
<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho","Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

for($i = 0; $i < count($meses); $i++){
?>

    
 <li>
    <?=$meses[$i]?>
</li>


<?php
}
?>
</ol>

</body>
</html>
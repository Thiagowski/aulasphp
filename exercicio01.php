<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
        <h1>Exercício 01</h1>


        <?php
        $dados = [
            "nome_usuario" => "thiago.silva",
            "senha" => "233444555",
            "idade" => 27,
            "cidade" => "São Paulo",
            "telefones" => ["11-2135-0300", "11-91234-5678"]
        ];
        ?>

        <ol>
            <li>Nome de usuário: <?= $dados["nome_usuario"] ?></li>
            <li>Idade: <?= $dados["idade"] ?> anos</li>
            <li>Cidade: <?= $dados["cidade"] ?></li>
            <li>Telefone: <?=$dados["telefones"][0]?></li>
            <li>Telefone: <?=$dados["telefones"][1]?></li>
            </li>
        </ol>

    

</body>

</html>
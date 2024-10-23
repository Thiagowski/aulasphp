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
        // array associativo
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

        <!-- Array NUMÉRICO/INDEXADO -->
        <?php
        $dados2 = [
        
            'chapolin.colorado',
            '123teste',
            30,
            'São Paulo',
            ["(11)999-5478", "(11)924-5478"]
 
        ]
        ?>

<h2>Versão de saida usando arrays NUMÉRICO/INDEXADO</h2>
        <ol>
            <li>Nome: <?= $dados2[0] ?></li>
            <li>Idade: <?= $dados2[2] ?></li>
            <li>Cidade: <?= $dados2[3] ?></li>
            <li>Celular: <?= $dados2[4][0] ?></li>
            <li>Celular: <?= $dados2[4][1] ?></li>
        </ol>

</body>

</html>
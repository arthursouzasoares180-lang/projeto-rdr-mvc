<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Foragidos - Red Dead Redemption 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Rye&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="pagina">

    <p class="chamada">★ Red Dead Redemption 2 ★</p>
    <h1>Registro de Foragidos</h1>

    <p>
        <a href="index.php?acao=cadastrar" class="botao">+ Cadastrar foragido</a>
    </p>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Facção</th>
            <th>Habilidade</th>
        </tr>

        <?php foreach ($personagens as $personagem) { ?>

            <tr>
                <td><?php echo $personagem["id"]; ?></td>

                <td>
                    <?php echo htmlspecialchars($personagem["nome"]); ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($personagem["faccao"]); ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($personagem["habilidade"]); ?>
                </td>
            </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>

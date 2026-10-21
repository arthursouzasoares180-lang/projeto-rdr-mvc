<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar foragido - Red Dead Redemption 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Rye&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="pagina">

    <p class="chamada">★ Red Dead Redemption 2 ★</p>
    <h1>Cadastrar foragido</h1>

    <?php if ($mensagem != "") { ?>
        <p class="erro"><?php echo htmlspecialchars($mensagem); ?></p>
    <?php } ?>

    <form method="POST" action="index.php?acao=cadastrar">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Facção:</label>
        <input type="text" name="faccao" placeholder="Ex.: Gangue Van der Linde" required>

        <label>Habilidade:</label>
        <input type="text" name="habilidade" placeholder="Ex.: Pontaria e rastreamento" required>

        <button type="submit" class="botao">Cadastrar</button>

    </form>

    <p>
        <a href="index.php">&larr; Voltar para a lista</a>
    </p>

</div>

</body>
</html>

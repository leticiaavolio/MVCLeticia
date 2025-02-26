<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php $render('header');?>
    <main>
        <nav>
            <a href="<?= $base;?>/lembretes/novo">Adicionar Lembretes </a>
        </nav>
    </main>
    <?php $render('footer');?>
</body>
</html>
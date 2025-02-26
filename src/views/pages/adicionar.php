<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Lembrete</title>
</head>
<body>
    <?php $render('header');?>
    <h2>Adicionar Lembrete</h2>
    <form action="<?=$base;?>/lembretes/novo" method="post">
        <div><input type="text" name="titulo" id="" placeholder="Título do Lembrete"></div>
        <div><textarea name="corpo" id="" placeholder="Descrição do Lembrete"></textarea></div>
        <input type="submit" value="Criar">
    </form>
    <?php $render('footer');?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembretes</title>
</head>
<body>
    <?php $render('header');?>
    <div>
        <p>Olá, <?php echo $user?></p>
        <p>Perfil: <?php echo $perfil?></p>
    </div>
    <h2>LEMBRETES</h2>
    <p>Sou a página principal de lembretes.</p>
    <!--  estrutura de repetição  -->
      <?php foreach ($lembretes as $lembrete):?>
    <div>
    <h3>Título => <?= $lembrete['titulo']?></h3>
    <p>Descrição: <?= $lembrete['corpo']?></p>
    </div>
    <?php endforeach?>
    <?php $render('footer');?>
</body>
</html>
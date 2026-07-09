<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/teste.css" />
</head>
<body>
    <div id="tudo">
    <p id="text"> Nomes e Emails:<P>
    <div id="div_nomes_emails">
    <?php if (!empty($dados['usuarios'])): ?>
        <?php foreach ($dados['usuarios'] as $usuario): ?>
            <div id="nome_emails"> 
                <h2 id="nome_usuario"><?= htmlspecialchars($usuario['email']) ?></h2>
                <h3 id="nome_usuario"><?= htmlspecialchars($usuario['nome']) ?></h3>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum usuário encontrado.</p>
    <?php endif; ?>
    </div>
    </div>
</body>
</html>
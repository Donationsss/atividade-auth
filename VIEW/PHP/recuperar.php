<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/recuperar.css">
    <title>Atividade Auth</title>
</head>
<body>
    <form action="../../CONTROLLER/CodigoController.php" method="POST">
        <div class="container">
            <div class="campos-login">
                <h1>Redefinir senha</h1><br>
                <?php if (isset($_GET['erro'])): ?>
                    <div style="color: red;">As senhas não coincidem!</div>
                <?php endif; ?>
                <label for="nova_senha">Nova senha</label>
                <input type="password" id="name" name="nova_senha" placeholder="Digite uma nova senha" required><br>
                <label for="confirmar_senha">Confirme sua senha</label>
                <input type="password" id="password" name="confirmar_senha" placeholder="Confirme sua nova senha" required><br>
                <button type="submit" id="login-button">Atualizar senha</button><br>
            </div>
        </div>
    </form>
</body>
</html>
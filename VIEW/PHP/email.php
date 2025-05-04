<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/email.css">
    <title>Atividade Auth</title>
</head>
<body>
    <form action="../../CONTROLLER/CodigoController.php" method="POST">
        <div class="container">
            <div class="campos-login">
                <h1>Redefinir senha</h1><br>
                <?php if (isset($_GET['erro'])): ?>
                    <div style="color: red;">Email não encontrado!</div>
                <?php endif; ?>
                <label for="email">Qual seu email?</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required><br>
                <button type="submit" id="login-button">Solicitar código</button><br>
            </div>
        </div>
    </form>
</body>
</html>
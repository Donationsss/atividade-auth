<?php if (isset($_GET['sucesso'])): ?>
    <div style="color: green;">Senha alterada com sucesso!</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Atividade Auth</title>
</head>

<body>
    <form action="../../CONTROLLER/AuthController.php" method="POST">
        <?php if (isset($_GET['erro'])): ?>
            <div class="erro-login">Email ou senha inválidos!</div>
        <?php endif; ?>
        <div class="container">
            <div class="campos-login">
                <h1>Login</h1><br>
                <label for="name">Email</label>
                <input type="email" id="name" name="email" placeholder="Digite seu email" required><br>
                <label for="password">Senha</label>
                <input type="password" id="password" name="senha" placeholder="Digite sua senha" required><br>
                <input type="checkbox" id="lembre-de-mim" checked>
                <div class="div-check">
                    <label id="issoai">Lembre de mim</label>
                    <a href="../PHP/email.php" target="_blank">Esqueci minha senha</a><br><br>
                </div>
                <a href="../PHP/registro.php">Registre-se</a>
                <a href="../PHP/issoai.php">Dashboard</a>
                <button type="submit" id="login-button">Login</button><br>
            </div>
        </div>
    </form>
</body>

</html>
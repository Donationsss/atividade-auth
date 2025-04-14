<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Atividade Auth</title>
</head>

<body>
    <div class="container">
        <div class="campos-login">
            <h1>Login</h1><br>
            <label for="name">Nome de usuário</label>
            <input type="text" id="name" placeholder="Digite seu usuário" required><br>
            <label for="password">Senha</label>
            <input type="text" id="password" placeholder="Digite sua senha" required><br>
            <input type="checkbox" id="lembre-de-mim" checked>
            <div class="div-check">
                <label id="issoai">Lembre de mim</label>
                <a href="../PHP/email.php" target="_blank">Esqueci minha senha</a><br><br>
            </div>
            <a href="../PHP/registro.php">Registre-se</a>
            <button id="login-button">Login</button><br>
        </div>
    </div>
</body>

</html>
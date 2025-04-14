<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/recuperar.css">
    <script src="../JS/recuperar.js"></script>
    <title>Atividade Auth</title>
</head>

<body>
    <div class="container">
        <div class="campos-login">
            <h1>Redefinir senha</h1><br>
            <label for="name">Nova senha</label>
            <input type="text" id="name" placeholder="Digite uma nova senha" required><br>
            <label for="password">Confirme sua senha</label>
            <input type="text" id="password" placeholder="Confirme sua nova senha" required><br>
            <button id="login-button" onclick="atualizar()">Atualizar senha</button><br>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registro.css">
    <script src="../JS/registro.js"></script>
    <title>Atividade Auth</title>
</head>

<body>
    <div class="container">
        <div class="campos-login">
            <h1>Registro</h1><br>
            <label for="name">Nome de usuário</label>
            <input type="text" id="name" placeholder="Digite seu usuário" required><br>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Digite seu email" required><br>
            <label for="name">Telefone</label>
            <input type="number" id="telefone" placeholder="Digite seu telefone" required><br>
            <label for="password">Senha</label>
            <input type="password" id="password" placeholder="Digite sua senha" required><br>
            <label for="password">Confirmar Senha</label>
            <input type="password" id="confirm-password" placeholder="Confirme sua senha" required><br>
            <button id="login-button" onclick="registrar()">Registrar</button><br>
        </div>
    </div>
</body>

</html>
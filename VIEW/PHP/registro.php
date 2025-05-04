<?php
    session_start();
?>

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
    <form action="../../CONTROLLER/CadastroController.php" method="POST">
        <div class="container">
            <div class="campos-login">
                <h1>Registro</h1><br>
                <label for="nomedeusuario">Nome de usuário</label>
                <input type="text" id="name" name="nomedeusuario" placeholder="Digite seu usuário" required><br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required><br>
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" required><br>
                <label for="senha">Senha</label>
                <input type="password" id="password" name="senha" placeholder="Digite sua senha" required><br>
                <label for="confirmarsenha">Confirmar Senha</label>
                <input type="password" id="confirm-password" name="confirmarsenha" placeholder="Confirme sua senha" required><br>
                <button type="submit" id="login-button">Registrar</button><br>
            </div>
        </div>
    </form>
</body>

</html>

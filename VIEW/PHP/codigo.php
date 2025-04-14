<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/codigo.css">
    <title>Atividade Auth</title>
    <script src="../JS/codigo.js"></script>
</head>

<body>
    <div class="container">
        <div class="campos-login">
            <h1>Redefinir senha</h1><br>
            <label for="codigo">Qual o código enviado?</label>
            <input type="number" id="codigo" placeholder="Digite o código" required><br>
            <button id="login-button" onclick="enviar()">Enviar código</button><br>
        </div>
    </div>
</body>

</html>
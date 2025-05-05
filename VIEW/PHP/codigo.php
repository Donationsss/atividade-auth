<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/codigo.css">
    <title>Atividade Auth</title>
</head>
<body>
    <form action="../../CONTROLLER/CodigoController.php" method="POST">
        <div class="container">
            <div class="campos-login">
                <h1>Redefinir senha</h1><br>
                <?php if (isset($_GET['erro'])): ?>
                    <div style="color: red;">Código inválido!</div>
                <?php endif; ?>
                <label for="codigo">Qual o código enviado?</label>
                <input type="number" id="codigo" name="codigo" placeholder="Digite o código" required><br>
                <button type="submit" id="login-button">Enviar código</button><br>
            </div>
        </div>
    </form>
</body>
</html>
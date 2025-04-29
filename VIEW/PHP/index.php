<?php
    require_once '../../SERVICE/conexao.php';
    if(isset($_POST['email']) || isset($_POST['senha'])) {
        
        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu email";
        } else if (strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            if($sql_query->num_rows == 1) {
                $usuario = $sql_query->fetch_assoc();
                $_SESSION['id'] = $usuario['id'];
                header("Location: ../PHP/home.php");
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos.";
            }
        }
        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Atividade Auth</title>
</head>

<body>
    <form action="" method="POST">
        <div class="container">
            <div class="campos-login">
                <h1>Login</h1><br>
                <label for="name">Email</label>
                <input type="email" id="name" name="email" placeholder="Digite seu usuário" required><br>
                <label for="password">Senha</label>
                <input type="password" id="password" name="senha" placeholder="Digite sua senha" required><br>
                <input type="checkbox" id="lembre-de-mim" checked>
                <div class="div-check">
                    <label id="issoai">Lembre de mim</label>
                    <a href="../PHP/email.php" target="_blank">Esqueci minha senha</a><br><br>
                </div>
                <a href="../PHP/registro.php">Registre-se</a>
                <button type="submit" id="login-button">Login</button><br>
            </div>
        </div>
    </form>
</body>

</html>
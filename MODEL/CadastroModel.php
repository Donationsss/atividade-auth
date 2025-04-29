<?php
class Usuario
{
    public static function buscarEmail($pdo, $email)
    {
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function cadastro($pdo, $nomedeusuario, $senha, $email)
    {
        $stmt = $pdo->prepare("INSERT INTO usuario (nome_de_usuario, senha, email) VALUES (?, ?, ?)");
        return $stmt->execute([
            $nomedeusuario,
            password_hash($senha, PASSWORD_DEFAULT),
            $email
        ]);
    }

    public static function novaSenha($pdo, $nSenha, $email)
    {
        $stmt = $pdo->prepare("UPDATE usuario SET senha = ? WHERE email = ?");
        return $stmt->execute([
            password_hash($nSenha, PASSWORD_DEFAULT),
            $email
        ]);
    }
}
?>

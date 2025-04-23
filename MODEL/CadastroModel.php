<?php
    require '../SERVICE/conexao.php';

    function register($nomedeusuario, $email, $telefone, $senha){
        $conn = new usePDO();
        $instance = $conn->getInstance();
        $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (nome_de_usuario, senha)
        VALUES (?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$nomedeusuario, $hashed_password]);

        $result = $stmt->rowCount();
        return $result;



    }
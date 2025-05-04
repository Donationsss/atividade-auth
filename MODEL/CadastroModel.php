<?php

require '../service/conexao.php';

function register($nomedeusuario, $email, $telefone, $senha){
    $conn = new usePDO; 
    $instance = $conn->getInstance(); 

    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome_de_usuario, senha, email) VALUES (?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$nomedeusuario, $hashed_password, $email]);

    $idPessoa = $instance->lastInsertId();
    $sql = "INSERT INTO pessoa (nome, email, telefone, usuario_id) VALUES (?, ?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$nomedeusuario, $email, $telefone, $idPessoa]);

    $result = $stmt->rowCount();

    return $result;
}


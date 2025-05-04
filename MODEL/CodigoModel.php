<?php
require '../service/conexao.php';

function enviarCodigo($email) {
    $conn = new usePDO; 
    $instance = $conn->getInstance(); 

    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $codigo = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        
        $sql = "INSERT INTO codigo (usuario, code) VALUES (?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email, $codigo]);
        
        return $codigo;
    }
    
    return false;
}

function verificarCodigo($email, $codigo) {
    $conn = new usePDO; 
    $instance = $conn->getInstance(); 

    $sql = "SELECT * FROM codigo WHERE usuario = ? AND code = ?";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$email, $codigo]);
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarSenha($email, $novaSenha) {
    $conn = new usePDO; 
    $instance = $conn->getInstance(); 

    $hashed_password = password_hash($novaSenha, PASSWORD_DEFAULT);

    $sql = "UPDATE usuario SET senha = ? WHERE email = ?";
    $stmt = $instance->prepare($sql);
    return $stmt->execute([$hashed_password, $email]);
}
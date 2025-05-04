<?php
session_start();
require_once '../MODEL/CodigoModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $codigo = enviarCodigo($email);
        
        if ($codigo) {
            $_SESSION['email_recuperacao'] = $email;
            header("Location: ../VIEW/PHP/codigo.php?codigo=".$codigo);
            exit();
        } else {
            header("Location: ../VIEW/PHP/email.php?erro=1");
            exit();
        }
    }
    
    if (isset($_POST['codigo'])) {
        $codigo = $_POST['codigo'];
        $email = $_SESSION['email_recuperacao'] ?? '';
        
        if (verificarCodigo($email, $codigo)) {
            header("Location: ../VIEW/PHP/recuperar.php");
            exit();
        } else {
            header("Location: ../VIEW/PHP/codigo.php?erro=1");
            exit();
        }
    }
    
    if (isset($_POST['nova_senha']) && isset($_POST['confirmar_senha'])) {
        $novaSenha = $_POST['nova_senha'];
        $confirmarSenha = $_POST['confirmar_senha'];
        $email = $_SESSION['email_recuperacao'] ?? '';
        
        if ($novaSenha === $confirmarSenha) {
            if (atualizarSenha($email, $novaSenha)) {
                unset($_SESSION['email_recuperacao']);
                header("Location: ../VIEW/PHP/index.php?sucesso=1");
                exit();
            }
        }
        
        header("Location: ../VIEW/PHP/recuperar.php?erro=1");
        exit();
    }
}
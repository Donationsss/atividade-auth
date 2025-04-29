<?php
    session_start();
    require_once '../MODEL/CadastroModel.php';
    require_once '../SERVICE/conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nomedeusuario = $_POST['nomedeusuario'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $confirmarsenha = $_POST['confirmarsenha'];

        if (Usuario::cadastro($pdo, $nomedeusuario, $senha, $email)) {
            echo "Cadastro realizado com sucesso!";
            header("Location: ../VIEW/PHP/index.php");
        } else {
            echo "Erro ao cadastrar! Email já cadastrado.";
        }
    }
<?php

require '../MODEL/cadastroModel.php';
if ($_POST){
    $nomedeusuario = $_POST['nomedeusuario'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];

    $result = register($nomedeusuario, $email, $telefone, $senha, $confirmarsenha);

    if ($result) {
        header("location: ../VIEW/PHP/index.php");
    } else {
        echo  "Falha no registro!";
    }
}
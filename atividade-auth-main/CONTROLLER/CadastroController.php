<?php

    require '../MODEL/CadastroModel.php';

    if($_POST) {
        $nomedeusuario = $_POST['nomedeusuario'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $confirmarsenha = $_POST['confirmarsenha'];

        $result = register($nomedeusuario, $email, $telefone, $senha, $confirmarsenha);
        
        if($result){
            echo 'Cadastro realizado com sucesso! ';
        }else{
            echo 'Não foi possível realizar o cadastro.';
        }
    }
    

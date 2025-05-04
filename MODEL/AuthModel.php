<?php
    require '../service/conexao.php';

    function validLogin($email, $senha){
        $conn = new usePDO; 
        $instance = $conn->getInstance(); 

        $sql = "SELECT * FROM usuario WHERE email = ?";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email]);
        $login = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($login && password_verify($senha, $login['senha'])) {
            return $login;
        } else {
            return false;
        }
    }


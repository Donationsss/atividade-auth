<?php
session_start();
require_once '../MODEL/AuthModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $login = validLogin($email, $senha);

    if ($login) {
        $_SESSION['usuario'] = $login;
        header("Location: ../VIEW/PHP/home.php");
        exit();
    } else {
        header("Location: ../VIEW/PHP/index.php?erro=1");
        exit();
    }
}

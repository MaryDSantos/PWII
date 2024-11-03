<?php
    include "conexao.php";

    $login = $_POST['usuario-login'];
    $senha = $_POST['usuario-senha'];
    $ativo = $_POST['usuario-ativo'] === 'S' ? '1' : '0';

    $sql = "
        INSERT INTO USUARIOS
        (
            LOGIN,
            SENHA,
            ATIVO
        )
        VALUES
        (
            '$login',
            '$senha',
            $ativo
        )
    ";

    if ($conexao->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conexao->error;exit;
    }

    $conexao->close();

    header('Location: usuarios.php');
?>
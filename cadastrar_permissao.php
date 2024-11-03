<?php
    include "conexao.php";

    $funcao = $_POST['permissao-funcao'];
    $descricao = $_POST['permissao-descricao'];

    $sql = "
        INSERT INTO PERMISSOES
        (
            ROLE,
            DESCRICAO
        )
        VALUES
        (
            '$funcao',
            '$descricao'
        )
    ";

    if ($conexao->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conexao->error;exit;
    }

    $conexao->close();

    header('Location: permissoes.php');
?>
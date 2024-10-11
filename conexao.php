<?php 
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "PW_BD"; 

$script = "
    CREATE DATABASE PW_BD;
    USE PW_BD;
    CREATE TABLE PRODUTOS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        DESCRICAO VARCHAR(150) NOT NULL,
        CODIGO_BARRAS VARCHAR(25) NOT NULL,
        VALOR DECIMAL(10,2) NOT NULL,
        IMAGEM VARCHAR(50),
        ATIVO BIT NOT NULL
    );
    insert into produtos (descricao, codigo_barra, valor, ativo) values('amendoin','1848654986989495', 5.50, 1);
    insert into produtos (descricao, codigo_barra, valor, ativo) values('goiabinha','264921581578754', 5.50, 1);

";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
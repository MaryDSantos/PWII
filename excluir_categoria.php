<?php

if( !empty($_GET['id']) && isset( $_GET['id'] ) )
{
    //Logica da exclusão
    include 'conexao.php';
    $sql = "Delete from categorias where id = $_GET[id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        header('location: categorias.php');
    }
    else
    {
        //aqui vai uma lógica caso o delete from não funcione
        //aqui fica o mesmo redirecionamento porem com a mensagem de erro
    }
}
else
{
    header('location: categorias.php');
}



?>
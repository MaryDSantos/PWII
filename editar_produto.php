<?php include "cabecalho.php";?>

    <?php
    if (isset($GET["id"])&& !empty($GET['id']))
    {
        include "conexao.php";
        $sql = "selec id, descricao, valor, codigo_barras from produtos where id= $_GET[id]";
        $resultado = $conexao->query($sql);
        if($resultado)
        {
            if($resultado->num_rows>0) 
            {
                while($row = $resultado->fetch_assoc()) 
                {
                $id = $row["id"];
                $descricao = $row["Descricao"];
                $valor = $row["valor"];
                $codigo_bararas = $row["codigo_barras"];   
                }
                else
                {
                    header("location: Produtos.php");
                }               
            }
            else
            {
                header("location: Produtos.php");
            }
        }
        else
        {
            header("location: Produtos.php");
        }
    }
    else
    {
        header("location: Produtos.php");
    }

?>

<form action="editar_produto.php" method = "post">
<input name="id" value="<?php echo $id ?>"/>
<input name="descricao" value="<?php echo $descricao ?>"/>
<input name="valor" value="<?php echo $valor ?>"/>
<input name="codigo_barras" value="<?php echo $codigo_barras ?>"/>
<button type="submit">
    salvar Alterações
<button>
</form>

<?php include "rodape.php";?>
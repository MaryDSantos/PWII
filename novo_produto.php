<?php include "cabecalho.php";?>

<?php
echo "<pre>";
echo "<h4>get mostra no link</h4>";
echo "<h4>post não aparece no link (apos finalizar um cadastro)</h4>";
echo "</pre>";
?>

<?php
if (isset ($_POST["nome"]) 
&& isset ($_POST["valor"])
&& isset ($_POST["codigobarras"])
&& isset ($_POST["datavalidade"])
)
{
    if(empty($_POST["nome"])){
        echo "<div class ='alert alert-danger'>campo nome pode estar em branco </div>";
    }else if(empty($_POST["valor"])){
        echo "<div class ='alert alert-danger'>campo valor pode estar em branco </div>";
    }else if(empty($_POST["codigobarras"])){
        echo "<div class ='alert alert-danger'>campo cogido de barra pode estar em branco </div>";
    }else if{
        echo"<br><div class='alert alert=danger'> campo data de validade nao pode estar em branco</div>";
    }else{
        include "conexao.php";

        $nome = $_POST["nome"];
        $valor = str_replace(",",".",$_POST["valor"]);
        $codigobarras = $_POST["codigobarras"];

        $query = "INSERT INTO produtos (DESCRICAO, VALOR, CODIGO_BARRAS, ATIVO)

            VALUES ('$nome', $valor, '$codigobarras', 1)";

            $resultado = $conexao->query($query);
            if($resultado){
                echo"<div class='alert alert-success'>
                salvo no banco com sucesso </div>";
            }

        //Executa a logica do progama
        //salvar no banco
        echo "<h1> salvo no banco com sucesso</h1>";
    }
}
?>

<form action="novo_produto.php" method="post">
<label>Nome</label>
<input type="text" name="nome" />
<br>
<label>Valor</label>
<input type="number" name="valor" />
<br>
<label>Codigo</label>
<input type="text" name="codigobarras" />
<br>
<label>Data de Validade</label>
<input type="date" name="datavalidade" />
<br>
<button type='submit' class='btn btn-success'>
    Enviar os dados 
</button>

</form>

<?php include "rodape.php";?>
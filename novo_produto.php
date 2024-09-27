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
    }else{
        echo"<br><div class='alert alert=danger'> campo data de validade nao pode estar em branco</div>";
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
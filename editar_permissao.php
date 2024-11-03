<?php include 'cabecalho.php'; ?>

<?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $dados_permissao = [];
    
        $sql = "SELECT id, role, descricao FROM permissoes WHERE id = $id;";
    
        $resultado = $conexao->query($sql);
        $conexao->close();
    
        if ($resultado->num_rows > 0) {
            $dados_permissao = $resultado->fetch_assoc();
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['permissao-id'];
        $funcao = $_POST['permissao-funcao'];
        $descricao = $_POST['permissao-descricao'];

        $sql = "
            UPDATE permissoes
            SET
                role = '$funcao',
                descricao = '$descricao'
            WHERE
                id = $id
        ";

        $conexao->query($sql);
        $conexao->close();

        header('Location: permissoes.php');
    }
?>

<div style='display: flex; justify-content: center;'>
    <div style="padding: 10px;">
        <h4>Editar permissão</h4>
        <form action="editar_permissao.php" method="post">
            <div style="display: none;">
                <?php echo '<input type="text" value="'.$dados_permissao['id'].'" name="permissao-id" id="permissao-id" readonly>'; ?>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="permissao-funcao">Função</label><br>
                <?php echo '<input type="text" value="'.$dados_permissao['role'].'" name="permissao-funcao" class="form-control" id="permissao-funcao" required pattern=".*\S.*" title="Este campo não pode conter apenas espaços" maxlength="50">'; ?>
            </div>
        
            <div style="margin-bottom: 10px;">
                <label for="permissao-descricao">Descrição</label><br>
                <?php echo '<input type="text" value="'.$dados_permissao['descricao'].'" name="permissao-descricao" class="form-control" id="permissao-descricao" required pattern=".*\S.*" title="Este campo não pode conter apenas espaços" maxlength="150">'; ?>
            </div>
            <div>
                <input type="submit" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<?php include 'rodape.php'; ?>
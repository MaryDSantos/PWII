<?php include 'cabecalho.php'; ?>

<?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $dados_usuario = [];
    
        $sql = "SELECT id, login, senha, ativo FROM usuarios WHERE id = $id;";
    
        $resultado = $conexao->query($sql);
        $conexao->close();
    
        if ($resultado->num_rows > 0) {
            $dados_usuario = $resultado->fetch_assoc();
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['usuario-id'];
        $login = $_POST['usuario-login'];
        $senha = $_POST['usuario-senha'];
        $ativo = $_POST['usuario-ativo'] === 'S' ? 1 : 0;

        $sql = "
            UPDATE usuarios
            SET
                login = '$login',
                senha = '$senha',
                ativo = $ativo
            WHERE
                id = $id
        ";

        $conexao->query($sql);
        $conexao->close();

        header('Location: usuarios.php');
    }
?>

<div id="container-edicao-usuarios" style='display: flex; justify-content: center;'>
    <div id="login" style="padding: 10px;">
        <h4>Editar usuário</h4>
        <form action="editar_usuario.php" method="post">
            <div style="display: none;">
                <?php echo '<input type="text" value="'.$dados_usuario['id'].'" name="usuario-id" id="usuario-id" readonly>'; ?>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="usuario-login">Login</label><br>
                <?php echo '<input type="text" value="'.$dados_usuario['login'].'" name="usuario-login" class="form-control" id="usuario-login" required pattern=".*\S.*" title="Este campo não pode conter apenas espaços" maxlength="50">'; ?>
            </div>
        
            <div style="margin-bottom: 10px;">
                <label for="usuario-senha">Senha</label><br>
                <?php echo '<input type="password" value="'.$dados_usuario['senha'].'" name="usuario-senha" class="form-control" id="usuario-senha" required pattern=".*\S.*" title="Este campo não pode conter apenas espaços" maxlength="80">'; ?>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="usuario-ativo">Ativo</label><br>
                <select class="form-control" id="usuario-ativo" name="usuario-ativo" required>
                    <?php 
                        if ($dados_usuario['ativo'] == 1) {
                            echo '<option value="S" selected>Sim</option>';
                            echo '<option value="N">Não</option>';
                        }
                        else {
                            echo '<option value="S">Sim</option>';
                            echo '<option value="N" selected>Não</option>';
                        }
                    ?>
                </select>
            </div>
            <div>
                <input type="submit" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<?php include 'rodape.php'; ?>
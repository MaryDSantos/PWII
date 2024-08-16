<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula pw</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pagina inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">Variavel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="if.php">if</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">while</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bootstrap.php">bootestrap</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container">
      <h1>Estrutura condiciona (IF ELSE)</h1>
        
        <p>$inteira = 10</p>
        <p>$nome = "prof"</p>
        <p>$valor = 10.50 </p>
        <p>$ativo = true </p>
<hr>
    <pre>
    <p>if($inteira == 10){
        echo "o conteudo é 10";  
        }
        else if($inteira >= 11){
        echo "maior ou igual a 11";
        }
        else{
        echo "não é 10";
        }
    </pre>

    <?php
        $inteira = 5;
        if ($inteira == 10){
            echo "<h2>A variavel é 10 </h2>";
        }else if ($inteira >= 11){
            echo "<h2>A variavel é maior ou igual a 11 </h2>";
        }else{
            echo "<h2>Avariavel so pode ser menor que 10 </h2>";
        }
    ?>
<hr>
    <p>
        As variaveis string podem ser contados os caracteres e usados no if
    </p>

    <pre>
        if(strlen($nome) >10 ){
        echo "seu nome tem mais que 10 caracteres quantidade é ".strlen($nome);
        }
    </pre>

    <?php
        $nome = "Mariana";
        if(strlen($nome) > 5 ){
        echo "<h2>Seu nome tem mais que 10 caracteres quantidade é ".strlen($nome)."</h2>";
        }
    ?>
<hr>
    <p>
        Podemos verificar se a variavel $nome esta vasia
    </p>

    <pre>
        if (empty($nome)){
            echo "Sua variavel esta vazia";
        }else{
            echo "tem coisa nessa variavel $nome";
        }
    </pre>

    <?php
        $nome = " ";
        if (empty($nome)){
            echo "<h2> Sua variavel esta vazia</h2>";
        }else{
            echo "<h2>tem coisa nessa variavel $nome</h2>";
        }
    ?>
<hr>
    <p>
        Tambem podemos comparar string normalmente
    </p>

    <pre>
        if($nome == "Mariana"){
            echo "nome igual";
        }else{
            echo "nome diferentes";
        }
    </pre>

    <?php
        $nome = "Luan";
        if($nome == "Mariana"){
            echo "<h2>Nome igual</h2>";
        }else{
            echo "<h2>Nome diferentes</h2>";
        }
    ?>
<hr>
    <p>
        Podemos verificar se a variavel é verdadeira ou falsa
    </p>

    <pre>
        if($ativo){
            echo "verdadeiro";
        }else{
            echo "falso";
        }
    </pre>

    <?php
        $ativo = true;
        if($ativo){
        echo "<h2>verdadeiro</h2>"; 
        }else{
        echo "<h2>falso</h2>";
        }
    ?>

    </div>
<script src="bootstrap.bundle.min.js"></script>


</body>
</html>
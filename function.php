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
        <li class="nav-item">
          <a class="nav-link" href="array.php">Array</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="exerciciosarray.php">Exercicios Array</a>
        </li>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="function.php">function</a>
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


<h1>Funções nativas</h1>


<p> Funções nativas são funções que o proprio php 
    nos fornece. como por exemplo: 
        a função isset(),//Verica se existe a variavel 
        a função empty(),//verifica se a variavel esta vazia
        a função count(), conta quantos itens tem no array 
        a função include "",//inclui um arquivo dentro do outros 
        a função echo "",//imprime na tela 
        a função strlen(),//conta quantos caracteres tem uma string 
        a função explode(),//cria um array a partir de uma frase 
        a função replace(),//troca caracteres dentro de uma string 
        
<?php
    echo "<h1>";
    echo date("h:i:s");
    echo "</h1>";
?>

<?php
    echo "<h1>";
    echo date("Ymd");
    echo "</h1>";
?>


<?php
    echo "<pre>";
    print_r(getdate());
    echo "</pre>";
?>

<?php
    echo "<h1>";
    $array_data = getdate();
    echo $array_data["mday"]."/".$array_data["mon"]."/".$array_data["year"];
    echo "</h1>";
        
    echo"<h1>";
    echo rand(5,15);
    echo"</h1>";
?>


<h1>Funções Personalizadas</h1>

</div>
<script src="bootstrap.bundle.min.js"></script>


</body>
</html>
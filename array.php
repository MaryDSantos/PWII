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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container">
      <h1>Array</h1>

    <p> As variaveis do tipo array são muito utilizadas quando 
        vamos listar coisas.
        Os arrays em php são listas de quaisquer tipo de dados.
    </p>

    <pre>
        $array = [];
        $array = array ();
        $array[0] ="oi";
        $array[2] = 10;
        $array ["mariana"]="aluno";
        $array[$array[2]]="teste";
    </pre>
    <?php          //0    1    2       3     4     5
    $array = array ("oi",10,"Aluno","teste",1.99,true);
    echo "<h2> Como saber se deu certo ?</h2>";
    var_dump($array);

    echo"<pre>";
    print_r($array);
    echo"</pre>";

    echo"<pre>";
    var_dump($array);
    echo"</pre>";

    for($i=0; $i < count($array);$i++)
    {
      echo"$array[$i] <br>";
    }
    ?>
    <p> Existe diversas formas de criar uma variavel array</p>
    <pre>
    array(
      chave => valor,
      chave => valor2,
      chave => valor3,
      ...
    )
    </pre>

    <p>
    Esse tipo de array (chave e valor) funciona da mesma 
    forma porem não existem mais os indice com numeros passando 
    a usar string como chave para os valores
    </p>
    
    <?php
    $array = array(
        "foo" => "bar",
        "bar" => "foo",
    );

    // Utilizando a sintaxe curta
    $array = [
        "foo" => "bar",
        "bar" => "foo",
    ];
    echo"<pre>";
    print_r($array);
    echo"</pre>";

    $resultado = [
      "id" => 1,
      "Nome" => "Mariana",
      "Idade" => 21,
      "Salario" => 10,
      "aluno" => true
    ];
      echo"<pre>";
      print_r($resultado);
      echo "</pre>";

      echo $resultado ["Nome"];
    ?>

    <p> Para varrer todo o array de chave e valor 
      precisamos de um laço de repetição exclusivo chamado foreach()</p>
      <pre>

      foreach($array as $chaves => $valor)
      {
        echo $array[$chave];
        //ou 
        echo $valor;
      }
      </pre>

      <?php   //variavel array chave valor
      foreach($resultado as $chave => $valor)
      {
      echo "Valor pela chave: ".$resultado[$chave]."<br>";
      //ou 
      echo "Apenas valor: ".$valor."<br>";
      echo "Apenas chave: ".$chave."<br>";
      }
      ?>
    </div>
<script src="bootstrap.bundle.min.js"></script>


</body>
</html>
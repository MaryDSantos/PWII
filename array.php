<?php include "cabecalho.php";?>
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
    <?php include "rodape.php";?>
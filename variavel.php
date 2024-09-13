<?php include "cabecalho.php";?>

        <h1>Variaveis em php</h1>
        <p> $numero = 10; //AQUI É UMA VARIAVEL INTEIRA </p> 
        <p> $string = "Mariana camisa 10"; </p>
        <p> $string1 = "Mariana camisa ".$numero; </p>
        <p> $string2 = "Mariana camisa $numero"; </p>
        <p> $valordecimal = 10.50; </p>
        <p> $ativo = true; </p>
        <?php // Tudo que esta entre as tags do php nao aparece na tela ?>

        <?php // a nao ser que usemos a funçao echo com string?>

        <?php
        echo "hello world";
        echo "<br>";
        $numero = 10;
        $nome = "Mariana";
        $frase1 = "<p> $nome camisa $numero frase com paragrafo </p>";
        $frase2 = $nome. " camisa " .$numero;//cocatenação das antigas
        echo $frase1;
        echo "$frase2 é o que tem dentro da variavel";
        ?>
<?php include "rodape.php";?>
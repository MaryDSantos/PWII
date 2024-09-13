<?php include "cabecalho.php";?>
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

<?php include "rodape.php";?>
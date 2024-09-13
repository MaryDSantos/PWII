<?php include "cabecalho.php";?>


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

<?php include "rodape.php";?>
<?php include "cabecalho.php";?>

<?php
echo "<h1>Exercício 1</h1>";

$nome = "Mariana"; 
$idade = 21; 

echo "Meu nome é $nome e tenho $idade anos.";


echo "<hr>";

echo "<h1>Exercício 2</h1>";

$numero = rand(54, 185);

if ($numero % 2 == 0) {
    echo "$numero é par.";
} else {
    echo "$numero é ímpar.";
}

echo "<hr>";

echo "<h1>Exercício 3</h1>";

for ($i = 584; $i <= 1970; $i++) {
    
   if ($i % 2 == 0) {
   echo "Número $i é par.";
   echo "<br>";
   }else{
    echo "Número $i";
    echo "<br>";
    /*no Exercicio pede para apenas escrever na frente dos numeros pares 
    mais se fosse escrever nos impares ficaria assim
    else{
    echo "Número $i é impar";
    echo "<br>";*/ 
   }
}

echo "<hr>";

echo "<h1>Exercício 4</h1>";

$frutas = ["Pecego<br>", "Tangerina<br>", "Abacate<br>", "abacaxi<br>", "Açai<br>"];


foreach ($frutas as $fruta) {
    echo "$fruta\n";
}

echo "<hr>";


$clientes = array(
    array("nome" => "Mariana", "telefone" => "(14)995483249","cep" => "215486-654"),
    array("nome" => "Tayna", "telefone" => "(14)994582134", "cep" => "5624892-653"),
    array("nome" => "Shara","telefone" => "(14)996548213", "cep" => "562483-283"),
    array("nome" => "Willian","telefone" => "(14)995487521", "cep" => "56248-249")
);


foreach ($clientes as $cliente) {
    echo "<br>";
    echo "Nome: " .$cliente["nome"]. "<br>";
    echo "Telefone: " .$cliente["telefone"]. "<br>";
    echo "CEP: " .$cliente["cep"]. "<br>";
}

?>

<?php include "rodape.php";?>
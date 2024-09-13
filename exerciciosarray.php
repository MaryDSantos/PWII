<?php include "cabecalho.php";?>
      <h1>Exercicios</h1>
    

    <?php           //   0       1        2
$frutas = array ("maça","laranja","banana");

print_r($frutas); echo "<br>";// Escreve na tela os dados básicos do array

var_dump($frutas);echo "<br>"; // Detalha os dados do array

echo count($frutas);echo "<br>";//escreva na tela a quantidade de intens que o array possui

array_push($frutas,"Kiwi"); echo "<br>";//Adiciona um novo item ao array

foreach($frutas as $fruta){
    echo $fruta. "<br>";
};echo "<br>";

?>

<p>Exercicios</p><br>
<p>Gere um Array que cada indice desse array receba um novo 
array com as chaves Nome, idade e email 
com seus respectivos valores inventados aleatoriamente 
</p><br>

<?php
$pessoas = array(

array(
    "nome" => "Mariana",
    "idade" => "21",
    "email" => "mariana@gmail.com"
),

array(
    "nome" => "Maria",
    "idade" => "15",
    "email" => "mari@gmail.com"
),


array(
    "nome" => "Eli",
    "idade" => "55",
    "email" => "eli@gmail.com"
),

array(
    "nome" => "luan",
    "idade" => "25",
    "email" => "luan@gmail.com"
),

array(
    "nome" => "Americo",
    "idade" => "62",
    "email" => "americo@gmail.com"
),

array(
    "nome" => "Matheus",
    "idade" => "20",
    "email" => "matheus@gmail.com"
),

array(
    "nome" => "samuel",
    "idade" => "2",
    "email" => "samuel@gmail.com"
),

array(
    "nome" => "Armando",
    "idade" => "35",
    "email" => "armando@gmail.com"
),

array(
    "nome" => "Arieli",
    "idade" => "30",
    "email" => "arieli@gmail.com"
),

array(
    "nome" => "Ana",
    "idade" => "21",
    "email" => "ana@gmail.com"
),

//for($i;$i< count($pessoas);$i++)
//{
    //echo $pessoas[$i]."<br>";
    //echo $i;
    //echo "<pre>";
    //print_r($pessoas[$i]);
    //echo "</pre>";
//}
);

echo"<table border='5'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>idade</td>";
echo "<td>email</td>";
echo "</tr>";

for($i = 0;$i< count($pessoas);$i++)
{
    echo "<tr>";
    echo "<td>".$pessoas[$i]["nome"]."</td>";
    echo "<td>".$pessoas[$i]["idade"]."</td>";
    echo "<td>".$pessoas[$i]["email"]."</td>";
    echo "</tr>";
}

echo "</table>";

echo"<table border='5'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>idade</td>";
echo "<td>email</td>";
echo "</tr>";

foreach($pessoas as $itemlista)
{
    echo "<tr>";
    echo "<td>".$itemlista["nome"]."</td>";
    echo "<td>".$itemlista["idade"]."</td>";
    echo "<td>".$itemlista["email"]."</td>";
    echo "</tr>";
}


echo "</table>";

?>
<?php include "rodape.php";?>

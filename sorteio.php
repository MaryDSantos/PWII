<?php include "cabecalho.php";?>
<?php

$aluno=array(
"JONAS SILVA JATOBA",      
"MARCOS VINÍCIUS SANCHES CARDOSO",     
"MARIANA DOS SANTOS",      
"MATHEUS MARQUEZIM GENEBRA",       
"RAFAEL TSUTAI MASSAKI",       
"REBÉCA RODRIGUES DE OLIVEIRA",        
"RODOLFO LEONARDO ROMO",       
"RODRIGO MIRANDA DOS SANTOS",      
"SARAH VITÓRIA PEDROSO DA SILVA",      
"TAYNA ADRIANA DA SILVA",      
"VANESSA ALVARES BERNARDO",        
"VINICIUS GABRIEL GONÇALVES DOS SANTOS",       
"VITOR TAKAYUKI HIROTOMI",     
"WYLLIAM DOS SANTOS FLORENTINO"
);
?>

<?php
$vencedor = $aluno[array_rand($aluno)];

echo"<h1>";
echo "Vencedor é: ".$vencedor;
echo"<h1>";
?>

<?php include "rodape.php";?>
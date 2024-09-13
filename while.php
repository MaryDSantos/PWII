<?php include "cabecalho.php";?>
    <h1>Laço de repetição while</h1>
    <p> O laço de repetição while necessita de 3 itens para tornar um loop</p>
    <ol>
    <li>Variavel Controladora</li>
    <li>Condição da Continuação</li>
    <li>Incremento da variavel controladora</li>
    </oi>
    
    <pre>
        $i = 0; //Declaração da variavel controladora
        while( $i < 10 )
        {
            //executo esse bloco de codigo

            //incrementando a variavel de controle
            $i = $i +1;
            $i++;
            $i +=1;
        }
    </pre>
        <p>A derivação do while obrigatoriamente executa uma vez no minimo o bloco de codigo</p>
        <pre>
            $i=0;
            do{
                $i++;
            }while( $i < 10);
        </pre>
            exemplo:
        <?php
        $i = 1;
        while($i<20)
        {
            echo "<h1> $i º h1 </h1>";
            $i++;
        }
        ?>

        <p>outra forma de implementação é:</p>
        <?php
        $i = 1;
        do{
        ?>
        <h2> Html normal</h2>
        <p><?php echo $i;?> </p>
        <?php
        $i++;
        }while($i<5);
        ?>


<?php include "rodape.php";?>
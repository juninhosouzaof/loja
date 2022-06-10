<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Visão Geral do Estoque</title>
</head>

<body>

<!--MENU DA PÁGINA-->
<?php

include('menu.php')

?>


        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Visão Geral do Estoque</h1>
        </header>
        <hr>
        <br>

    
    
    <!--CÓDIGO PHP - VISÃO GERAL DO ESTOQUE-->
    <?php

    include('conexaobanco.php');

    $sql = mysqli_query($conexaobanco, "SELECT * FROM estoque");

        while ($dados = mysqli_fetch_array($sql)) {

            $codigoprod = $dados['codigoprod'];
            $descricao = $dados['descricao'];
            $fornecedor = $dados['fornecedor'];
            $precounitario = $dados['precounitario'];
            $quantentrada = $dados['quantentrada'];
            $quantsaida = $dados['quantsaida'];
            $valorentrada = $dados['valorentrada'];
            $valorsaida = $dados['valorsaida'];


            echo "
            <table border='1'>

            <tr>
            <td>Nome</td>
            <td>$codigoprod</td>
            </tr>
            
            <tr>
            <td>Descrição</td>
            <td>$descricao</td>
            </tr>
            
            <tr>
            <td>Fornecedor</td>
            <td>$fornecedor</td>
            </tr>
            
            <tr>
            <td>Preço unitário</td>
            <td>$precounitario</td>
            </tr>
            
            <tr>
            <td>Entrada no estoque (QTD)</td>
            <td>$quantentrada</td>
            </tr>
            
            <tr>
            <td>Saída do estoque (QTD)</td>
            <td>$quantsaida</td>
            </tr>
            
            <tr>
            <td>Entrada no estoque (R$)</td>
            <td>$valorentrada</td>
            </tr>
            
            <tr>
            <td>Saída do estoque (R$)</td>
            <td>$valorsaida</td>
            </tr>

            </table>
            
                 
            <a href='editarprod.php?codigoprod=".$dados['codigoprod']."'>Editar dados</a> | 
            <a href='deletarprod.php?codigoprod=".$dados['codigoprod']."'>Deletar dados</a> <br>

            <hr>
            ";
        }

    ?>

            <!--RODAPÉ-->
            <br>
            <hr>
            <footer>
                <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
            </footer>
</body>

</html>
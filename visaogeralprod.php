<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Visão Geral do Estoque</title>
</head>

<body>

<!--MENU DO SITE-->
<?php
include('menu.php');

?>


        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Visão Geral do Estoque</h1>
        </header>
        <hr>
    
        <!--SEÇÃO DE BUSCA REFINADA EMBUTIDA NA VISÃO GERAL DO ESTOQUE-->
        <header>
        <h3>Loja de Roupas - Busca Refinada de Produtos</h3>
        </header>
        

        <!--FORMULÁRIO DE BUSCA REFINADA-->

        <form action="buscaprod.php" method="post">

            <label>Código do produto: </label><input type="text" name="codigoprod">

            <input type="submit" value="Buscar">

        </form>

        <br>
        <hr>
    
    <!--CÓDIGO PHP - VISÃO GERAL DO ESTOQUE-->

    <h3>Itens do estoque</h3>

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
            <td>CÓDIGO DO PRODUTO</td>
            <td>$codigoprod</td>
            </tr>

            <tr>
            <td>DESCRIÇÃO</td>
            <td>$descricao</td>
            </tr>

            <tr>
            <td>FORNECEDOR</td>
            <td>$fornecedor</td>
            </tr>

            <tr>
            <td>PREÇO UNITÁRIO</td>
            <td>$precounitario</td>
            </tr>

            <tr>
            <td>ENTRADA NO ESTOQUE (QTD)</td>
            <td>$quantentrada</td>
            </tr>

            <tr>
            <td>SAÍDA DO ESTOQUE (QTD)</td>
            <td>$quantsaida</td>
            </tr>

            <tr>
            <td>ENTRADA NO ESTOQUE (R$)</td>
            <td>$valorentrada</td>
            </tr>

            <tr>
            <td>SAÍDA DO ESTOQUE (R$)</td>
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
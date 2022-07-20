<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Busca Refinada de Produtos</title>
</head>


<?php
include('menu.php');

?>

    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Visão Geral do Estoque</h1>
    </header>
    <hr>
    <br>

<!--CÓDIGO PHP - AÇÃO DE BUSCA E RESULTADO DA BUSCA-->
<?php

include('conexaobanco.php');

$codigoprod = $_POST['codigoprod'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM estoque WHERE codigoprod = '$codigoprod'");

    while ($dados = mysqli_fetch_array($sql)) {

        $codigoprod = $dados['codigoprod'];
        $descricao = $dados['descricao'];
        $fornecedor = $dados['fornecedor'];
        $precounitario = $dados['precounitario'];
        $quantentrada = $dados['quantentrada'];
        $quantsaida = $dados['quantsaida'];
        $valorentrada = ($precounitario * $quantentrada)
        $valorsaida = ($precounitario * $quantsaida)

        echo "
        
        <!--SEÇÃO DE BUSCA REFINADA EMBUTIDA NA VISÃO GERAL DO ESTOQUE-->
        <header>
        <h3>Busca Refinada de Produtos</h3>
        </header>
        

        <!--FORMULÁRIO DE BUSCA REFINADA-->

        <form action='buscaprod.php' method='post'>

            <label>Código do produto: </label><input type='text' name='codigoprod'>

            <input type='submit' value='Buscar'>

        </form>

        <br>
        <hr>

        <h3>Resultado da busca</h3>

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
        
            <a href='visaogeralprod.php'>Voltar à Visão Geral do Estoque</a> <br>
            
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
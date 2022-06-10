<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Busca Refinada de Produtos</title>
</head>


<?php

include('menu.php')

?>

    <!--TÍTULO DA PÁGINA-->
    <header>
        <h1>Loja de Roupas - Busca Refinada de Produtos</h1>
    </header>
    <hr>
    <br>

    <!--FORMULÁRIO DE BUSCA REFINADA-->

    <form action="" method="post">

        <label>Código do produto: </label><input type="text" name="codigoprod">

        <input type="submit" value="Buscar">

<!--RESULTADO DA PESQUISA-->
<hr>

<?php

include('conexaobanco.php');

@$codigoprod = $_POST['codigoprod'];

$sql = mysqli_query($conexaobanco, "SELECT * FROM estoque WHERE codigoprod = '$codigoprod'");

    while ($dado = mysqli_fetch_array($sql)) {

        $codigoprod = $dado['codigoprod'];
        $descricao = $dado['descricao'];
        $fornecedor = $dado['fornecedor'];
        $precounitario = $dado['precounitario'];
        $quantentrada = $dado['quantentrada'];
        $quantsaida = $dado['quantsaida'];
        $valorentrada = $dado['valorentrada'];
        $valorsaida = $dado['valorsaida'];

        echo "<table border='3'>

        <tr>
        <td>Cód. do produto</td>
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
        <td>Entrada (QTD)</td>
        <td>$quantentrada</td>
        </tr>

        <tr>
        <td>Saída (QTD)</td>
        <td>$quantsaida</td>
        </tr>

        <tr>
        <td>Entrada (R$)</td>
        <td>$valorentrada</td>
        </tr>

        <tr>
        <td>Saída (R$)</td>
        <td>$valorsaida</td>
        </tr>

        </table>
        
        ";
    }

?>


    </form>

        <!--RODAPÉ-->
        <br>
    <hr>
    <footer>
        <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
    </footer>

    </body>

</html>
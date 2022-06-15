<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Edição de dados do funcionário</title>
</head>
<body>

<!--MENU DO SITE-->
<?php
include('menu.php');

?>

        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Edição de dados do funcionário</h1>
        </header>
        <hr>
        <br>

<?php

include('conexaobanco.php');

$codigoprod = $_POST['codigoprod'];
$descricao = $_POST['descricao'];
$fornecedor = $_POST['fornecedor'];
$precounitario = $_POST['precounitario'];
$quantentrada = $_POST['quantentrada'];
$quantsaida = $_POST['quantsaida'];
$valorentrada = $_POST['valorentrada'];
$valorsaida = $_POST['valorsaida'];

$sql = mysqli_query($conexaobanco, "UPDATE estoque SET codigoprod = '$codigoprod' WHERE codigoprod = '$codigoprod'");

$sql2 = mysqli_query($conexaobanco, "UPDATE estoque SET descricao = '$descricao' WHERE codigoprod = '$codigoprod'");

$sql3 = mysqli_query($conexaobanco, "UPDATE estoque SET fornecedor = '$fornecedor' WHERE codigoprod = '$codigoprod'");

$sql4 = mysqli_query($conexaobanco, "UPDATE estoque SET precounitario = '$precounitario' WHERE codigoprod = '$codigoprod'");

$sql5 = mysqli_query($conexaobanco, "UPDATE estoque SET quantentrada = '$quantentrada' WHERE codigoprod = '$codigoprod'");

$sql6 = mysqli_query($conexaobanco, "UPDATE estoque SET quantsaida = '$quantsaida' WHERE codigoprod = '$codigoprod'");

$sql7 = mysqli_query($conexaobanco, "UPDATE estoque SET valorentrada = '$valorentrada' WHERE codigoprod = '$codigoprod'");

$sql8 = mysqli_query($conexaobanco, "UPDATE estoque SET valorsaida = '$valorsaida' WHERE codigoprod = '$codigoprod'");

    if ($sql) {
        echo "Os dados do item ".$descricao." foram alterados com sucesso! <br><a href='visaogeralprod.php'>Voltar à Visão Geral do Estoque</a>";
    } else {
        echo "Ocorreu um erro ao alterar os dados do item. Tente novamente.";
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